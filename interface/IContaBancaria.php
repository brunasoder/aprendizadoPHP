<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Zyon Dias
 */
interface IContaBancaria {
    //put your code here
    
    //metodos que deveram ser implementados 
    function depositar($valor);
    function  sacar($valor);
    function mostraSaldo();
    
    
}

?>
