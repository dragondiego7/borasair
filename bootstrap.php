<?php 
// Carrega arquivo de configuração do cabeçalho das ações no servidor HHTP
require 'config/header.php';

// Carrega arquivo com as configurações de bug
require 'config/bug.php';

// Carrega arquivo de autoload do composer
require 'vendor/autoload.php';

// Carrega arquivo de configuração de bando de dados
require 'config/database.php';

// Carrega arquivo de rotas da aplicação
require 'config/rotas.php';


use EquipeBS\Modulos\Autenticacao\Modelos\Perfil;
use EquipeBS\Modulos\Autenticacao\Repositorios\PerfilRepositorio;

$perfil = new Perfil();
$perfilRepositorio = new PerfilRepositorio();
$perfil = $perfilRepositorio->encontrePorId(1);


/*
$perfil = new Perfil();
//$perfil = $perfilRepositorio->encontrePorId(1);

$perfil->defineIdPerfil(1);
$perfil->defineTituloPerfil("Administrador");
$perfil->defineDescricaoPerfil("Perfil do administrador do sistema sem restrição no acesso.");

$perfilRepositorio = new PerfilRepositorio();

//$perfilRepositorio->inserir($perfil);
//$perfilRepositorio->atualizar($perfil);

$perfil = $perfilRepositorio->encontrePorId(1);

echo "<pre>";
var_dump($perfil->obterIdPerfil());
echo "<br /><br />";
var_dump($perfil->obterTituloPerfil());
echo "<br /><br />";
var_dump($perfil->obterDescricaoPerfil());
echo "<br /><br />";
*/

echo "<pre>";
echo $perfil->obterIdPerfil();
echo "<br />";

use EquipeBS\Modulos\Autenticacao\Modelos\Usuario;
use EquipeBS\Modulos\Autenticacao\Repositorios\UsuarioRepositorio;

$usuario = new Usuario();
$usuario->definePerfilUsuario($perfil);
$usuario->defineLoginUsuario("alisson@borasair.com.br");
$usuario->defineSenhaUsuario("1234");
$usuario->defineNomeUsuario("Alisson");
$usuario->defineFotoUsuario("http://www.premiumdxb.com/assets/img/avatar/default-avatar.jpg");
$usuario->defineDataNascimentoUsuario(new DateTime("now"));

$usuarioRepositorio = new UsuarioRepositorio();

$usuarioRepositorio->inserir($usuario);
//$usuarioRepositorio->atualizar($usuario);

$usuario = $usuarioRepositorio->encontrePorId(13);

?>