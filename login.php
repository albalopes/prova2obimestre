<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="autenticar.php" method="post">
            Matrícula: <input type="text" name="matricula"/><br/>
            Senha: <input type="password" name="senha"/><br/>
            <input type="checkbox" name="admin"/>Acesso ao sistema administrativo<br/>
            <input type="submit" value="Acessar Sistema"/>
            
            
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
