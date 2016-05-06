<?php 
namespace EquipeBS\Modulos\Autenticacao\Repositorios;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class PadraoRepositorio {
	// Variavel de gerenciamento das entidades
	public $gerenciadorEntidade;

	// Variavel com o caminho da classe modelo do objeto a ser utilizado
	public $caminhoEntidade;

	// Função com o construtor
	function __construct($caminhoEntidade, $gerenciadorEntidade) {
		$this->gerenciadorEntidade = $gerenciadorEntidade;
		$this->caminhoEntidade = $caminhoEntidade;
	}

	// ==================================+
	// DOCTRINE BUSCAR
	// ==================================+
	public function encontrePorId($id){
		$obj = $this->gerenciadorEntidade->find($this->caminhoEntidade, $id);
		return $obj;
	}
	
	// ==================================+
	// DOCTRINE BUSCAR TODOS
	// ==================================+
	public function encontreTodos(){
		$colecao = $this->gerenciadorEntidade->getRepository($this->caminhoEntidade)->findAll();
		
		$dados = array ();

		foreach($colecao as $obj){
			$dados[] = $obj;
		}
		
		return $dados;
	}

	// ==================================+
	// DOCTRINE CADASTRAR
	// ==================================+
	public function inserir($obj){
		$this->gerenciadorEntidade->persist($obj);
		$this->gerenciadorEntidade->flush();
	}

	// ==================================+
	// DOCTRINE UPDATE
	// ==================================+
	public function atualizar($obj){
		$this->gerenciadorEntidade->merge($obj);
		$this->gerenciadorEntidade->flush();
	}

	// ==================================+
	// DOCTRINE REMOVE
	// ==================================+
	public function deletar($obj){
		$this->gerenciadorEntidade->remove($obj);
		$this->gerenciadorEntidade->flush();
	}


}
?>