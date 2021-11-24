<?php

require_once('Model.php');

class UserModel extends Model {

    public function getUserByEmail($email) {
        $query = $this->getDb()->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getUserByID($id) {
        $query = $this->getDb()->prepare('SELECT * FROM usuarios WHERE id_usuario = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function add($name, $email, $pass) {

        $passEnc = password_hash($pass, PASSWORD_DEFAULT);
        $query = $this->getDb()->prepare('INSERT INTO usuarios (usuario, email, contraseña) VALUES (?, ?, ?)');
        $query->execute([$name, $email, $passEnc]);

    }

    function getAll() {

        $query = $this->getDb()->prepare('SELECT * FROM usuarios');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteUser($id) {
        $query = $this->getDb()->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
        $query->execute([$id]);
    }

    public function altaAdmin($id) {

        $query = $this->getDb()->prepare('UPDATE usuarios SET administrador = 1 WHERE id_usuario = ?');
        $query->execute([$id]);

    }

    public function bajaAdmin($id) {

        $query = $this->getDb()->prepare('UPDATE usuarios SET administrador = null WHERE id_usuario = ?');
        $query->execute([$id]);

    }

    function countAdmin()
    {
        $query = $this->getDb()->prepare('SELECT COUNT(*) AS total FROM usuarios WHERE administrador = 1');
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
?>