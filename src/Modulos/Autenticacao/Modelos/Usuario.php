<?php 

namespace EquipeBS\Modulos\Autenticacao\Modelos;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario
{

	/**
	* @Id
	* @Column(type="integer")
	* @GeneratedValue(strategy="AUTO")
	*/
	private $idUsuario;

	/**
	*
	* @Column(type="string")
	*/
	private $loginUsuario;

	/**
	*
	* @Column(type="string")
	*/
	private $senhaUsuario;

	/**
	*
	* @Column(type="string")
	*/
	private $nomeUsuario;

	/**
	*
	* @Column(type="string")
	*/
	private $fotoUsuario;

	/**
	*
	* @Column(type="datetime")
	*/
	private $dataNascimentoUsuario;

	/**
	*
	* @Column(type="datetime")
	*/
	private $dataCadastroUsuario;

	/**
	*
	* @Column(type="datetime")
	*/
	private $dataAlteracaoUsuario;

	/**
	*
	* @Column(type="integer")
	*/
	private $ativoUsuario = 1;

	public function obterIdUsuario(){
		return $this->idUsuario;
	}

	public function defineIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function obterLoginUsuario(){
		return $this->loginUsuario;
	}

	public function defineLoginUsuario($loginUsuario){
		$this->loginUsuario = $loginUsuario;
	}
	
	public function obterSenhaUsuario(){
		return $this->senhaUsuario;
	}

	public function defineSenhaUsuario($senhaUsuario){
		$this->senhaUsuario = $senhaUsuario;
	}

	public function obterNomeUsuario(){
		return $this->momeUsuario;
	}

	public function defineNomeUsuario($nomeUsuario){
		$this->nomeUsuario = $nomeUsuario;
	}

	public function obterFotoUsuario(){
		return $this->fotoUsuario;
	}

	public function defineFotoUsuario($fotoUsuario){
		$this->fotoUsuario = $fotoUsuario;
	}

	public function obterDataNascimentoUsuario(){
		return $this->dataNascimentoUsuario;
	}

	public function defineDataNascimentoUsuario($dataNascimentoUsuario){
		$this->dataNascimentoUsuario = $dataNascimentoUsuario;
	}

	public function obterDataCadastroUsuario(){
		return $this->dataCadastroUsuario;
	}

	public function defineDataCadastroUsuario($dataCadastroUsuario){
		$this->dataCadastroUsuario = $dataCadastroUsuario;
	}

	public function obterDataAlteracaoUsuario(){
		return $this->dataAlteracaoUsuario;
	}

	public function defineDataAlteracaoUsuario($dataAlteracaoUsuario){
		$this->dataAlteracaoUsuario = $dataAlteracaoUsuario;
	}

	public function obterAtivoUsuario(){
		return $this->ativoUsuario;
	}

	public function defineAtivoUsuario($ativoUsuario){
		$this->ativoUsuario = $ativoUsuario;
	}


}
?>