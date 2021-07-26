<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar vaga');

use \App\Entity\Vaga;
use App\Session\Login;

//obriga o usuário a estar logado
Login::requireLogin();


//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$vaga = Vaga::getVaga($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$vaga instanceof Vaga){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $vaga->titulo    = $_POST['titulo'];
  $vaga->descricao = $_POST['descricao'];
  $vaga->salario   = $_POST['salario'];
  $vaga->ativo     = $_POST['ativo'];
  $vaga->atualizarVaga();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';