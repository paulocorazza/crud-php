<?php

 use App\Session\Login;

 $usuarioLogado = Login::getUsuarioLogado();
 
 $usuario = $usuarioLogado ? $usuarioLogado['nome']:'Visitante <a href="login.php" class="text-light font-weight-bold ml-2>Entrar</a>';
 
 
?>

<!doctype html>
<html lang="pt-br">
  <head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?= $usuario ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="vagas.php">Vagas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
    <title>Crud PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light">
    <div class="container mt-4">
      <div class="jumbotron bg-primary">
          <h1 class="text-center">Sistema para cadastro de Vagas</h1>
          <p class="text-center">Exemplo de CRUD com PHP orientados a objetos</p>
      </div>
   
   
