<?php 
// Carrega arquivo de configuração do cabeçalho das ações no servidor HHTP
require 'config/header.php';

// Carrega arquivo com as configurações de bug
require 'config/bug.php';

// Carrega arquivo de autoload do composer
require 'vendor/autoload.php';

// Carrega arquivo de rotas da aplicação
require 'config/rotas.php';

// Carrega arquivo de rotas da aplicação
require 'config/conexao_doctrine.php';

use EquipeBS\Modulos\Autenticacao\Modelos\Usuario;
use EquipeBS\Modulos\Autenticacao\Modelos\Perfil;

use EquipeBS\Modulos\Autenticacao\Repositorios\UsuarioRepositorio;
use EquipeBS\Modulos\Autenticacao\Repositorios\PerfilRepositorio;

$perfilRepositorio = new PerfilRepositorio($gerenciadorEntidade);

$perfil = $perfilRepositorio->encontrePorId(1);

$usuario = new Usuario();
$usuario->definePerfilUsuario($perfil);
$usuario->defineLoginUsuario("alisson@borasair.com.br");
$usuario->defineSenhaUsuario("1234");
$usuario->defineNomeUsuario("Alisson");
$usuario->defineFotoUsuario("http://www.premiumdxb.com/assets/img/avatar/default-avatar.jpg");
$usuario->defineDataNascimentoUsuario(new DateTime("now"));

$usuarioRepositorio = new UsuarioRepositorio($gerenciadorEntidade);
$usuarioRepositorio->inserir($usuario);

//$usuario = $usuarioRepositorio->encontrePorId(1);
?>