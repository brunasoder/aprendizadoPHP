<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Fernando
 */
interface IContaBancaria {
    //put your code here
    
    function depositar($valor);
    function  sacar($valor);
    function mostraSaldo();
    
    
}

?>
