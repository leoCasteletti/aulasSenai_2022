<html>
    <?php
        $numeroCandidato = $_POST['Candidato_Numero'];

        echo $numeroCandidato;

        // Iniciando Banco de Dados
        $servername = "localhost";
        $database = "candidatodb";
        $username = "root";
        $password = "";

        // Criar Conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Checar Conexão
        if (!$conn){
            die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
        }        

        $sql = "INSERT INTO bancovotacao (Candidado_ID) VALUES ('$numeroCandidato')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='../../index.html'"/>
</html>