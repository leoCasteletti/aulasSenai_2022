<html>
    <?php
        $dataEmissaoPedido = $_POST['dataEmissaoPedido'];
        $horaEmissaoPedido = $_POST['horaEmissaoPedido'];
        $nfPedido = $_POST['notafiscalPedido'];
        $dataSaidaPedido = $_POST['dataSaidaPedido'];
        $horaSaidaPedido = $_POST['horaSaidaPedido'];
        $valorFretePedido = $_POST['valorFretePedido'];

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

        $sql = "INSERT INTO cadastropedidos (Pedido_ID, Pedido_DataEmissao, Pedido_HoraEmissao, Pedido_NotaFiscal, Pedido_DataSaida, Pedido_HoraSaida, Pedido_ValorFrete) VALUES ('', '$dataEmissaoPedido', '$horaEmissaoPedido', '$nfPedido', '$dataSaidaPedido', '$horaSaidaPedido', '$valorFretePedido')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='LandingPage-main/../../../index.php'"/>
</html>