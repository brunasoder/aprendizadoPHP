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
        include_once 'class/conexaoDB.php';
        $con = new conexaoDB;
        $con->abrirConexao();
        $query = "INSERT INTO escola values (".$this->inep . ",'". $this->nomeEscola."')";
        echo $query;
        mysql_query($query);
        mysql_affected_rows();
        
    }
    
    
    
}

?>
