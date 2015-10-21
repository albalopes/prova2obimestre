<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include "conexao.php";
    $id = $_GET["id"];
    $sql = "Select * from funcionario where id_funcionario = $id";
    echo $sql;
    $res = mysqli_query($con, $sql);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="alterar.php?id=<?php echo $id;?>" method="post">
        <?php
            while ($row = mysqli_fetch_array($res)){
                echo $row["nome"]."<br/>";
                ?>
            
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    Senha antiga: <input type="text" name="senhaantiga"/><br/>
                    Senha nova: <input type="text" name="senhanova"/><br/>
                    Confirmar senha: <input type="text" name="confirmarsenha"/><br/>
                <?php
            }
// put your code here
        ?>
            <input type="submit" value="Alterar"/>
        </form>
    </body>
</html>
