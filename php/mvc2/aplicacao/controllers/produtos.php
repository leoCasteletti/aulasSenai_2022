<html>
    <?php
        $codigoP = $_POST['codigoProduto'];
        $fornecedorP = $_POST['fornecedorProduto'];
        $descricaoP = $_POST['decricaoProduto'];
        $estoqueP = $_POST['estoqueProduto'];
        $precoCustoP = $_POST['precoCustoProduto'];
        $precoVendaP = $_POST['precoVendaProduto'];

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

        $sql = "INSERT INTO cadastroprodutos (Produto_ID, Produto_Codigo, Produto_Fornecedor, Produto_Descricao, Produto_Estoque, Produto_PrecoCusto, Produto_PrecoVenda) VALUES ('', '$codigoP', '$fornecedorP', '$descricaoP', '$estoqueP', '$precoCustoP', '$precoVendaP')";
        
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    ?>
    <meta http-equiv="refresh" content="0; URL='../index.php'"/>
</html>