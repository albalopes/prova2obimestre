<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con){
    die("Erro: ".mysqli_error($con));
}

if (!mysqli_select_db($con, "pontoeletronico")){
     die("Erro: ".mysqli_error($con));
}
/*
$login = "maria";
$senha = "abc123";
$comando = "Insert into usuario (login, senha) values ('$login', '$senha')";

if (mysqli_query($con, $comando)){
    echo "Dados inseridos com sucesso!";
}else{
    die("Erro: ".mysqli_error($con));
}
*/

