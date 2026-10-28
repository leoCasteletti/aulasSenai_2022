<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "conectaBanco.php">
                <fieldset>
                    <legend>Deseja Mostrar Quais Dados?</legend>
                                        
                    <div>
                        <label>ID de Cadastro</label>
                        <input type = "text" name="cadastroVeicular[]" id="id" size="15">
                    </div>

                    <div>
                        <label>Placa do Veículo</label>
                        <input type = "text" name="cadastroVeicular[]" id="nome" size="15">
                    </div>

                    <div>
                        <label>Renavam do Veículo</label>
                        <input type = "text" name="cadastroVeicular[]" id="endereco" size="15">
                    </div>

                    <div>
                        <label>Marca do Veículo</label>
                        <input type = "text" name="cadastroVeicular[]" id="bairro" size="15">
                    </div>

                    <div>
                        <label>Cor do Veículo</label>
                        <input type = "text" name="cadastroVeicular[]" id="cidade" size="15">
                    </div>

                    <div>
                        <label>Chassi do Veículo</label>
                        <input type = "text" name="cadastroVeicular[]" id="estado" size="15">
                    </div>
                </fieldset>
            
            <br>
            <input type = "submit" name = "calcularbnt" value = "Consultar Dados" />
        </form>
    </body>
</html>