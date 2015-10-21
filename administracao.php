<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include "conexao.php";
    include "verificarsessao.php";
    $sql = "Select * from funcionario";
    $res = mysqli_query($con, $sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            while ($row = mysqli_fetch_array($res)){
                echo $row["nome"]. " - <a href='formalterar.php?id=".$row["id_funcionario"]."'>Editar</a><br/>";
            }
        ?>
    </body>
</html>
