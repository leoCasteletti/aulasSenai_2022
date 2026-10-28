<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        
        <?php
            $opcao = $_POST['escolherOpcao'];

            switch ($opcao) {
                case 'alterarDB':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP_02/projetoGaia/Paginas/cadastrar/relatorioCadastros.php'>";
                    break;
                
                case 'adicionarBD':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP_02/projetoGaia/Paginas/Cadastrar/cadastroUsuario.php'>";
                    break;

                case 'excluirBD':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP_02/projetoGaia/Paginas/cadastrar/relatorioCadastros.php'>";
                    break;
                
                case 'exibirBD':
                echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP_02/projetoGaia/Paginas/cadastrar/relatorioCadastros.php'>";
                    break;
                }            
            ?>
    </body>
</html>