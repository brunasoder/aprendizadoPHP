<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'class/ContaCorrente.php';
        // put your code here
        $cc = new ContaCorrente(33);
        
        $cc->mostraSaldo();
        echo '<br />';
        $cc->sacar(10);
        $cc->mostraSaldo();
        echo '<br />';
        $cc->depositar(1000);
        $cc->mostraSaldo();
        
        ?>
    </body>
</html>
