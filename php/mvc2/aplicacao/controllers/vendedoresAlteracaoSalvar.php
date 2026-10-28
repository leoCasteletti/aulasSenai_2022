<html>   
      <?php
            $servername = "localhost";
            $database = "vendas_01";
            $username = "root";
            $password = "";
            $dados = "";

            $dados = $_POST["dados"];

            $Vendedor_ID = $dados[0];
            $Vendedor_Nome = $dados[1];
            $Vendedor_Sobrenome = $dados[2];
            $Vendedor_Email = $dados[3];
            $Vendedor_DataNascimento = $dados[4];
            $Vendedor_CPF = $dados[5];
            $Vendedor_RG = $dados[6]; 
            $Vendedor_Endereco = $dados[7]; 
            $Vendedor_Telefone = $dados[8]; 

            // Cria Conexão
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Verificar Conexão
            if (!$conn){
                  die("falha na conexão: " . mysqli_connect_error());
            }
            
            // Verifica escolha de campos
            if(isset($_POST["dados"])){
            $sql = "UPDATE cadastropedidos set Vendedor_ID = '$Vendedor_ID', 
                                               Vendedor_Nome = '$Vendedor_Nome', 
                                               Vendedor_Sobrenome = '$Vendedor_Sobrenome', 
                                               Vendedor_Email = '$Vendedor_Email', 
                                               Vendedor_DataNascimento = '$Vendedor_DataNascimento', 
                                               Vendedor_CPF = '$Vendedor_CPF', 
                                               Vendedor_RG = '$Vendedor_RG',
                                               Vendedor_Endereco = '$Vendedor_Endereco',
                                               Vendedor_Telefone = '$Vendedor_Telefone'
                                               WHERE 
                                               Vendedor_ID = $Vendedor_ID";    
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            }

            mysqli_close($conn);

      ?>
      <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php'"/>
</html>