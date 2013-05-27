<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Fernando
 */
abstract class Pessoa {
    //put your code here

    
    protected $idade;
    protected  $altura;
    
    function  aumetarIdade($quandidade){
        
        $this->idade += $quandidade;
    }
 
}

?>
