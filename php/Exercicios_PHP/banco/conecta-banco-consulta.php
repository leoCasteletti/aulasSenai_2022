 <body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
    <tr>
        <th>ID</th> 
        <th>Nome</th>
        <th>Endereço</th> 
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th> 
        <th>Cep</th> 
    </tr>

<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";

$campo=["Cad_id", 
        "Cad_nome", 
        "Cad_endereco", 
        "Cad_bairro", 
        "Cad_cidade", 
        "Cad_estado", 
        "Cad_cep"];
$i=0;
$sequencia="";
$comando="";

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos
if(isset($_POST["dado"]))
{    
    // Faz loop para os dados
    foreach($_POST["dado"] as $dado)
    {
        if ( $dado <> "")
        {
            if ($sequencia == "")
                $sequencia=1;
            else
                $comando = $comando . " and ";
                      
            $comando = $comando . $campo[$i] ."="."'"
            .$dado."' ";
            echo "$comando <br>"; 
        }
        $i++;
    }
     
     
}
else
{
    echo "nenhum campo selecionado";
   
}


if ($comando <> "")
     $sql = "SELECT * FROM cadastro where $comando";   
else
    $sql = "SELECT * FROM cadastro";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $Cad_id = $registro['Cad_id'];
   $Cad_nome = $registro['Cad_nome'];
   $Cad_endereco = $registro['Cad_endereco'];
   $Cad_bairro = $registro['Cad_bairro'];
   $Cad_cidade = $registro['Cad_cidade'];
   $Cad_estado = $registro['Cad_estado'];
   $Cad_cep = $registro['Cad_cep'];
 
   echo "<tr>";
   echo "<td>".$Cad_id."</td>";
   echo "<td>".$Cad_nome."</td>";
   echo "<td>".$Cad_endereco."</td>";
   echo "<td>".$Cad_bairro."</td>";
   echo "<td>".$Cad_cidade."</td>";
   echo "<td>".$Cad_estado."</td>";
   echo "<td>".$Cad_cep."</td>";
   echo "<td>
         <form action='alteracao-teste.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$Cad_id.">
         <input type=submit value='Alterar' ></form>";
   
   echo "<form action='exclusao-teste.php' method='post'>
         <input type='hidden' name='dado' value=".$Cad_id.">
   <center> <input type=submit value='Excluir' ></form></td>";
   echo "</tr>";
 }
 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>