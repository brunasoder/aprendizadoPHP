<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaBancaria
 *
 * @author Fernando
 */
include_once 'interface/IContaBancaria.php';
abstract class ContaBancaria implements IContaBancaria {
    //put your code here
    private $Saldo;
    private $codConta;    
    
    public function __construct($codConta, $saldo=90) {
        $this->codConta = $codConta;
        $this->Saldo = $saldo;
    }
    
    public function depositar($valor) {
        $this->Saldo += $valor;
        
    }

    public function mostraSaldo() {
        echo "Seu saldo é: $this->Saldo";
    }

    public function sacar($valor) {
        $this->Saldo -= $valor;
    }

}

?>
