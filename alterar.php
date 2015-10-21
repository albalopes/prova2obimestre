<?php
include "conexao.php";

$id = $_GET["id"];
$senhaantiga = $_POST["senhaantiga"];
$senhanova = $_POST["senhanova"];
$confirmarsenha = $_POST["confirmarsenha"];

if ($senhanova != $confirmarsenha){
    header("Location: formalterar.php?id=".$id);
}else{
    $sql = "Select * from funcionario where id_funcionario = $id and senha = '$senhaantiga'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0){
        $sql2 = "Update funcionario set senha = '$senhanova' where id_funcionario = $id";
        $res = mysqli_query($con, $sql2);
        if ($res){
          echo "Dados alterados com sucesso!";
        }
    }
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

