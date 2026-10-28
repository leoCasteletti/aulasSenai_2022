<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "deletarBanco.php">
                <fieldset>
                    <legend>Escreva o ID do dado que deseja excluir</legend>
                                        
                    <div>
                        <label>ID do Cadastro</label>
                        <input type = "text" name="deletarCadastroVeicular" size="15">
                    </div>

                    <!-- // Exibe os dados em forma de tabela. !-->
                    <table border="1" style="width: 50%">
                    <tr> 
                        <th>ID</th> 
                        <th>Placa do Veículo</th>
                        <th>Renavam do Veículo</th> 
                        <th>Marca do Veículo</th>
                        <th>Cor do Veículo</th> 
                        <th>Chassi do Veículo</th>
                    </tr><br>

                    <?php
                        // Credenciais para conectar com o Banco de Dados.
                        $servername = "localhost";
                        $databse = "db_cadastroveicular";
                        $username = "root";
                        $password = "";

                        // Abrindo o Banco.
                        $conn = mysqli_connect($servername, $username, $password, $databse);

                        // Comando SQL a ser Executado.
                        $sql = "SELECT * FROM cadastrar_veiculo";

                        // Executa o Comando SQL.
                        $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

                        while($registro = mysqli_fetch_array($resultado)){
                            $Veiculo_ID = $registro['Veiculo_ID'];
                            $Veiculo_Placa = $registro['Veiculo_Placa'];
                            $Veiculo_Renavam = $registro['Veiculo_Renavam'];
                            $Veiculo_Marca = $registro['Veiculo_Marca'];
                            $Veiculo_Cor = $registro['Veiculo_Cor'];
                            $Veiculo_Chassi = $registro['Veiculo_Chassi'];

                            // Exibe os resultados em forma de tabela.
                            echo "<tr>";
                            echo "<td>".$Veiculo_ID."</td>";
                            echo "<td>".$Veiculo_Placa."</td>";
                            echo "<td>".$Veiculo_Renavam."</td>";
                            echo "<td>".$Veiculo_Marca."</td>";
                            echo "<td>".$Veiculo_Cor."</td>";
                            echo "<td>".$Veiculo_Chassi."</td>";
                            echo "</tr>";
                        }

                        // Fecha Banco de Dados.
                        mysqli_close($conn);

                        // Fecha a formatação em tabela.
                        echo "</table>";
                    ?>          
                </fieldset>
            
            <br>
            <input type = "submit" name = "calcularbnt" value = "Consultar Dados" />
        </form>
    </body>
</html>