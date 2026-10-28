<html>   
      <?php
            $servername = "localhost";
            $database = "vendas_01";
            $username = "root";
            $password = "";
            $dados = "";

            $dados = $_POST["dados"];

            $Produto_ID = $dados[0];
            $Produto_Codigo = $dados[1];
            $Produto_Fornecedor = $dados[2];
            $Produto_Descricao = $dados[3];
            $Produto_Estoque = $dados[4];
            $Produto_PrecoCusto = $dados[5];
            $Produto_PrecoVenda = $dados[6]; 

            // Cria Conexão
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Verificar Conexão
            if (!$conn){
                  die("falha na conexão: " . mysqli_connect_error());
            }
            
            // Verifica escolha de campos
            if(isset($_POST["dados"])){
                  $sql = "UPDATE cadastroprodutos set Produto_ID = '$Produto_ID', 
                                                Produto_Codigo = '$Produto_Codigo', 
                                                Produto_Fornecedor = '$Produto_Fornecedor', 
                                                Produto_Descricao = '$Produto_Descricao', 
                                                Produto_Estoque = '$Produto_Estoque', 
                                                Produto_PrecoCusto = '$Produto_PrecoCusto', 
                                                Produto_PrecoVenda = '$Produto_PrecoVenda'
                                                      WHERE 
                                                Produto_ID = $Produto_ID";    
                  
                  $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
            }

            mysqli_close($conn);

      ?>
      <meta http-equiv="refresh" content="0; URL='../index.php'"/>
</html>