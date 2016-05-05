<?php 
namespace EquipeBS\Modulos\Autenticacao\Repositorios;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use EquipeBS\Modulos\Autenticacao\Modelos\Usuario;
use EquipeBS\Modulos\Autenticacao\Repositorios\AbstractRepositorio;

class UsuarioRepositorio extends AbstractRepositorio {

	// Construtor que carrega o construtor da classe superior e adiciona o caminho para a classe
	function __construct() {
		parent::__construct("EquipeBS\Modulos\Autenticacao\Modelos\Usuario");
	}

	public function inserir($obj) {
		$perfilPersistido = $this->gerenciadorEntidade->find("EquipeBS\Modulos\Autenticacao\Modelos\Perfil", $obj->obterPerfilUsuario()->obterIdPerfil());
		$obj->definePerfilUsuario($perfilPersistido);
		parent::inserir($obj);
	}

}

?>