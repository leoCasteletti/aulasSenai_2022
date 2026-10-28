<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "conecta-banco.php">
                <fieldset>
                    <legend>Deseja Mostrar Quais Dados?</legend>
                                        
                    <div>
                        <input type="checkbox" id="id" name="checkdados[]">
                        <label for="scales">ID</label>

                        <input type = "text" name="dados[]" id="id" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="nome" name="checkdados[]">
                        <label for="scales">Nome</label>
                    

                        <input type = "text" name="dados[]" id="nome" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="endereco" name="checkdados[]">
                        <label for="endereco">Endereço</label>

                        <input type = "text" name="dados[]" id="endereco" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="bairro" name="checkdados[]">
                        <label for="bairro">Bairro</label>

                        <input type = "text" name="dados[]" id="bairro" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="cidade" name="checkdados[]">
                        <label for="cidade">Cidade</label>

                        <input type = "text" name="dados[]" id="cidade" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="estado" name="checkdados[]">
                        <label for="estado">Estado</label>

                        <input type = "text" name="dados[]" id="estado" size="15" class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="cep" name="checkdados[]">
                        <label for="cep">CEP</label>

                        <input type = "text" name="dados[]" id="cep" size="15"class="input-padrao">
                    </div>

                    <div>
                        <input type="checkbox" id="todos" name="checkdados[]" checked>
                        <label for="todos">Todos</label>
                    </div>
                </fieldset>

            
            <br><br>
            <input type = "submit" name = "calcularbnt" value = "Consultar Dados" />
        </form>
    </body>
</html>