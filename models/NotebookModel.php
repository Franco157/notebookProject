<?php

require_once('Model.php');


class NotebookModel extends Model {


    function getAll() {

        $query = $this->getDb()->prepare('SELECT n.*,m.nombre FROM notebooks n INNER JOIN marcas m ON m.id_marca = n.fk_marca');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getMarcas() {
        $query = $this->getDb()->prepare('SELECT * FROM marcas');
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
    public function add($proc, $ram, $placa, $disco, $marca) {
        $query = $this->getDb()->prepare('INSERT INTO notebooks (procesador, memoria_ram, placa_video, disco, fk_marca) VALUES (?, ?, ?, ?, ?)'); 
        $query->execute([$proc, $ram, $placa, $disco, $marca]);
    }
    public function modificarNotebook($proc, $ram, $placa, $disco, $marca, $id) {
        $query = $this->getDb()->prepare('UPDATE notebooks SET procesador = ? , memoria_ram = ? , placa_video = ? , disco = ? , fk_marca = ? WHERE id_notebook = ?'); 
        $query->execute([$proc, $ram, $placa, $disco, $marca, $id]);
    }
}
?>