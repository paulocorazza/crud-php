<?php

require __DIR__.'/vendor/autoload.php';

//chechando o que está vindo no post
//echo "<pre>"; print_r($_POST); echo "</pre"; exit;

//VALIDAÇÃO DO POST

use App\Entity\Vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $vaga = new Vaga();
    $vaga->titulo = $_POST['titulo'];
    $vaga->descricao = $_POST['descricao'];
    $vaga->ativo = $_POST['ativo'];
    $vaga->cadastrarVaga();

    header('location: index.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';