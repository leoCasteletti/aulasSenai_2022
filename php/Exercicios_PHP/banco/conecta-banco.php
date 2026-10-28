<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";
// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "Conectado com sucesso";
 
$sql = "INSERT INTO cadastro (Cad_id, 
                              Cad_nome, Cad_endereco,
                              Cad_bairro, Cad_cidade, 
                              Cad_estado, 
                              Cad_cep) VALUES 
                              ('5', 
                               'raynner', 'Rua Mario Dutra', 
                               'Jardim Primavera', 'Votuporanga', 
                               'SP', '15500-175')";
if (mysqli_query($conn, $sql)) {
      echo "<br>Registro Gravado Com Sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>



