<?php

define('APPLICATION_PATH', realpath(dirname(__FILE__)));

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Cache-Control, Pragma");
date_default_timezone_set('America/Sao_Paulo');

?>