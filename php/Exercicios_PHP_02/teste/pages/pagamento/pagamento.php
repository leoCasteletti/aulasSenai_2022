<html>
<link rel="stylesheet" type="text/css" href="" media="screen">

<link rel="stylesheet" type="text/css" href="pagamento.css" media="screen">
<center>
<?php

$data = date("d/m/Y");

$forma_pagamento = $_POST['forma_pagamento'];
$valor = $_POST['valor'];
$n_documento = $_POST['n_documento'];
$assinatura = $_POST['assinatura'];

$dt_emissao = explode ("/", $data);
$dt_emissao = "$dt_emissao[2]-$$dt_emissao[1]-$dt_emissao[0]";
$dt_emissao = $_POST['dt_emissao'];

$dt_vencimento = explode ("/", $data);
$dt_vencimento = "$dt_vencimento[2]-$$dt_vencimento[1]-$dt_vencimento[0]";
$dt_vencimento = $_POST['dt_vencimento'];

$dt_pagamento = explode ("/", $data);
$dt_pagamento = "$dt_pagamento[2]-$$dt_pagamento[1]-$dt_pagamento[0]";
$dt_pagamento = $_POST['dt_pagamento'];

$servername = "localhost";
$databse = "projetogaia";
$username = "root";
$password = "";

//Create Connection 
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO pagamento (Pagamento_id,
                        Pagamento_formaPagamento, 
                        Pagamento_emissao,
                        Pagamento_vencimento,
                        Pagamento_valor,
                        Pagamento_numeroDoc,
                        Pagamento_dataP,
                        Pagamento_assinatura) VALUES
                        ('',
                        '$forma_pagamento',
                        '$dt_emissao',
                        '$dt_vencimento',
                        '$valor',
                        '$n_documento',
                        '$dt_pagamento',
                        '$assinatura')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1 style='text-align: center;'><b>Pagamento Cadastrado Com Sucesso!!!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<meta http-equiv="refresh" content="0; URL='pagamento.html'"/>
</center>
</html>
