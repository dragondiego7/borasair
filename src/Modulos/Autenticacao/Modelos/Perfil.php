<?php 

namespace EquipeBS\Modulos\Autenticacao\Modelos;

use Datetime;

/**
 * @Entity
 * @Table(name="perfil")
 */
class Perfil
{
	
	/**
	* @Id
	* @Column(type="integer")
	* @GeneratedValue(strategy="AUTO")
	*/
	private $idPerfil;
	
	/**
	*
	* @Column(type="string")
	*/
	private $tituloPerfil;

	/**
	*
	* @Column(type="string")
	*/
	private $descricaoPerfil;
	
	/**
	*
	* @Column(type="datetime")
	*/
	private $dataCadastroPerfil;
	
	/**
	*
	* @Column(type="datetime")
	*/
	private $dataAlteracaoPerfil;
	
	/**
	*
	* @Column(type="integer")
	*/
	private $ativoPerfil = 1;
	
	public function __construct(){
		$data = new DateTime("now");
		
		$this->dataCadastroPerfil = $data;
		$this->dataAlteracaoPerfil = $data;
	}
	
	public function obterIdPerfil(){
		return $this->idPerfil;
	}
	
	public function defineIdPerfil($idPerfil){
		$this->idPerfil = $idPerfil;
	}
	
	public function obterTituloPerfil(){
		return $this->tituloPerfil;
	}
	
	public function defineTituloPerfil($tituloPerfil){
		$this->tituloPerfil = utf8_decode($tituloPerfil);
	}
	
	public function obterDescricaoPerfil(){
		return $this->descricaoPerfil;
	}
	
	public function defineDescricaoPerfil($descricaoPerfil){
		$this->descricaoPerfil = utf8_decode($descricaoPerfil);
	}

	public function obterDataCadastroPerfil(){
		return $this->dataCadastroPerfil;
	}

	public function defineDataCadastroPerfil($dataCadastroPerfil){
		$this->dataCadastroPerfil = $dataCadastroPerfil;
	}

	public function obterDataAlteracaoPerfil(){
		return $this->dataAlteracaoPerfil;
	}

	public function defineDataAlteracaoPerfil($dataAlteracaoPerfil){
		$this->dataAlteracaoPerfil = $dataAlteracaoPerfil;
	}

	public function obterAtivoPerfil(){
		return $this->ativoPerfil;
	}

	public function defineAtivoPerfil($ativoPerfil){
		$this->ativoPerfil = $ativoPerfil;
	}
	
	
}
?>