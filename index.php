<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <form id="formEscola" name="formEscola" method="post" action="" >
            <label>Nome da Escola:</label>
            <input type="text" id="nomEscola" name="nomEscola" placeholder="E.E Sebastião Morais Cardoso" required>

            <label>Numero do INEP:</label>
            <input type="number" id="inepe" name="inepe" required>

            <input type="submit" value="Gravar" /> 
        </form>

        <script>
            function check(input) {
                if (input.value != document.getElementById('email_addr').value) {
                    input.setCustomValidity('The two email addresses must match.');
                } else {
                    // input is valid -- reset the error message
                    input.setCustomValidity('');
                }
            }
        </script>
        

        <?php
        //verificando quendo tiver um post na pagina
        if(isset($_SERVER['REQUEST_METHOD']) and ($_SERVER['REQUEST_METHOD'] == 'POST'))
        {
            //estraindo itens enviado do formulario
            extract($_POST);                        
        //includndo a class
        include_once 'class/Escola.php';
        include_once 'class/Aluno.php';
        //criando objetod aparti do formualrio
        $Educacao = new Escola();
        $Educacao->setNomeEscola($nomEscola);
        $Educacao->setInep($inepe);
          //persistindo no banco de dados
        $Educacao->cadastraEscola();

     
        }
         //$aluno = new Aluno($Educacao);
        //$aluno->setNome("   Fernandodinhooo   -   ");
        //echo $aluno->toString();
        ?>



    </body>
</html>
