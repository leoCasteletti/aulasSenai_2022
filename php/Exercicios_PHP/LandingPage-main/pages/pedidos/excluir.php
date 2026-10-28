<html> 
      <?php
            $servername = "localhost";
            $database = "vendas_01";
            $username = "root";
            $password = "";

            $chave = $_POST["dado"];


            // Cria Conexão
            $conn = mysqli_connect($servername, $username, $password, $database);
            
            // Verificar Conexão
            if (!$conn) {
                  die("falha na conexão: " . mysqli_connect_error());
            }

            // Verifica escolha de campos
            if(isset($_POST["dado"])){
                  $sql = "DELETE from cadastropedidos WHERE Pedido_ID = $chave";   
                  $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            }
            mysqli_close($conn);

      ?>

      <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php'"/>
</html>