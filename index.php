<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //manipulando array
        $pessoa =  array(
                                            'Marina'=>  array('cabelo'=>'loiro', 'sexo'=>'Mulher', 'formacao'=>'superior'),
                                            'Danielle'=>array('cabelo'=>'Moreno','sexo'=>'Mulher'),
                                            'Fernando'=>array('cabelo'=>'Enrolado','sexo'=>'Homen')
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
        
        ?>
        
        
        
    </body>
</html>
