<?php 

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Carrega arquivo de configuração de bando de dados
require 'database.php';

$caminhoParaEntidades = array (
	"EquipeBS/Modulos/Autenticacao/Modelos"
);

$modoDev = true;

$configuracaoGerenciadoEntidade = Setup::createAnnotationMetadataConfiguration($caminhoParaEntidades, $modoDev);

// Retorna o gerenciado da entidade a parti do caminho informado e das fonfigurações
$gerenciadorEntidade = EntityManager::create($dbParametros, $configuracaoGerenciadoEntidade);
?>