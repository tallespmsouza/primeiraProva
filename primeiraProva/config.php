<?php
    //contendo os dados de acesso ao banco de dados
    require "conexao.php";

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $atividade = $_POST['atividade'];
    $status = "espera";

    $sql = "insert into atendimentos (nome,telefone,atividade,status) values ('$nome','$telefone','$atividade', '$status')";

    mysqli_query($connection,$sql);

    echo "<script>location.href='atendimento.php'</script>";

?>