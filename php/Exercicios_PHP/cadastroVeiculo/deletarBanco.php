<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>

    <form method = "post" action = "cadastrarOuConsultar.php">

        <?php
            // Trazendo a variável que está na página anterior
            $dadoDelete = $_POST ['deletarCadastroVeicular'];

            // Credenciais para conectar com o Banco de Dados.
            $servername = "localhost";
            $databse = "db_cadastroveicular";
            $username = "root";
            $password = "";

            // Abrindo o Banco
            $conn = mysqli_connect($servername, $username, $password, $databse);

            // Checou se o Banco está Funcionando.
            if(!$conn){
                die("Fudeu, deu erro na conexão: " . mysqli_connect_error());
            }

            // Se o banco estiver funcionando, exibirá essa mensagem. Senão, exibe a mensagem de cima.
            echo "Conexão com o banco de dados executada com <b>SUCESSO</b>. Mostraremos os seus dados abaixo:<br><br>";
                       
            // Comparação.
            if($dadoDelete <> ""){
                // Comando SQL a ser Executado.
                $sql = "DELETE FROM cadastrar_veiculo WHERE Veiculo_ID = $dadoDelete";

                // Executa o Comando SQL.
                $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

                // Fecha Banco de Dados.
                mysqli_close($conn);
            } else {
                echo "Você não digitou nada, não houve a exclusão de nenhum dado.";
            }
        ?>
            <input type = "submit" name = "calcularbnt" value = "Voltar para a Página Inicial" />
        </form>
    </body>        
</html>