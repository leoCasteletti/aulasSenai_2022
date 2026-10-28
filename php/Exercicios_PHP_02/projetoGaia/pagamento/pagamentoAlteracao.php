<html> <head>
<title>Alteração Pagamento</title>
<link rel="stylesheet" type="text/css" href="pagamento.css" media="screen">
</head> 
<center>
<div>
<h1 id="titulo">Alteração Pagamentos !</h1>
<p id="subtitulo">Digite no campo desejado para realizar a alteração:</p>    
<br>
</div>
<table class="styled-table">
<thead>
<tbody>
<tr>
<th>Forma De Pagamento</th>
<th>Data De Emissão</th><th>Data De Vencimento</th>
<th>Valor</th><th>N° Documento</th>
<th>Data De Pagamento</th><th>Assinatura</th>
</tr>
</tbody>
</thead>
<body>
<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$chave = $_POST["dado"];

$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar ConexÃ£o
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM pagamento where Pagamento_id = $chave[0]";   
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

$registro = mysqli_fetch_array($resultado);
 
echo "<tr>";
echo "<form action='pagamentoAlteracaoUpdate.php' method='post'>";
echo "<input type='hidden'   name='dados[]'   value=".$registro['Pagamento_id'].">";
echo "<td><input type='text' name='dados[]'   value=".$registro['Pagamento_formaPagamento']."></td>";
echo "<td><input type='date' name='dados[]'   value=".$registro['Pagamento_emissao']."></td>";
echo "<td><input type='date' name='dados[]'   value=".$registro['Pagamento_vencimento']."></td>";
echo "<td><input type='text' name='dados[]'   value=".$registro['Pagamento_valor']."></td>";
echo "<td><input type='text' name='dados[]'   value=".$registro['Pagamento_numeroDoc']."></td>";
echo "<td><input type='date' name='dados[]'   value=".$registro['Pagamento_dataP']."></td>";
echo "<td><input type='text' name='dados[]'   value=".$registro['Pagamento_assinatura']."></td>";
echo "<td></tr><tr></table>;
   <center> 
   <button class='btn first' type='submit'>Realizar Alteração</button></form>";
echo "</table>";

 mysqli_close($conn);
 
 ?>
</center>
</body>
</html>