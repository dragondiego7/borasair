<?php 
use Respect\Rest\Router;

$router = new Router();

$router->get("/", function(){
	echo " API - Bora Sair v.0.1.0";
});

$router->get("/login", "EquipeBS\Modulos\Autenticacao\Controladores\Autenticacao");
?>