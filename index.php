<?php

require __DIR__.'/vendor/autoload.php';


use App\Entity\Usuario;
use App\Session\Login;

//obriga o usuário a estar logado
Login::requireLogout();

$alertaLogin = '';
$alertaCadastro = '';

if(isset($_POST['acao'])){
   
    switch($_POST['acao']){
        case 'logar':

            //busca o usuario pelo email
            $usuario = Usuario::getUsuarioPorEmail($_POST['email']);

            if(!$usuario instanceof Usuario || !password_verify($_POST['senha'], $usuario->senha)){
                $alertaLogin = 'E-mail ou senha não conferem!';
                break;
            }

            Login::login($usuario);
           
        case 'cadastrar':
            if(isset($_POST['nome'],$_POST['email'],$_POST['senha'])){
                
                $usuario = Usuario::getUsuarioPorEmail($_POST['email']);
                if($usuario instanceof Usuario){
                    $alertaCadastro = 'O email cadastrado já está em uso!';
                    break;
                }

                $usuario = new Usuario();
                $usuario->nome = $_POST['nome'];
                $usuario->email = $_POST['email'];
                $usuario->senha =  password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $usuario->cadastrar();

                Login::login($usuario); 

            }
        
        break;
    }
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_login.php';
include __DIR__.'/includes/footer.php';  