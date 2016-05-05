<?php 
namespace EquipeBS\Modulos\Autenticacao\Repositorios;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use EquipeBS\Modulos\Autenticacao\Modelos\Usuario;

class UsuarioRepositorio {
	// Variavel de gerenciamento das entidades
	public $gerenciadorEntidade;

	// Caminho para o pacote com as entidades
	private $caminhoEntidade;

	// Função com o construtor
	function __construct() {
		$this->caminhoEntidade = "EquipeBS\Modulos\Autenticacao\Modelos\Usuario";
		$this->gerenciadorEntidade = $this->criarGerenciadorEntidade();
	}

	public function criarGerenciadorEntidade() {
		$caminhoParaEntidades = array (
			"EquipeBS/Modulos/Autenticacao/Modelos"
		);

		$modoDev = true;
		
		$configuracaoGerenciadoEntidade = Setup::createAnnotationMetadataConfiguration($caminhoParaEntidades, $modoDev);

		// Configurações de conexão de banco de dados para o doctrine
		$dbParametros = array(
		    'driver'   => 'pdo_mysql',
		    'user'     => 'root',
		    'password' => '123456',
		    'dbname'   => 'borasair_teste',
		);

		// Retorna o gerenciado da entidade a parti do caminho informado e das fonfigurações
		return EntityManager::create($dbParametros, $configuracaoGerenciadoEntidade);
	}

	// ==================================+
	// DOCTRINE BUSCAR
	// ==================================+
	public function encontrePorId($id){
		$Usuario = $this->gerenciadorEntidade ->find($this->caminhoEntidade, $id);
		return $Usuario;
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