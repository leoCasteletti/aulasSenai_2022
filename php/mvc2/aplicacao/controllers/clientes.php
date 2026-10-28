<html>
    <?php
        $nomeC = $_POST['nomeCliente'];
        $sobrenomeC = $_POST['sobrenomeCliente'];
        $rgC = $_POST['rgCliente'];
        $cpfC = $_POST['cpfCliente'];
        $datanascimentoC = $_POST['dataNascimentoCliente'];
        $generoC = $_POST['generoCliente'];
        $enderecoC = $_POST['enderecoCliente'];
        $telefoneC = $_POST['telefoneCliente'];

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

        $sql = "INSERT INTO cadastroclientes (Cliente_ID, Cliente_Nome, Cliente_Sobrenome, Cliente_RG, Cliente_CPF, Cliente_DataNascimento, Cliente_Genero, Cliente_Endereco, Cliente_Telefone) VALUES ('', '$nomeC', '$sobrenomeC', '$rgC', '$cpfC', '$datanascimentoC', '$generoC', '$enderecoC', '$telefoneC')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='../index.php'"/>
</html>