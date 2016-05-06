<?php 
namespace EquipeBS\Modulos\Autenticacao\Repositorios;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use EquipeBS\Modulos\Autenticacao\Repositorios\PadraoRepositorio;

class UsuarioRepositorio extends PadraoRepositorio {

	// Construtor que carrega o construtor da classe superior e adiciona o caminho para a classe
	function __construct($gerenciadorEntidade) {
		parent::__construct("EquipeBS\Modulos\Autenticacao\Modelos\Usuario", $gerenciadorEntidade);
	}

}

?>