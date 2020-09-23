  
<?php

    require "conexao.php";
    require "consulta.php";
    $id = $dados[6];
    $btn = $_POST["botao"];

    if ($btn == "atender") {
        $sql = "update atendimentos set status='atendido' where id = '$id'";
        $query = mysqli_query($connection, $sql);
    } else if ($btn == "cancelar") {
        $sql = "update atendimentos set status='cancelado' where id = '$id'";
        $query = mysqli_query($connection, $sql);
    }

?>