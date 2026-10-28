<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";
$dados = $_POST["dados"];

$Assinatura_id = $dados[0];
$Assinatura_tipoPagamento = $dados[1];
$Assinatura_servico = $dados[2];
$Assinatura_usuarios = $dados[3];
$Assinatura_regiao = $dados[4];
$Assinatura_valor = $dados[5];
$Assinatura_dataInicial = $dados[6];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso";

}

if(isset($_POST["dados"])){
$sql = "UPDATE Assinatura set Assinatura_tipoPagamento = '$Assinatura_tipoPagamento' ,
                              Assinatura_servico = '$Assinatura_servico' ,     
                              Assinatura_usuarios = '$Assinatura_usuarios' , 
                              Assinatura_regiao = '$Assinatura_regiao' , 
                              Assinatura_valor = '$Assinatura_valor' , 
                              Assinatura_dataInicial = '$Assinatura_dataInicial'
                              WHERE Assinatura_id = '$Assinatura_id'";

echo "estou aqui ".$Assinatura_id;
}
                                    
if(mysqli_query($conn, $sql)){
    echo "<br><h1>ALTERADO COM SUCESSO!!</h1>";
}

mysqli_close($conn);

?>