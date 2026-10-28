<html>   
      <?php
            $servername = "localhost";
            $database = "vendas_01";
            $username = "root";
            $password = "";
            $dados = "";

            $dados = $_POST["dados"];

            $Pedido_ID = $dados[0];
            $Pedido_DataEmissao = $dados[1];
            $Pedido_HoraEmissao = $dados[2];
            $Pedido_NotaFiscal = $dados[3];
            $Pedido_DataSaida = $dados[4];
            $Pedido_HoraSaida = $dados[5];
            $Pedido_ValorFrete = $dados[6]; 
            $Pedido_EmpresaFrete = $dados[7]; 

            // Cria Conexão
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Verificar Conexão
            if (!$conn){
                  die("falha na conexão: " . mysqli_connect_error());
            }
            
            // Verifica escolha de campos
            if(isset($_POST["dados"])){
            $sql = "UPDATE cadastropedidos set Pedido_ID = '$Pedido_ID', 
                                               Pedido_DataEmissao = '$Pedido_DataEmissao', 
                                               Pedido_HoraEmissao = '$Pedido_HoraEmissao', 
                                               Pedido_NotaFiscal = '$Pedido_NotaFiscal', 
                                               Pedido_DataSaida = '$Pedido_DataSaida', 
                                               Pedido_HoraSaida = '$Pedido_HoraSaida', 
                                               Pedido_ValorFrete = '$Pedido_ValorFrete', 
                                               Pedido_EmpresaFrete = '$Pedido_EmpresaFrete' 
                                               WHERE 
                                               Pedido_ID = $Pedido_ID";    
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            }

            mysqli_close($conn);

      ?>
      <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php'"/>
</html>