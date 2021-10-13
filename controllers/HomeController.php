<?php

include_once('views/HomeView.php');
require_once('controllers/MarcaController.php');




class HomeController {

    private $view;
    private $marca;

    public function __construct() {
      $this->marca= new MarcaController();
        
        $this->view = new HomeView();

    }

    function showHome() {
        
        $listaMarcas = $this->marca->getMarcas();;
        $this->view->showHome($listaMarcas);
    }  
  
}