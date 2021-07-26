<?php

require __DIR__.'/vendor/autoload.php';


use App\Entity\Usuario;
use App\Session\Login;

//obriga o usuário a estar logado
Login::requireLogout();

if(isset($_POST['acao'])){
   
    switch($_POST['acao']){
        case 'logar':

            $usuario = Usuario::getUsuarioPorEmail($_POST['email']);

            if(!$usuario instanceof Usuario){
                break;
            }

            echo '<pre>'; 
            print_r($usuario); 
            echo '</pre>'; exit;
           
        case 'cadastrar':
            if(isset($_POST['nome'],$_POST['email'],$_POST['senha'])){
                
                $usuario = new Usuario();
                $usuario->nome = $_POST['nome'];
                $usuario->email = $_POST['email'];
                $usuario->senha =  password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $usuario->cadastrar();

                echo '<pre>'; 
                print_r($usuario); 
                echo '</pre>'; exit;

            }
        
        break;
    }
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_login.php';
include __DIR__.'/includes/footer.php';  