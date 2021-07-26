<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use App\Session\Login;


//obriga o usuário a estar logado
Login::requireLogin();


//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: vagas.php?status=error');
  exit;
}

//CONSULTA A VAGA
$vaga = Vaga::getVaga($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$vaga instanceof Vaga){
  header('location: vagas.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $vaga->excluirVaga();

  header('location: vagas.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';