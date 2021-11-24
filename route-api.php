<?php
require_once 'libs/Router.php';
require_once 'api/APIController.php';


$router = new Router();

$router->addRoute('comments/:ID', 'GET', 'APIController', 'getComments');
$router->addRoute('comments', 'POST', 'APIController', 'newComment');
$router->addRoute('comments/:ID', 'DELETE', 'APIController', 'deleteComment');

$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);



