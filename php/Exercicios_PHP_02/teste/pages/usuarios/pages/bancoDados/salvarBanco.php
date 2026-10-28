<html>   
    <?php
        $servername = "localhost";
        $database = "projetoGaia";
        $username = "root";
        $password = "";
        $dados = "";

        $dados = $_POST["dados"];

        $Usuarios_id = $dados[0];
        $Usuarios_nome = $dados[1];
        $Usuarios_email = $dados[2];
        $Usuarios_senha = $dados[3];
        $Usuarios_celular = $dados[4];
        $Usuarios_administrador = $dados[5];
        $usuarios_cpfCNPJ = $dados[6]; 
        $Usuarios_Endereco = $dados[7]; 
        $Usuarios_Cidade = $dados[8]; 
        $Usuarios_ES = $dados[9]; 
        $Usuarios_bairro = $dados[10]; 
        $Usuarios_cep = $dados[11]; 

        // Cria Conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Verificar Conexão
        if (!$conn){
            die("falha na conexão: " . mysqli_connect_error());
        }
            
        // Verifica escolha de campos
        if(isset($_POST["dados"])){
            $sql = "UPDATE usuarios set Usuarios_id = '$Cliente_ID', Usuarios_nome = '$Usuarios_nome', Usuarios_email = '$Usuarios_email', Usuarios_senha = '$Usuarios_senha', Usuarios_celular = '$Usuarios_celular', Usuarios_administrador = '$Usuarios_administrador', usuarios_cpfCNPJ = '$usuarios_cpfCNPJ', Usuarios_Endereco = '$Usuarios_Endereco', Usuarios_Cidade = '$Usuarios_Cidade', Usuarios_ES = '$Usuarios_ES', Usuarios_bairro = '$Usuarios_bairro', Usuarios_cep = '$Usuarios_cep', WHERE Usuarios_id = $Usuarios_id";    
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
        }

        mysqli_close($conn);

      ?>
      <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php''"/>
</html>