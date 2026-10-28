<?php 

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";
$deletar = $_POST["dados"];
echo $deletar;

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso";

}

$sql = "DELETE FROM Assinatura where Assinatura_id = $deletar";

if(mysqli_query($conn, $sql)){
    echo "<br><h1>DELETADO COM SUCESSO!!</h1>";
}
?>