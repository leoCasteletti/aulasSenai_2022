<body> <html> <head>
 <title>Resultado da exclusao</title>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";
$dados = "";
$dados        = $_POST["dados"];
$Cad_id       = $dados[0];
$Cad_nome     = $dados[1];
$Cad_endereco = $dados[2];
$Cad_bairro   = $dados[3];
$Cad_cidade   = $dados[4];
$Cad_estado   = $dados[5];
$Cad_cep      = $dados[6]; 

echo  $Cad_id;
echo  $Cad_nome;
echo  $Cad_endereco;
echo  $Cad_bairro;
echo  $Cad_cidade;
echo  $Cad_estado;
echo  $Cad_estado;

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
        "UPDATE cadastro 
        set 
        Cad_nome     = '$Cad_nome',
        Cad_endereco = '$Cad_endereco',
        Cad_bairro   = '$Cad_bairro', 
        Cad_cidade   = '$Cad_cidade', 
        Cad_estado   = '$Cad_estado', 
        Cad_cep      = '$Cad_cep'
        WHERE Cad_id = $Cad_id";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$Cad_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="2; URL='consulta-teste.html'"/>
</body>
</html>