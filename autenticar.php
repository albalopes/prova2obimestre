<?php

include "conexao.php";
session_start();

$matricula = $_POST["matricula"];
$senha = $_POST["senha"];

$admin = isset($_POST["admin"])?1:0;

$sql = "Select * from funcionario where matricula = $matricula and senha = '$senha'";
echo $sql;
$res = mysqli_query($con, $sql);


if($res){
    if (mysqli_num_rows($res)> 0){
        if ($admin == 1){
            while($row = mysqli_fetch_array($res)) {
               if ($row["administrador"]==1){
                   $_SESSION["adm"] = $row["id_funcionario"];
                   header("Location: administracao.php");
               }else{
                    header("Location: baterponto.php");
               }     
            }
        }else{
            header("Location: baterponto.php");
        }
    }else{
        header("Location: login.php");
    }
    
    
}