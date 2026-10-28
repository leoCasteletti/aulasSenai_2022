<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar</title>
</head>
<body>
    
</body>
</html>
<?php


$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";
$chave = $_POST["dados"];
echo $chave;

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso";

}

$sql = "SELECT *FROM assinatura WHERE Assinatura_id = $chave";

$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");
 
 $registro = mysqli_fetch_array($resultado);

echo "<tr>";
echo "<form action= 'editar2.php' method='post'>";
echo "<td><input type='hidden' name= 'dados[]' value=".$registro['Assinatura_id']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_tipoPagamento']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_servico']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_usuarios']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_regiao']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_valor']."></td>";
echo "<td><input type='text' name= 'dados[]' value=".$registro['Assinatura_dataInicial']."></td>";
echo "<td></tr><tr></table>;

        <center> 
         <input type=submit value='Alterar' ></form>";


mysqli_close($conn);

?>
