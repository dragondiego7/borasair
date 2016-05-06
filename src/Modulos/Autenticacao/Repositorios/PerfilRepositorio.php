<?php 
namespace EquipeBS\Modulos\Autenticacao\Repositorios;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use EquipeBS\Modulos\Autenticacao\Repositorios\PadraoRepositorio;
use EquipeBS\Modulos\Autenticacao\Modelos\Perfil;

class PerfilRepositorio extends PadraoRepositorio{

	// Construtor que carrega o construtor da classe superior e adiciona o caminho para a classe
	function __construct($gerenciadorEntidade) {
		parent::__construct("EquipeBS\Modulos\Autenticacao\Modelos\Perfil", $gerenciadorEntidade);
	}


}
?>