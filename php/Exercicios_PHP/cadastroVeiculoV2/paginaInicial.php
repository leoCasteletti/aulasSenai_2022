<!DOCTYPE html>
    <html lang = "pt-br">    
    <head>
        <title>Legislação Veicular</title>
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="paginaInicial.css">
    </head>
    
    <body>
        <header>
            <div class = "avatar">
                <h1><img src = "avatar.png" alt = "Texto alternativo" title = "Avatar"/></h1>
                <nav>
                    <ul>
                        <li><a href="cadastrarVeiculo.html">Cadastrar</a></li>
                        <li><a href="removerVeiculo.html">Remover</a></li>
                        <li><a href="alterarVeiculo.html">Alterar</a></li>
                    </ul>
                </nav>                
            </div>
        </header>

        <section class = 'titulo-principal'>
            <h2 class = 'titulo-centralizado'>Informando os Dados Cadastrados em Nosso Banco De Dados</h2>
        </section>
        

            <!-- // Exibe os dados em forma de tabela. !-->
            <table>
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
            ?>   
        </table>   

        <footer class="background-rodape">
            <img src="avatar.png" alt="Logo DER">
            <p> &copy; Copyright Sistema de Trânsito - 2022</p>
        </footer>      

    </body>
</html>