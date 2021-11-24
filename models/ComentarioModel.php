<?php

require_once('Model.php');

class ComentarioModel extends Model {


    function getAll() {

        $query = $this->getDb()->prepare('SELECT * FROM comentarios ORDER BY id_comentario ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getComment($id){
        $query = $this->getDb()->prepare('SELECT * FROM comentarios WHERE id_comentario = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getComments($id){
        $query = $this->getDb()->prepare('SELECT comentarios.*, usuarios.usuario FROM comentarios JOIN usuarios ON comentarios.fk_id_usuario = usuarios.id_usuario WHERE fk_id_notebook = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function newComment($notebook, $usuario, $calificacion, $texto) {
        $query = $this->getDb()->prepare('INSERT INTO comentarios (fk_id_notebook, fk_id_usuario, puntuacion, comentario) VALUES (?, ?, ?, ?)');
        $success = $query->execute([$notebook, $usuario, $calificacion, $texto]);
        return $success;
    }

    function deleteComment($id) {
        $query = $this->getDb()->prepare('DELETE FROM comentarios WHERE id_comentario = ?');
        $success = $query->execute([$id]);
        return $success;
    }
}
