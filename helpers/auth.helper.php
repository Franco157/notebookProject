<?php

class AuthHelper {

    public function __construct() {
    
    }

    static private function start() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    static public function login($user) {
        self::start();
        $_SESSION['IS_LOGGED'] = true;
        $_SESSION['ID_USER'] = $user->id_usuario;
        $_SESSION['USER'] = $user->usuario;
        $_SESSION['EMAIL'] = $user->email;
        $_SESSION['ADMIN'] = $user->administrador;
    }


    public static function logout() {
        self::start();
        session_destroy();
    }

    public static function checkLoggedIn() {
        self::start();
        if (!isset($_SESSION['EMAIL'])){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }

    public static function getLoggedEmail() {
        self::start();
        if (isset($_SESSION['EMAIL'])) {
            return $_SESSION['EMAIL'];
        } else {
            return null;
        }
    }

    public static function isAdmin() {
        self::start();
        if (isset($_SESSION['EMAIL'])) {
            return ($_SESSION['ADMIN'] == 1);
        }
        else
            return false;
    }

    public static function getLoggedUser() {
        self::start(); 
        if (isset($_SESSION['EMAIL'])){
            $data=[]; 
            $data['email'] = $_SESSION['EMAIL'];
            $data['user'] = $_SESSION['USER'];
            $data['admin'] = $_SESSION['ADMIN'];
           return $data;
        }
        else
            return null;
    }
    
    static public function getAlltUserData(){
        self::start(); 
        if (isset($_SESSION['EMAIL'])){
            $data=[]; 
            $data['user'] = $_SESSION['USER'];
            $data['id'] =  $_SESSION['ID_USER'];
            $data['email'] =  $_SESSION['EMAIL'] ;
            $data['admin'] = ($_SESSION['ADMIN'] == 1);
           return $data;
        }
        else
            return null;
    }

}