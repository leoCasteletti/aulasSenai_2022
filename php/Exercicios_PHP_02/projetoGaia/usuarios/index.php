<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "redirecionarIndex.php">

            <fieldset>                
                <legend><strong>Função Que Deseja Executar</strong></legend><br>

                <label>
                    <input type="radio" name="escolherOpcao" value="alterarDB"/>
                    Alteração de Cadastro;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="pesquisarBD"/>
                    Pesquisar Cadastro;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="adicionarBD"/>
                    Criar Cadastro;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="excluirBD"/>
                    Excluir Cadastro;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="exibirBD"/>
                    Exibir todos os resultados existentes no banco de dados.
                </label>
            </fieldset><br>

            <input type = "submit" name = "enviarSolicitacao" value = "Enviar Solicitação" />

        </form>
    </body>
</html>