<?php

include_once('views/NotebookView.php');
include_once('models/NotebookModel.php');
include_once('helpers/auth.helper.php');


class NotebookController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new NotebookModel();
        $this->view = new NotebookView();
    }

    function showNotebooks() {

           $listaNotebooks = $this->model->getAll();
           $this->view->showNotebooks($listaNotebooks);
    }
    public function showNotebook($id) {
        $notebook = $this->model->getNotebookById($id);
        $this->view->showNotebook($notebook);
    }
    public function showNotebooksByMarca($marca) {
        $notebooks = $this->model->getNotebookByMarca($marca);
        $this->view->showNotebooks($notebooks);
    }
    public function deleteNotebook($id)
    {   
            $this->model->deleteNotebook($id);
            header("Location: " . BASE_URL . 'notebooks');
    }

    public function showFormNotebook() {
        $listaMarcas = $this->model->getMarcas();
        $this->view->showFormNotebook(null, $listaMarcas);
    }    
    public function showEditNotebook($id) {
        $listaMarcas = $this->model->getMarcas();
        $this->view->showEditNotebook(null, $listaMarcas, $id);
    }    

    public function addNotebook() {
        $proce= $_POST['F_procesador'];
        $ram= $_POST['F_ram'];
        $placa = $_POST['F_placa'];
        $disco = $_POST['F_disco'];
        $marca = $_POST['F_marca'];
        $this->model->add($proce, $ram, $placa, $disco, $marca);
        header("Location: " . BASE_URL . 'notebooks');
    }
        
    public function modificarNotebook($id){
        $proce= $_POST['F_procesador'];
        $ram= $_POST['F_ram'];
        $placa = $_POST['F_placa'];
        $disco = $_POST['F_disco'];
        $marca = $_POST['F_marca'];
        $this->model->modificarNotebook($proce, $ram, $placa, $disco, $marca, $id);
        header("Location: " . BASE_URL . 'notebooks');
    }

  
}