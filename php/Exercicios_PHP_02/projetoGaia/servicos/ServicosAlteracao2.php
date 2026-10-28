<body> <html> <head>
 <title>Resultado da exclusao</title>
 </head> </body>

<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";


$dados = "";
$dados        = $_POST["dados"];
$Servicos_id      = $dados[0];
$Servicos_descricao     = $dados[1];
$Servicos_valor = $dados[2];
$Servicos_duracao  = $dados[3];

echo  $Servicos_id;
echo  $Servicos_descricao;
echo  $Servicos_valor;
echo  $Servicos_duracao;

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

        $sql = 
        "UPDATE servicos 
        set 
        Servicos_descricao = '$Servicos_descricao',
        Servicos_valor = '$Servicos_valor',
        Servicos_duracao = '$Servicos_duracao'
        WHERE Servicos_id = $Servicos_id";

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$Servicos_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="2; URL='servicos2.html'"/>
</body>
</html>