<?php

require_once('Model.php');


class NotebookModel extends Model {

    private function uploadImage($image){
        $target = "img/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    function getAll() {

        $query = $this->getDb()->prepare('SELECT n.*,m.nombre FROM notebooks n INNER JOIN marcas m ON m.id_marca = n.fk_marca');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    function getNotebookById($id){
        $query = $this->getDb()->prepare('SELECT n.*,m.nombre FROM notebooks n INNER JOIN marcas m ON m.id_marca = n.fk_marca WHERE id_notebook = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getNotebookByMarca($marca){
        $query = $this->getDb()->prepare('SELECT n.*,m.nombre FROM notebooks n INNER JOIN marcas m ON m.id_marca = n.fk_marca WHERE nombre = ?');
        $query->execute([$marca]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function deleteNotebook($id) {
        $query = $this->getDb()->prepare('DELETE FROM notebooks WHERE id_notebook = ?');
        $query->execute([$id]);
    }
    public function add($proc, $ram, $placa, $disco, $marca, $imagen = null) {
        $pathImg = null;
        if($imagen){
            $pathImg = $this->uploadImage($imagen);
        }
        
        $query = $this->getDb()->prepare('INSERT INTO notebooks (procesador, memoria_ram, placa_video, disco, fk_marca, imagen) VALUES (?, ?, ?, ?, ?, ?)'); 

        $proceso = $query->execute([$proc, $ram, $placa, $disco, $marca, $pathImg]);
        return $proceso;
    }
    public function modificarNotebook($proc, $ram, $placa, $disco, $marca, $imagen = null, $id) {
        $pathImg = null;
        if($imagen){
            $pathImg = $this->uploadImage($imagen);
        }
        $query = $this->getDb()->prepare('UPDATE notebooks SET procesador = ? , memoria_ram = ? , placa_video = ? , disco = ? , fk_marca = ? , imagen = ? WHERE id_notebook = ?'); 

        $proceso = $query->execute([$proc, $ram, $placa, $disco, $marca, $pathImg, $id]);

        return $proceso;
    }
}
?>