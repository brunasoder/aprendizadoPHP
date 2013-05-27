<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classAluno
 *
 * @author Zyon
 */
class Aluno {
    
    //atributos
    private $Escola;
    private $NomeAluno;
    
    public function __construct($escola) {
        $this->Escola = new Escola();
        $this->Escola = $escola;
        $this->NomeAluno="aaaaaaaaaaaaa";
    }
    function setNome($nome)
    {
        $this->NomeAluno = $nome;
    }
    
    function toString()
    {
       
        return $this->NomeAluno . $this->Escola->nomeEscola;
    }


    //put your code here
}

?>
