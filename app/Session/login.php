<?php

namespace App\Session;

class Login
{
    /** método responsável para verificar se o usuário está logado */
    public static function isLogged()
    {
       return false; 
    }

    /** método responsável por obrigar o usuário a estar logado para acessar */
    public static function requireLogin( )
    {
        if(!self::isLogged()){
            header('location: index.php');
            exit;
        }
    }
    /** método responsável por redirecionar o usuário para o index se tiver logado */
    public static function requireLogout( )
    {
        if(self::isLogged()){
            header('location: vagas.php');
            exit;
        }
    }
}