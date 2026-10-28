<html>
    <?php
        $nomeV = $_POST['nomeVendedor'];
        $sobrenomeV = $_POST['sobrenomeVendedor'];
        $emailV = $_POST['emailVendedor'];
        $dataNascimentoV = $_POST['dataNascimentoVendedor'];
        $cpfV = $_POST['cpfVendedor'];
        $rgV = $_POST['rgVendedor'];
        $enderecoV = $_POST['enderecoVendedor'];
        $telefoneV = $_POST['telefoneVendedor'];

        // Iniciando Banco de Dados
        $servername = "localhost";
        $database = "vendas_01";
        $username = "root";
        $password = "";

        // Criar Conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Checar Conexão
        if (!$conn){
            die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
        }        

        $sql = "INSERT INTO cadastrovendedores (Vendedor_ID, Vendedor_Nome, Vendedor_Sobrenome, Vendedor_Email, Vendedor_DataNascimento, Vendedor_CPF, Vendedor_RG, Vendedor_Endereco, Vendedor_Telefone) VALUES ('', '$nomeV', '$sobrenomeV', '$emailV', '$dataNascimentoV', '$cpfV', '$rgV', '$enderecoV', '$telefoneV')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php'"/>
</html>