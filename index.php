<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <form >
            <label>Full name:</label>
            <input type="text" id="full_name" name="full_name" placeholder="Jane Doe" required>

            <label>Email address:</label>
            <input type="email" id="email_addr" name="email_addr" required>

            <label>Repeat email address:</label>
            <input type="email" id="email_addr_repeat" name="email_addr_repeat" required 
                   oninput="check(this)">

           <!-- <label>Arrival date:</label>
            <input type="date" id="arrival_dt" name="arrival_dt" required>-->

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
        echo $aluno->toString();
        ?>



    </body>
</html>
