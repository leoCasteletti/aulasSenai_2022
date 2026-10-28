<html>
<head>
<title>Resultado da Alteração</title>
<link rel="stylesheet" type="text/css" href="pagamento.css" media="screen">
</head>

<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$dados = "";
$dados = $_POST["dados"];
$Pagamento_id = $dados[0];
$Pagamento_formaPagamento = $dados[1];
$Pagamento_emissao = $dados[2];
$Pagamento_vencimento = $dados[3];
$Pagamento_valor = $dados[4];
$Pagamento_numeroDoc = $dados[5];
$Pagamento_dataP = $dados[6];
$Pagamento_assinatura = $dados[7];


// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}

if(isset($_POST["dados"]))
    {
        $sql = 
        "UPDATE pagamento 
        SET 
        Pagamento_formaPagamento = '$Pagamento_formaPagamento',
        Pagamento_emissao = '$Pagamento_emissao',
        Pagamento_vencimento = '$Pagamento_vencimento',
        Pagamento_valor = '$Pagamento_valor',
        Pagamento_numeroDoc = '$Pagamento_numeroDoc',
        Pagamento_dataP = '$Pagamento_dataP'
        WHERE Pagamento_id = $Pagamento_id";

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pagamentoConsulta.html'"/>
</body>
</html>