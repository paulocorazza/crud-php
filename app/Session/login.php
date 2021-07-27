<?php

namespace App\Session;

class Login
{
    /** método responsável por iniciar a sessão */
    private static function init()
    {
        //verifica o status da sessão
        if(session_status() !== PHP_SESSION_ACTIVE){
            //inicia a sessão
            session_start();
        }
    }


    /** método para login */
    public static function login($usuario)
    {
        self::init();
        $_SESSION['usuario'] = [
            'id' => $usuario->id,
            'nome'=> $usuario->nome,
            'email' => $usuario->email
        ];
        header('location: vagas.php');
        exit;
    }


    /** método para matar a sessão */
    public static function logout()
    {
        self::init();
        unset($_SESSION['usuario']);
        header('location: index.php');
        exit;
    }



    /** método responsável por retornar o usuário logado */
    public static function getUsuarioLogado()
    {
        self::init();
        return self::isLogged() ? $_SESSION['usuario'] : null;
    }


    /** método responsável para verificar se o usuário está logado */
    public static function isLogged()
    {
       self::init();
       return isset($_SESSION['usuario']['id']);
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