<?php 

namespace EquipeBS\Modulos\Autenticacao\Modelos;

class Usuario
{
	private idUsuario;
	private loginUsuario;
	private senhaUsuario;
	private nomeUsuario;
	private fotoUsuario;
	private dataNascimentoUsuario;

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
	

}
?>