<?php

require_once('View.php');

class NotebookView extends View {

    public function __construct() {
        parent::__construct();
    }

    function showNotebooks($listaNotebooks) {
        $this->getSmarty()->assign('home',BASE_URL.'home');
        $this->getSmarty()->assign('listaNotebooks',$listaNotebooks);
        $this->getSmarty()->display('templates/tablaNotebooks.tpl');
    }

    public function showNotebook($notebook) {
        $this->getSmarty()->assign('title', "notebook");
        $this->getSmarty()->assign('error',null);        
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->assign('notebook',$notebook);
        $this->getSmarty()->display('templates/notebook.tpl');
    }

    public function showFormNotebook($error, $listaMarcas) {
        $this->getSmarty()->assign('title', "Form Notebook");
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->assign('listaMarcas',$listaMarcas);          
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/formNotebook.tpl');
    }
    public function showEditNotebook($error, $listaMarcas, $id) {
        $this->getSmarty()->assign('title', "Edit Notebook");
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->assign('listaMarcas',$listaMarcas); 
        $this->getSmarty()->assign('id_notebook',$id);           
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/modificarNotebook.tpl');
    }
}