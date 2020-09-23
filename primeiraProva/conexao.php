<?php
    //contendo os metodos de conexão ao banco de dados
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "agencia";
    $connection = mysqli_connect($hostname,$user,$password,$database);
    
    if(!$connection){
        echo "<br><br>Connection fail!!!<br><br>";
    }
?>