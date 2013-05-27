<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classEscola
 *
 * @author Zyon
 */
class Escola {
    
    public $nomeEscola;
    public $inep;
    public function __construct() {
        
    }
    
    //metodo para receber o nome da escola
    function setNomeEscola($nome)
    {
        $this->nomeEscola = $nome;
    }
    
    //metodo para receber inepe da escola
    function setInep($inep)
    {
        $this->inep = $inep;
    }
    
    //grava na base de dados
    function  cadastraEscola()
    {
        //incluindo class de conexao
       include_once 'class/conexaoDB.php';        
        //$query = "INSERT INTO escola values (".$this->inep . ",'". $this->nomeEscola."')";
       
       //usando metodo estatico para que não tenha necessidade de instanciar a class
       
            //setando a query
             conexaoDB::$query = "INSERT INTO escola values (".$this->inep . ",'". $this->nomeEscola."')";
             //abrindo conexao
             conexaoDB::abrirConexao();
             //executando query no banco como não é select não retorna nenhum valor
             conexaoDB::executaQuery();
    }
    
    
    
}

?>
