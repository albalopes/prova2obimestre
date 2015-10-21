<?php
include "conexao.php";

$mat = $_GET["mat"];

$sql = "Select * from funcionario where matricula = $mat";

$res = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($res)){
    $id = $row["id_funcionario"];
    //echo $id;
    $tipo = $_COOKIE[$mat];
    //echo $tipo;
    $sql2 = "Insert into registro (id_funcionario, data, hora, tipo) values ($id, current_date(), current_time(), $tipo)";
    //echo $sql2;
    $res = mysqli_query($con, $sql2);
    
    echo "Prezado ".$row["nome"].", seu ponto foi registrado em ".date("d-m-y")." às ".date("h:m")." e você está ".($tipo==1?"entrando":"saindo");
    
    break;
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

