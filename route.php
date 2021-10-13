<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once('controllers/HomeController.php');
require_once('controllers/MarcaController.php');
require_once('controllers/NotebookController.php');
require_once('controllers/UserController.php');


if ($_GET['action'] == '')
	$_GET['action'] = 'home';

$urlParts = explode('/', $_GET['action']);

$marcaController = new MarcaController();
$homeController = new HomeController();
$notebookController = new NotebookController();
$userController = new UserController();



switch ($urlParts[0]) {
	case 'home':
		$homeController->showHome();
		break;
	case 'usuarios':
		$userController->showUsuarios();
		break;
	case 'notebooks':
		$notebookController->showNotebooks();
		break;
	case 'formNotebook':
		$notebookController->showFormNotebook();
		break;
	case 'addNotebook':
		$notebookController->addNotebook();
		break;
	case 'login':
		$userController->showLogin();
		break;
	case 'verify':
		$userController->verify();
		break;	
	case 'registro':
		$userController->showRegistro();
		break;
	case 'registrar':
		$userController->registrar();
		break;
	case "logout":
		$userController->logout();
		break;
	case "modificarMarca":
		$marcaController->modificarMarca($urlParts[1]);
		break;
	case "addMarca":
		$marcaController->addMarca();
		break;
	case "perfilUsuario":
		$userController->showPerfilUsuario();
		break;
	case "editMarca":
		$marcaController->showEditMarca($urlParts[1]);
		break;
	case "borrarMarca":
		$marcaController->deleteMarca($urlParts[1]);
		break;
	case "formMarca":
		$marcaController->showFormMarca();
		break;
	case "editNotebook":
		$notebookController->showEditNotebook($urlParts[1]);
		break;
	case "modificarNotebook":
		$notebookController->modificarNotebook($urlParts[1]);
		break;
	case "notebook":
		$notebookController->showNotebook($urlParts[1]);
		break;
	case 'verMarca':
		$notebookController->showNotebooksByMarca($urlParts[1]);
		break;
	case "borrarNotebook":
		$notebookController->deleteNotebook($urlParts[1]);
		break;
	case "bajaAdmin":
		$userController->bajaAdmin($urlParts[1]);
		break;
	case "altaAdmin":
		$userController->altaAdmin($urlParts[1]);
		break;
	case "eliminarUser":
		$userController->deleteUser($urlParts[1]);
		break;


	default:
		echo '<h1>Error 404 - Page not found </h1>';
		break;
}