<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
 <tr>   <th>Nome</th> <th>Endereço</th> <th>Bairro</th> <th>Cidade</th>
 <th>Estado</th> <th>Cep</th> </tr>

<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";

$chave = $_POST["dado"];
echo $chave. "novo";

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos

     $sql = "SELECT * FROM cadastro where Cad_id = $chave";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['Cad_id'];
  echo  $registro['Cad_nome'];
  echo  $registro['Cad_endereco'];
  echo  $registro['Cad_bairro'];
  echo  $registro['Cad_cidade'];
  echo  $registro['Cad_estado'];
  echo  $registro['Cad_cep'];
 
   echo "<tr>";
   echo "<form action='alteracao-salva.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'   value=".$registro['Cad_id'].">";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_nome']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_endereco']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_bairro']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_cidade']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_estado']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['Cad_cep']."></td>";
         echo "<td></tr><tr></table>;

         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>