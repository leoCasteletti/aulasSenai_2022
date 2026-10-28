<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "redirecionarEscolha.php">

            <fieldset>
                <legend>Qual função você deseja executar do nosso registro veicular?</legend>

                <label>
                    <input type="radio" name="escolherOpcao" value="alterarDB"/>
                    Alterar dado;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="pesquisarBD"/>
                    Pesquisar no banco de dados;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="adicionarBD"/>
                    Adicionar no banco de dados;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="excluirBD"/>
                    Excluir do banco de dados;<br>
                </label>

                <label>
                    <input type="radio" name="escolherOpcao" value="exibirBD"/>
                    Exibir todos os resultados existentes no banco de dados.
                </label>
            </fieldset>

            <input type = "submit" name = "enviarSolicitacao" value = "Enviar Solicitação de Registro" />

        </form>
    </body>
</html>