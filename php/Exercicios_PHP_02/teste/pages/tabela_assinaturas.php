
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Consulta Banco</title>
        <link rel="stylesheet" href="style.css">
    </head>
<center>
<table border="2">
    <tr> <th>ID</th> <th>Serviço</th>
        <th>Usuarios</th> <th>E-mail</th> 
        <th>CEP</th> <th>Regiao</th> 
        <th>Valor</th> <th>Data de início</th>
        <th>Alterar</th> <th>Remover</th> </tr>
<body class="naruto">

<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";


$data = date("d/m/Y");
$Pagamento_dataP = explode ("/", $data);
$Pagamento_dataP = "$Pagamento_dataP[2]-$Pagamento_dataP[1]-$Pagamento_dataP[0]";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Conectado com sucesso";

$sql =  "SELECT  Assinatura.Assinatura_id, Assinatura.Assinatura_tipoPagamento, Assinatura.Assinatura_servico, Assinatura.Assinatura_usuarios, Assinatura.Assinatura_regiao, Assinatura.Assinatura_valor, Assinatura.Assinatura_dataInicial,
Servicos.Servicos_id, Servicos.Servicos_descricao, Servicos.Servicos_valor, Servicos_duracao,
Usuarios.Usuarios_id, Usuarios.Usuarios_nome, Usuarios.Usuarios_email, Usuarios.Usuarios_senha, Usuarios.Usuarios_celular, Usuarios.Usuarios_administrador, 'Usuarios.usuarios_cpf-cnpj', Usuarios.Usuarios_Endereco, Usuarios.Usuarios_Cidade, Usuarios.Usuarios_ES, Usuarios.Usuarios_bairro, Usuarios.Usuarios_cep,
Regiao.Regiao_id, Regiao.Regiao_descricao, Regiao.Regiao_nome,
Pagamento.Pagamento_id, Pagamento.Pagamento_formaPagamento, Pagamento.Pagamento_emissao, Pagamento.Pagamento_vencimento, Pagamento.Pagamento_valor, Pagamento.Pagamento_numeroDoc, Pagamento.Pagamento_dataP, Pagamento.Pagamento_assinatura
FROM Assinatura, Servicos, Usuarios, Regiao, Pagamento 
WHERE Assinatura.Assinatura_tipoPagamento = Pagamento.Pagamento_id 
and Assinatura.Assinatura_servico = Servicos.Servicos_id
and Assinatura.Assinatura_usuarios = Usuarios.Usuarios_id
and Assinatura.Assinatura_regiao = Regiao.Regiao_id";

$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");

while($registro = mysqli_fetch_array($resultado)){
    $Assinatura_id = $registro['Assinatura_id'];
    $Assinatura_tipoPagamento = $registro['Assinatura_tipoPagamento'];
    $Assinatura_servico = $registro['Assinatura_servico'];
    $Assinatura_usuarios = $registro['Assinatura_usuarios'];
    $Assinatura_regiao = $registro['Assinatura_regiao'];
    $Assinatura_valor = $registro['Assinatura_valor'];
    $Servicos_descricao = $registro['Servicos_descricao'];
    $Usuarios_nome = $registro['Usuarios_nome'];
    $Usuarios_email = $registro['Usuarios_email'];
    $Usuarios_cep = $registro['Usuarios_cep'];
    $Regiao_descricao = $registro['Regiao_descricao'];
    $Regiao_nome = $registro['Regiao_nome'];
    $Assinatura_dataInicial = $registro['Assinatura_dataInicial'];
    $Servicos_valor = $registro['Servicos_valor'];
    $Pagamento_formaPagamento = $registro['Pagamento_formaPagamento'];
    $Servicos_descricao = $registro['Servicos_descricao'];

    echo "<tr>";
    echo "<td>".$Assinatura_id."</td>";
    echo "<td>".$Servicos_descricao."</td>";
    echo "<td>".$Usuarios_nome."</td>";
    echo "<td>".$Usuarios_email."</td>";
    echo "<td>".$Usuarios_cep."</td>";
    echo "<td>".$Regiao_descricao. '-' .$Regiao_nome."</td>";
    echo "<td>  R$ ".$Servicos_valor."</td>";
    echo "<td>".$Assinatura_dataInicial."</td>";
    echo "<td>
          <form action='editar1.php' method='post'>
          <center>
          <input type='hidden' name='dados' value=".$Assinatura_id.">
          <input type=submit value='Alterar'></form>";

    echo "<td>
          <form action='removerdados.php' method='post'>
          <center>
          <input type='hidden' name='dados' value=".$Assinatura_id.">
          <input type=submit value='Remover'></form>";

    echo "</tr>";
}

?>

</center>
    </body>
    </table>
</html>