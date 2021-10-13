<?php

require_once('Model.php');

class MarcaModel extends Model {


    public function getAll() {

        $query = $this->getDb()->prepare('SELECT * FROM marcas');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addMarca($nombre) {
            $query = $this->getDb()->prepare('INSERT INTO marcas (nombre) VALUE (?)'); 
            $query->execute([$nombre]);
        }

        function deleteMarca($id_marca) {
            $query = $this->getDb()->prepare('DELETE FROM marcas WHERE id_marca = ?');
            $query->execute([$id_marca]);
        }
        
        public function modificarMarca($nombre, $id_marca) {
            $query = $this->getDb()->prepare('UPDATE marcas SET nombre = ? WHERE id_marca = ?'); 
            $query->execute([$nombre,$id_marca]);
        }
    }

?>