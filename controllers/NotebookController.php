<?php

include_once('views/NotebookView.php');
include_once('models/NotebookModel.php');
include_once('models/MarcaModel.php');
include_once('helpers/auth.helper.php');


class NotebookController {

    private $model;
    private $view;
    private $modelMarca;

    public function __construct() {
        $this->model = new NotebookModel();
        $this->modelMarca = new MarcaModel();
        $this->view = new NotebookView();
    }

    function showNotebooks() {
        $listaNotebooks = $this->model->getAll();
        if($listaNotebooks != null && $listaNotebooks != []){
            $this->view->showNotebooks(null, $listaNotebooks);
        } else {
            $this->view->showNotebooks("No encontró notebooks", $listaNotebooks);
        }
    }
    public function showNotebook($id) {
        $notebook = $this->model->getNotebookById($id);
        if($notebook != null){
            $this->view->showNotebook(null, $notebook);
        } else{
            $this->view->showNotebook("No se encontró notebook con id".$id, $notebook);
        }

    }
    public function showNotebooksByMarca($marca) {
        $listaNotebooks = $this->model->getNotebookByMarca($marca);
        if($listaNotebooks != null && $listaNotebooks != []){
            $this->view->showNotebooks(null, $listaNotebooks);
        } else {
            $this->view->showNotebooks("No se encontraron notebooks con la marca: ".$marca, $listaNotebooks);
        }
    }
    public function deleteNotebook($id)
    {       
        if(AuthHelper::isAdmin()){            
            $this->model->deleteNotebook($id);
            header("Location: " . BASE_URL . 'notebooks');
        }
        header("Location: " . BASE_URL . 'notebooks');
    }

    public function showFormNotebook() {
        if(AuthHelper::isAdmin()){
            $listaMarcas = $this->modelMarca->getAll();
            if($listaMarcas != null && $listaMarcas != []){
                $this->view->showFormNotebook(null, $listaMarcas);
            } else {
                $this->view->showNotebooks("No encontró marcas", $listaMarcas);
            }
        } else {
            header("Location: " . BASE_URL . 'notebooks');
        }
    }    
    public function showEditNotebook($id) {
        if(AuthHelper::isAdmin()){
            $listaMarcas = $this->modelMarca->getAll();
            if($listaMarcas != null && $listaMarcas != []){
                $this->view->showEditNotebook(null, $listaMarcas, $id);
            } else {
                $this->view->showNotebooks("No encontró marcas", $listaMarcas);
            }        
        } else {
            header("Location: " . BASE_URL . 'home');
        }
    }    

    public function addNotebook() {
        $proce= $_POST['F_procesador'];
        $ram= $_POST['F_ram'];
        $placa = $_POST['F_placa'];
        $disco = $_POST['F_disco'];
        $marca = $_POST['F_marca'];
        $image= $_FILES['F_imagen']['size'];
        if ( ($proce != '') && ($ram != '' ) && ($disco != '' )) {
            if (($image > 0) && (
                $_FILES['F_imagen']['type'] == "image/jpg" ||
                $_FILES['F_imagen']['type'] == "image/jpeg" ||
                $_FILES['F_imagen']['type'] == "image/png" ||
                $_FILES['F_imagen']['type'] == "image/jpeg")){

                $this->model->add($proce, $ram, $placa, $disco, $marca, $_FILES['F_imagen']);
            } else {
                $this->model->add($proce, $ram, $placa, $disco, $marca);
            }
            header("Location: " . BASE_URL . 'notebooks');
        } else {
            header("Location: " . BASE_URL . 'formNotebook');
        }
    }
        
    public function modificarNotebook($id){
        if(AuthHelper::isAdmin()){        
            $proce= $_POST['F_procesador'];
            $ram= $_POST['F_ram'];
            $placa = $_POST['F_placa'];
            $disco = $_POST['F_disco'];
            $marca = $_POST['F_marca'];

            $this->model->modificarNotebook($proce, $ram, $placa, $disco, $marca, $id, $_FILES['F_imagen']['tmp_name']);
            header("Location: " . BASE_URL . 'notebooks');
        }
        else {
            header("Location: " . BASE_URL . 'notebooks');
        }
    }

  
}