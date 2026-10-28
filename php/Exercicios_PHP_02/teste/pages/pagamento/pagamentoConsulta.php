<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="pagamento.css" media="screen">
<title>Resultado Consulta</title>
</head>
<body>
<center>
<h1 style="color: red; font-size: 35pt; text-shadow: 1px 1px 3px #000000;">RESULTADO DA SUA CONSULTA: </h1>
<a href="http://localhost:8080/projetoGaia/pagamentoConsulta.html" style="text-decoration: none;">
<button class="novamente">Consultar Novamente</button>
</a>
<br><table class="styled-table">
<thead>
<tbody>
<tr>
<th>ID</th><th>Forma De Pagamento</th>
<th>Data De Emissão</th><th>Data De Vencimento</th>
<th>Valor</th><th>N° Documento</th>
<th>Data De Pagamento</th><th>Assinatura</th>
</tr>
</tbody>
</thead>

</body>

<?php

$servername = "localhost";
$databse = "projetogaia";
$username = "root";
$password = "";

$campo = ["Pagamento_id", "Pagamento_formaPagamento", "Pagamento_emissao", "Pagamento_vencimento", "Pagamento_valor", "Pagamento_numeroDoc","Pagamento_dataP","Pagamento_assinatura"];
$i = 0;
$sequencia = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $username, $password, $databse);

if(isset($_POST["dado"])){

    foreach($_POST["dado"] as $dado){
        if($dado <> ""){
            if($sequencia == "")
                $sequencia = 1;
            else
                $comando = $comando . " and "; 

                $comando = $comando . $campo[$i] ."="."'". $dado ."' ";
                echo "- " . $campo[$i] ."---". $dado ."<br>";
        }
        $i++;
    }
}

if($comando <> "")
 
$sql = "SELECT * FROM pagamento WHERE $comando";

else
$sql = "SELECT * FROM pagamento";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){

        $Pagamento_id = $registro['Pagamento_id'];
        $Pagamento_formaPagamento = $registro['Pagamento_formaPagamento'];
        $Pagamento_emissao = $registro['Pagamento_emissao'];    
        $Pagamento_vencimento = $registro['Pagamento_vencimento'];
        $Pagamento_valor = $registro['Pagamento_valor'];
        $Pagamento_numeroDoc = $registro['Pagamento_numeroDoc'];
        $Pagamento_dataP = $registro['Pagamento_dataP'];
        $Pagamento_assinatura = $registro['Pagamento_assinatura'];

        echo "<tr>";
        echo "<td style='text-align: center;'>". $Pagamento_id."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_formaPagamento."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_emissao."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_vencimento."</td>";
        echo "<td style='text-align: center;'>"."R$ ".$Pagamento_valor."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_numeroDoc."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_dataP."</td>";
        echo "<td style='text-align: center;'>".$Pagamento_assinatura."</td>";
        echo "<td> <form action='pagamentoAlteracao.php' method='post'> <center> <input type='hidden' name='dado[]' value=".$Pagamento_id."> <input class='mandar' type=submit value='Alteração' ></form>";
        echo "<form action='pagamentoExclusao.php' method='post'> <input type='hidden' name='dado' value=".$Pagamento_id."> <center> <input class='mandar' type=submit value='Exclusão' ></form></td>"; 
        echo "</tr>";   
    }

mysqli_close($conn);

?>


</table>
</center>   
</html>