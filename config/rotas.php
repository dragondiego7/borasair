<?php 

use Respect\Rest\Router;

$router = new Router();

$router->get("/login", "EquipeBS\Modulos\Autenticacao\Controladores\Autenticacao");
?>