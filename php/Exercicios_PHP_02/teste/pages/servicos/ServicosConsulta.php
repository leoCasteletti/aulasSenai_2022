<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
 <tr>  <th>ID</th> <th>Descrição</th>
 <th>Valor</th> <th>duração</th></tr>

<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$campo=["Servicos_id", "Servicos_descricao", "Servicos_valor", 
        "Servicos_duracao"];
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
     $sql = "SELECT * FROM servicos where $comando";   
else
    $sql = "SELECT * FROM servicos";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $Servicos_id = $registro['Servicos_id'];
   $Servicos_descricao = $registro['Servicos_descricao'];
   $Servicos_valor = $registro['Servicos_valor'];
   $Servicos_duracao  = $registro['Servicos_duracao'];
 
   echo "<tr>";
   echo "<td>".$Servicos_id."</td>";
   echo "<td>".$Servicos_descricao."</td>";
   echo "<td>".$Servicos_valor."</td>";
   echo "<td>".$Servicos_duracao."</td>";

   echo "<td>
        <form action='ServicosAlteracao.php' method='post'>
        <input type='hidden' name='dado' value=".$Servicos_id.">   
        <center> <input type=submit value='Alterar' ></form>";
   
   echo "<form action='ServicosExclusao.php' method='post'>
        <input type='hidden' name='dados' value=".$Servicos_id.">
   <center><input type=submit value='Excluir' ></form></td>";
   echo "</tr>";
 }

 mysqli_close($conn);

 echo "</table>";

 ?>

</body>
</html>