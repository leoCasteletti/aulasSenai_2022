<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        
        <?php
            $opcao = $_POST['escolherOpcao'];

            switch ($opcao) {
                case 'pesquisarBD':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP/cadastroVeiculo/pesquisaSomenteUm.php'>";
                    break;
                
                case 'adicionarBD':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP/cadastroVeiculo/cadastrarVeiculo.php'>";
                    break;

                case 'excluirBD':
                    echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP/cadastroVeiculo/perguntaDeletarBanco.php'>";
                    break;
                
                case 'exibirBD':
                echo "<meta http-equiv='refresh' content='0; http://localhost/Exercicios_PHP/cadastroVeiculo/conectaBanco.php'>";
                    break;
                }            
            ?>
    </body>
</html>