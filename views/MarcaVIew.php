<?php

require_once('View.php');

class MarcaView extends View {

    public function __construct() {
        parent::__construct();
    }

    function showMarcas($listaMarcas) {
        $this->getSmarty()->assign('home',BASE_URL.'home');
        $this->getSmarty()->assign('listaMarcas',$listaMarcas);
        $this->getSmarty()->display('templates/marcas.tpl');
    }

    public function showFormMarca() {
        $this->getSmarty()->assign('title', "Form Marca");
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/formMarca.tpl');
    }
    public function showEditMarca($id) {
        $this->getSmarty()->assign('title', "Edit Marca");
        $this->getSmarty()->assign('id_marca',$id);           
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/formEditMarca.tpl');
    }
}