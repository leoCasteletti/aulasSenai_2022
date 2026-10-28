<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <table border="1" style="width: 50%">
        <tr> 
            <th>ID</th> 
            <th>Nome</th>
            <th>Endereço</th> 
            <th>Bairro</th>
            <th>Cidade</th> 
            <th>Estado</th>
            <th>CEP</th> 
        </tr>

        <?php
            $servername = "localhost";
            $databse = "banco01";
            $username = "root";
            $password = "";

            $campo = ["idCadastro", "Cad_Nome", "Cad_Endereco", "Cad_Bairro", "Cad_Cidade", "Cad_Estado", "Cad_CEP"];

            $i = 0;
            $sequencia = "";
            $comando = "";

            //Create Connection
            $conn = mysqli_connect($servername, $username, $password, $databse);

            //Check Connection
            if(!$conn){
                die("Fudeu, deu erro na conexão: " . mysqli_connect_error());
            }

            echo "Conexão com o banco de dados executada com <b>SUCESSO</b>. Mostraremos os seus dados abaixo:<br>";

            //Verifica a escikha de campos
            if(isset($_POST["dados"])){

                //Faz Lopp para os dados
                foreach($_POST["dados"] as $dados){
                    if($dados <> ""){
                        if($sequencia == "")
                            $sequencia = 1;
                        else
                            $comando = $comando . " and "; 

                            $comando = $comando . $campo[$i] ."="."'". $dados ."' ";
                            //echo "- " . $campo[$i] ."---". $dados ."<br>";  
                    }
                    $i++;
                }
            }
            else
            {
                echo "Nenhum Campo Selecionado";
            }

            $sql = "SELECT * FROM cadastro WHERE $comando";
            $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

            //Loop para Ler todos os registros
            while($registro = mysqli_fetch_array($resultado)){
                $idCadastro = $registro['idCadastro'];
                $Cad_Nome = $registro['Cad_Nome'];
                $Cad_Endereco = $registro['Cad_Endereco'];
                $Cad_Bairro = $registro['Cad_Bairro'];
                $Cad_Cidade = $registro['Cad_Cidade'];
                $Cad_Estado = $registro['Cad_Estado'];
                $Cad_CEP = $registro['Cad_CEP'];

                echo "<tr>";
                echo "<td>".$idCadastro."</td>";
                echo "<td>".$Cad_Nome."</td>";
                echo "<td>".$Cad_Endereco."</td>";
                echo "<td>".$Cad_Bairro."</td>";
                echo "<td>".$Cad_Cidade."</td>";
                echo "<td>".$Cad_Estado."</td>";
                echo "<td>".$Cad_CEP."</td>";
                echo "</tr>";
            }

            mysqli_close($conn);
            echo "</table>";
        ?>
    </body>
</html>