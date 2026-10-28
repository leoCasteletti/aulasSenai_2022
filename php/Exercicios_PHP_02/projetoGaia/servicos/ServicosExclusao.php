<body> <html> <head>
 <title>Resultado da exclusao</title>
 </head> </body>
 
 
<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";
$chave = $_POST["dados"];
echo $chave;

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
echo "<br>Conectado com sucesso<br>";
// Verifica escolha de campos
if(isset($_POST["dados"]))
    {
$sql = "DELETE from servicos WHERE Servicos_id = $chave";   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    }
 mysqli_close($conn);






 ?>

<meta http-equiv="refresh" content="0; URL='ServicosConsulta.php'"/>
</body>
</html>