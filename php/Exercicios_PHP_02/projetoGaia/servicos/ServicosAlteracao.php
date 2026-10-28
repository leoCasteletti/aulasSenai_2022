<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
 <tr>   <th>Descrição</th> <th>Valor</th> <th>Duração</th>

<?php
$servername = "localhost";
$database = "projetogaia";
$username = "root";
$password = "";

$chave = $_POST["dado"];
echo $chave[0];


// Cria ConexÃ£o
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar ConexÃ£o
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos

     $sql = "SELECT * FROM servicos where Servicos_id = $chave[0]";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['Servicos_id'];
  echo  $registro['Servicos_descricao'];
  echo  $registro['Servicos_valor'];
  echo  $registro['Servicos_duracao'];
 
   echo "<tr>";
   echo "<form action='ServicosAlteracao2.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'   value=".$registro['Servicos_id'].">";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Servicos_descricao']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Servicos_valor']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Servicos_duracao']."></td>";
         echo "<td></tr><tr></table>;

         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>