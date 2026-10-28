<form method="post" action="tabela_assinaturas.php">

<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$chave1 = $_POST["Regiao_id"];
$chave2 = $_POST["Pagamento_id"];
$chave3 = $_POST["Servicos_id"];
$chave4 = $_POST["Usuarios_id"];

echo "$chave1";
echo "$chave2";
echo "$chave3";
echo "$chave4";

$Pagamento_valor = $_POST["Servicos_valor"];

$Pagamento_dataP = $_POST['data_assinatura'];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso";

    $sql =  "INSERT INTO Assinatura (assinatura_id, Assinatura_tipoPagamento, Assinatura_servico, Assinatura_usuarios, Assinatura_regiao, Assinatura_valor, Assinatura_dataInicial) VALUES
                                 ('',
                                 '$chave2',
                                 '$chave3',
                                 '$chave4',
                                 '$chave1',
                                 '$Pagamento_valor',
                                 '$Pagamento_dataP')";

if (mysqli_query($conn, $sql)){
    echo "<br>Registro Gravado Com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 

mysqli_close($conn);

?>
<br>
<br>
<input type="submit" name="dados" value="PROSSEGUIR" class="botao">