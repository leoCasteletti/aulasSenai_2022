<?php
    // Credenciais para conectar com o Banco de Dados.
    $servername = "localhost";
    $database = "projetogaia";
    $username = "root";
    $password = "";

    // Abrindo o Banco.
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Comando SQL a ser Executado.
    $sql = "SELECT * FROM usuarios";

    // Executa o Comando SQL.
    $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
?>