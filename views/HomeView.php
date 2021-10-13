<?php

require_once('View.php');

class HomeView extends View {

    public function __construct() {
        parent::__construct();
    }

    function showHome($listaMarcas) {
        $this->getSmarty()->assign('home',BASE_URL.'home');
        $this->getSmarty()->assign('listaMarcas',$listaMarcas);
        $this->getSmarty()->display('templates/home.tpl');

    }
}