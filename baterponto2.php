<?php

$matricula = $_POST["matricula"];

$tipo = 0;
if (!isset($_COOKIE[$matricula])){
    $tipo = 1;
}else{
    $tipo = ($_COOKIE[$matricula]==1)?2:1;
}

setcookie($matricula, $tipo);

echo $matricula. " ".($tipo==1?"entrando":"saindo");
header("Location: registrarponto.php?mat=".$matricula);

