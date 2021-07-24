<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vaga
{
    /** identificador da vaga @var integer */
    public $id;
    
    /** titulo da vaga @var string */
    public $titulo;

    /**  descrição da vaga @var string */
    public $descricao;

    /** status da vaga @var string(s/n) */
    public $ativo;

    /** data de publicacao @var string*/
    public $data;


    /** método para cadastrar a vaga */
    public function cadastrarVaga()
    {
        $this->data = date('Y-M-d H:i:s');
        $banco = new Database('vagas');
        $this->id =  $banco->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
        ]);

       return true;

    }
    /** método para atualizar a vaga */
    public function atualizarVaga()
    {

    }
    /** método para excluir a vaga */
    public function excluirVaga()
    {
       
    }
    /** método que busca as vagas */
    public static  function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
    /** método que busca a vaga */
    public function getVaga()
    {

    }
}
