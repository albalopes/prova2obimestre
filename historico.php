<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include "conexao.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_POST["matricula"]) && isset($_POST["datainicio"]) && isset($_POST["datafim"])){
                $matricula = $_POST["matricula"];
                $datainicio = $_POST["datainicio"];
                $datafim= $_POST["datafim"];
                $sql = "Select * from funcionario inner join registro on funcionario.id_funcionario = registro.id_funcionario where funcionario.matricula = $matricula and data BETWEEN '$datainicio' and '$datafim'";
                //echo $sql;
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($res)){
                    echo $row["id_funcionario"]." - ". $row["data"]." - ".$row["hora"]."<br/>";
                }
                
            }else{
        ?>
        <form action="historico.php" method="post">
              Matrícula: <input type="text" name="matricula"/><br/>
              Início: <input type="date" name="datainicio"/><br/>
              Fim: <input type="date" name="datafim"/><br/>
              <input type="submit" value="Consultar"/>
        </form>
        
        <?php
            }
        ?>
    </body>
</html>
