<html>   
    <?php
        $servername = "localhost";
        $database = "vendas_01";
        $username = "root";
        $password = "";
        $dados = "";

        $dados = $_POST["dados"];

        $Cliente_ID = $dados[0];
        $Cliente_Nome = $dados[1];
        $Cliente_Sobrenome = $dados[2];
        $Cliente_RG = $dados[3];
        $Cliente_CPF = $dados[4];
        $Cliente_DataNascimento = $dados[5];
        $Cliente_Genero = $dados[6]; 
        $Cliente_Endereco = $dados[7]; 
        $Cliente_Telefone = $dados[8]; 

        // Cria Conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Verificar Conexão
        if (!$conn){
            die("falha na conexão: " . mysqli_connect_error());
        }
            
        // Verifica escolha de campos
        if(isset($_POST["dados"])){
            $sql = "UPDATE cadastroclientes set Cliente_ID = '$Cliente_ID', 
                                                Cliente_Nome = '$Cliente_Nome', 
                                                Cliente_Sobrenome = '$Cliente_Sobrenome', 
                                                Cliente_RG = '$Cliente_RG', 
                                                Cliente_CPF = '$Cliente_CPF', 
                                                Cliente_DataNascimento = '$Cliente_DataNascimento', 
                                                Cliente_Genero = '$Cliente_Genero', 
                                                Cliente_Endereco = '$Cliente_Endereco',
                                                Cliente_Telefone = '$Cliente_Telefone'  
                                                    WHERE 
                                                Cliente_ID = $Cliente_ID";    
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
        }

        mysqli_close($conn);

      ?>
      <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php''"/>
</html>