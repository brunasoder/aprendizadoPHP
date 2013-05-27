<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
              /* class Pessoa
                {
                    public $nome;
                    
                    function falar()
                    {
                        echo "Falva seu ". $this->nome;
                    }
                    
                    function  setNome($novoNome)
                    {
                        $this->nome = $novoNome;
                    }
                }
                
                $obj = new Pessoa();
                
                $obj->setNome("haaaaaaaaaaaaaaaaa");
                $obj->falar();*/
        //manipulando array
        $pessoa =  array(
                                            'Marina'=>  array('cabelo'=>'loiro', 'sexo'=>'MUE', 'formacao'=>'superior'),
                                            'Danielle'=>array('cabelo'=>'Moreno','sexo'=>'mue'),
                                            'Fernando'=>array('cabelo'=>'Enrolado','sexo'=>'so deus sabe')
                                    );
        //imprimi a estrutura do array
        var_dump($pessoa);
        
                    foreach($pessoa as $nomes =>$caracteristicas)
                    {
                        echo "Quemm:  $nomes <br>\n";
                        foreach($caracteristicas as $caracteristicas => $valor)
                        {
                            echo "$caracteristicas -> $valor <br>";
                        }
                        echo "<br><br>";
                    }
        
        //momento idiota pra descontrair repetindo maozinha levantanda
        $mao = '-o-  \o-  \o/  -o/  -o-  ';
        //print str_repeat($mao, 50);
        
        
        
        //includndo a class
        include_once 'class/Escola.php';
        include_once 'class/Aluno.php';
        //criando objetodas classes
        $Educacao = new Escola();
        $Educacao->setNomeEscola("E.E MARIA CLARA DE OLIVEIRA");
        $Educacao->setInep(8920);
        
        echo $Educacao->inep;
        echo $Educacao->nomeEscola;
        
        $Educacao->cadastraEscola();
        
        $aluno = new Aluno($Educacao);
        $aluno->setNome("   Fernandodinhooo   -   ");
        echo  $aluno->toString();
        
        
          //variavel que não pode ter valor alterado na execução do codigo
        define("MAXIMO_CLIENTE", 100);
        //echo MAXIMO_CLIENTE;
        
        //exemplo de função
        function soma($valor1, $valor2)
        {
            $total =  $valor1 + $valor2;
            return $total;
        }
        
       // echo soma(20, 30);
       
        //valores globa
       // $totalDeInstrucao =2;
        
        
       function contador()
       {
           static $valor;
           $valor += 1;
         //  echo $valor; 
       }


       for($i =0; $i < 7; $i++)
        {
           contador();
            
        }
    //    echo $totalDeInstrucao;
        
        //foreach
       // $listaNome = array('Zyaonnnn', 'Nanda', 'Fefito', 'Jechhh');
        
        /*foreach ($listaNome as $item)
        {
            //print "- $item";
        }*/
        
        
        ?>
        
        
        
    </body>
</html>
