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
        
    //retornando configuração para acessar banco
   static public function  abrirConexao()
    {
         mysql_select_db('aprendizado');
         mysql_connect('localhost', 'root', '');
         mysql_select_db("aprendizado");
    }
    
    //metodo para executando query que não retorna valor ou seja não é select
    static  public function  executaQury($query)
    {
        mysql_query($query);
        mysql_affected_rows();
       //fechando conexao
       mysql_close();
    }
}

?>
