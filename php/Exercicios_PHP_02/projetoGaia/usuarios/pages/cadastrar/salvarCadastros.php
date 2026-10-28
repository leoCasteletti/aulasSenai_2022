<html>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $permissao = $_POST['permissao'];
        $cpfcnpj = $_POST['cpf_cnpj'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];

        // Iniciando Banco de Dados
        $servername = "localhost";
        $database = "projetogaia";
        $username = "root";
        $password = "";

        // Criar Conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Checar Conexão
        if (!$conn){
            die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
        }        

        $sql = "INSERT INTO usuarios (Usuarios_id, Usuarios_nome, Usuarios_email, Usuarios_senha, Usuarios_celular, Usuarios_administrador, usuarios_cpfCNPJ, Usuarios_Endereco, Usuarios_Cidade, Usuarios_ES, Usuarios_bairro, Usuarios_cep) VALUES ('', '$nome', '$email', '$senha', '$celular', '$permissao', '$cpfcnpj', '$endereco', '$cidade', '$estado', '$bairro', '$cep')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='relatorioCadastros.php'"/>
</html>