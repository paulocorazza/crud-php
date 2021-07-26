<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Session\Login;

$vagas = Vaga::getVagas();

//obriga o usuário a estar logado
Login::requireLogin();



//echo "<pre>"; print_r($vagas); echo "</pre>"; exit;


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';