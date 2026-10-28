<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>

    <form method = "post" action = "cadastrarOuConsultar.php">

        <!-- // Exibe os resultados em forma de tabela. !-->
        <table border="1" style="width: 50%">
        <tr> 
            <th>ID</th> 
            <th>Placa do Veículo</th>
            <th>Renavam do Veículo</th> 
            <th>Marca do Veículo</th>
            <th>Cor do Veículo</th> 
            <th>Chassi do Veículo</th>
        </tr>

        <?php
            // Credenciais para conectar com o Banco de Dados.
            $servername = "localhost";
            $database = "db_cadastroveicular";
            $username = "root";
            $password = "";

            $campo = ["Veiculo_ID", "Veiculo_Placa", "Veiculo_Renavam", "Veiculo_Marca", "Veiculo_Cor", "Veiculo_Chassi"];

            $i = 0;
            $sequencia = "";
            $comando = "";

            // Abrindo o Banco.
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Checou se o Banco está Funcionando.
            if(!$conn){
                die("Fudeu, deu erro na conexão: " . mysqli_connect_error());
            }

            echo "Conexão com o banco de dados executada com <b>SUCESSO</b>. Mostraremos os seus dados abaixo:<br><br>";

            //Verifica a escrita de campos
            if(isset($_POST["cadastroVeicular"])){

                //Faz Loop para os dados
                foreach($_POST["cadastroVeicular"] as $cadastroVeicular){
                    if($cadastroVeicular <> ""){
                        if($sequencia == "")
                            $sequencia = 1;
                        else
                            $comando = $comando . " and "; 

                            $comando = $comando . $campo[$i] ."="."'". $cadastroVeicular ."' ";
                            //echo "- " . $campo[$i] ."---". $cadastroVeicular ."<br>";  
                    }
                    $i++;
                }
            }

            if($comando <> ""){
                // Comando SQL a ser Executado.
                $sql = "SELECT * FROM cadastrar_veiculo WHERE $comando";
            } else {
                // Comando SQL a ser Executado.
                $sql = "SELECT * FROM cadastrar_veiculo";
            }

            // Executa o Comando SQL.
            $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

            //Loop para Ler todos os registros
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
                //echo "</tr>";

                echo "<form action = 'cadastrarOuConsultar.php' method = 'post'> 
                    <input type = 'hidden' name = 'cadastroVeicular' value =" .$Veiculo_ID.">                     
                    <td>
                    <input type = submit value = 'Excluir'>
                    </form>";

                echo "<form action = 'cadastrarOuConsultar.php' method = 'post'> 
                    <input type = 'hidden' name = 'cadastroVeicular' value =" .$Veiculo_ID.">    
                    
                    <input type = submit value = 'Alterar'>
                    </form>";
                echo "</tr>";
            }

            // Fecha Banco de Dados.
            mysqli_close($conn);

            // Fecha a formatação em tabela.
            echo "</table>";
            echo "<br>";
        ?>
            <input type = "submit" name = "calcularbnt" value = "Voltar para a Página Inicial" />
        </form>
    </body>
        
</html>