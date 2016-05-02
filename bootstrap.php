<?php 
// Carrega arquivo de configuração do cabeçalho das ações no servidor HHTP
require 'config/header.php';

// Carrega arquivo com as configurações de bug
require 'config/bug.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Carrega arquivo de autoload do composer
require 'vendor/autoload.php';

// Carrega arquivo de rotas da aplicação
require 'config/rotas.php';


$isDevMode = true;

// Configurações de conexão de arquivo
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '123456',
    'dbname'   => 'borasair_teste',
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Modulos/Autenticacao/Modelos"), $isDevMode);

$entityManager = EntityManager::create($dbParams, $config);
?>