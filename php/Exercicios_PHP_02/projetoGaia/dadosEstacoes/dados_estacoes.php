<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>


<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$passoword = "";

// Create connection
$conn = mysqli_connect($servername,$username,$passoword,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['deletar-dado'])){

  $dados = $_POST['deletar-dado'];
        
  $sql = "DELETE FROM projetogaia.dadosestacao WHERE Dados_id = $dados";
  $resultado = mysqli_query($conn, $sql) or die ("Erro ao retornar");
}

if (isset($_POST['deletar-dado'])){
  $dados = $_POST['deletar-dado'];
        
  $sql = "DELETE FROM projetogaia.dadosestacao WHERE Dados_id = $dados";
  $resultado = mysqli_query($conn, $sql) or die ("Erro ao retornar");
}

$DadoSequenciais_id = date("Y-m-d H:i:s");  
//echo $DadoSequenciais_id;
$Dados_anenometro1 = (string)rand(1,10);
$Dados_anenometro2 = (string)rand(0,360);
$Dados_termometro = (string)rand(20,35);
$Dados_barometro = (string)rand(20,35);
$Dados_umidade = (string)rand(25,80);
$Dados_vibracao = (string)rand(1,9)/10;
$Dados_radiacao = (string)rand(24,28)/10;

$sql = "INSERT INTO projetogaia.dadosestacao (Dados_id, DadoSequenciais_id, Dados_anenometro1, Dados_anemometro2, Dados_termometro, Dados_barometro, Dados_umidade, Dados_vibracao, Dados_radiacao)
VALUES ('', '$DadoSequenciais_id', $Dados_anenometro1, $Dados_anenometro2, $Dados_termometro, $Dados_barometro, $Dados_umidade, $Dados_vibracao, $Dados_radiacao)";

$resultado = mysqli_query($conn, $sql) or die ("Erro ao retornar");

$sql = "SELECT * FROM projetogaia.dadosestacao ORDER BY Dados_id DESC ";
$resultado = mysqli_query($conn, $sql) or die ("Erro ao retornar");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Data</th>";
echo "<th>Velocidade do Vento</th>";
echo "<th>Direcao do Vento</th>";
echo "<th>Temperatura</th>";
echo "<th>Pressao atmosferica</th>";
echo "<th>Umidade</th>";
echo "<th>Vibracao</th>";
echo "<th>Radiacao Solar</th>";
echo "<th>Acoes</th>";
echo "</tr>";
while ($registro = mysqli_fetch_array($resultado)){

  $Dados_id = $registro['Dados_id'];
  $DadoSequenciais_id = $registro['DadoSequenciais_id'];
  $Dados_anenometro1 = $registro['Dados_anenometro1'];
  $Dados_anemometro2 = $registro['Dados_anemometro2'];
  $Dados_termometro = $registro['Dados_termometro'];
  $Dados_barometro = $registro['Dados_barometro'];
  $Dados_umidade = $registro['Dados_umidade'];
  $Dados_vibracao = $registro['Dados_vibracao'];
  $Dados_radiacao = $registro['Dados_radiacao'];


  echo "<tr>";
  echo "<td>".$Dados_id."</td>";
  echo "<td>".$DadoSequenciais_id."</td>";
  echo "<td>".$Dados_anenometro1."km</td>";
  echo "<td>".$Dados_anemometro2."&deg</td>";
  echo "<td>".$Dados_termometro."&degC</td>";
  echo "<td>".$Dados_barometro."atm</td>";
  echo "<td>".$Dados_umidade."%</td>";
  echo "<td>".$Dados_vibracao."ml</td>";
  echo "<td>".$Dados_radiacao."mSv</td>";
  echo "<td>
</form>
<form action='index.php' method='post'>
  <input type='hidden' name='deletar-dado' value='$Dados_id'>
  <input type='submit' value='Deletar'>
</form></td>";
  echo "</tr>";
}
echo "</table>";  




$conn->close();
?> 

<meta http-equiv="refresh" content="3">;