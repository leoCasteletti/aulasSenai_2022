<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinaturas</title>
</head>
<body>
    <center>
    <h1>Cadastrar Assinaturas</h1>
	<form method="post" action="cadastra_assinaturas.php">

<?php

$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = ""; 

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falha na Conexão: " . mysqli_connect_error());
}

$sql =  "SELECT * FROM servicos";

$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");

echo "<fieldset>";
echo "<br>Selecione seu serviço: ";
echo "<select name = 'Servicos_id'>";

while($registro = mysqli_fetch_array($resultado)){
    $Servicos_id = $registro['Servicos_id'];
    $Servicos_descricao = $registro['Servicos_descricao'];
    $Servicos_valor = $registro['Servicos_valor'];
    $Servicos_duracao = $registro['Servicos_duracao'];

	echo "<option value = '$Servicos_id'><td>".$Servicos_descricao."</td></option>";
}
echo "</select><br>";

echo "<input type='hidden' name='Servicos_valor' value=".$Servicos_valor.">";

$sql =  "SELECT * FROM regiao";

$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");

echo "<br>Selecione sua Região: ";
echo "<select name = 'Regiao_id'><br>";

while($registro = mysqli_fetch_array($resultado)){
    $Regiao_id = $registro['Regiao_id'];
    $Regiao_nome = $registro['Regiao_nome'];
	$Regiao_descricao = $registro['Regiao_descricao'];

	echo "<br><br>Escolha a Região que deseja: ";
	echo "<option value = '$Regiao_id' name='dados2'><td>$Regiao_nome - $Regiao_descricao</td></option>";;
}
	echo "<form action='pesquisa_dados.php' name='dados2' method='post'> 
	<center> 
	 </select><br>";

	$sql =  "SELECT * FROM Usuarios";

	$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");
	
	echo "<br>Escolha o Usuário que deseja: ";
	echo "<select name = 'Usuarios_id'>";
	
	while($registro = mysqli_fetch_array($resultado)){
		$Usuarios_id = $registro['Usuarios_id'];
		$Usuarios_nome = $registro['Usuarios_nome'];
	
		echo "<option value = '$Usuarios_id'><td>$Usuarios_nome</td></option>";
	}
		echo "<input type='hidden' name='dados3' value=".$Usuarios_id.">";
		echo "</select><br>";

	$sql =  "SELECT * FROM Pagamento";

	$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");
	
	echo "<br>Escolha a Forma de Pagamento que deseja: ";
	echo "<select name = 'Pagamento_id'>";
	
	while($registro = mysqli_fetch_array($resultado)){
		$Pagamento_id = $registro['Pagamento_id'];
		$Pagamento_formaPagamento = $registro['Pagamento_formaPagamento'];
		$Pagamento_valor = $registro['Pagamento_valor'];
	
		echo "<option value = '$Usuarios_id'><td>$Pagamento_formaPagamento - $Pagamento_valor</td></option>";
	}
		echo "</select><br><br>";

		echo "<input type='date' name='data_assinatura'>";

		echo "</fieldset>";
		echo "<br>";

		echo "<input class='mandar' type=submit value='Cadastro' >";
		echo "<input type='hidden' name='dados1' value=".$Servicos_id.">";

?>
		</form>
    
</body>
</html>