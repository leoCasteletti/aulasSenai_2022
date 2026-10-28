<form method="post" action="servicos.html">

<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$Servicos_descricao = $_POST['Servicos_descricao'];
$Servicos_valor = $_POST['Servicos_valor'];
$Servicos_duracao = $_POST['Servicos_duracao'];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso";

    $sql =  "INSERT INTO servicos (Servicos_id, Servicos_descricao, Servicos_valor, Servicos_duracao)VALUES
                                 ('',
                                 '$Servicos_descricao',
                                 '$Servicos_valor',
                                 '$Servicos_duracao')";

if (mysqli_query($conn, $sql)){
    echo "<br>Registro Gravado Com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 

mysqli_close($conn);

?>
<br>
<br>
<input type="submit" name="dados" value="PROSSEGUIR"><br><br>
<li><a href="ServicosConsulta.php">Consulta</a></li>




