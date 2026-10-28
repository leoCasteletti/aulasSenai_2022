<html><head>
<title>Resultado da Exclusão</title>
<link rel="stylesheet" type="text/css" href="pagamento.css" media="screen">
</head> </body>
 
<body> 
<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";
$chave = $_POST["dado"];

$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}

if(isset($_POST["dado"]))
    {
$sql = "DELETE from pagamento WHERE Pagamento_id = '$chave'";   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pagamentoConsulta.php'"/>
</body>
</html>