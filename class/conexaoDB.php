<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexaoDB
 *
 * @author Zyon
 */
class conexaoDB {    
    
    public function __construct() {
        mysql_select_db('aprendizado');
        //abrindo conexao
     //   $this->conexao = mysql_connect('localhost', 'root', '');
        //selecionado banco de dados que sera utilizado
        //mysql_select_db('aprendizado', $this->conexao);
    }
    
    //retornando configuração para acessar banco
    public function  abrirConexao()
    {
         mysql_connect('localhost', 'root', '');
         mysql_select_db("aprendizado");
    }
    
    //fechando conexao
    public function __destruct() {
        mysql_close();
    }
}

?>
