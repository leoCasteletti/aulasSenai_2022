<html>
    <?php
        $tipoProduto = $_POST['produto'];
        $pedidoID = $_POST['dado'];
        $quantidadeProduto = $_POST['quantidadeProduto'];
        $vUnitarioProduto = $_POST['valorUnitario'];

        echo "$tipoProduto";
        echo "$pedidoID";
        echo "$quantidadeProduto";
        echo "$vUnitarioProduto";

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

        $sql = "INSERT INTO itenspedido (ItensPedido_ID, Produto_ID, Pedido_ID, Quantidade, ValorUnitario) VALUES ('', '$tipoProduto', '$pedidoID', '$quantidadeProduto', '$vUnitarioProduto')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="10; URL='../index.php'"/>
</html>