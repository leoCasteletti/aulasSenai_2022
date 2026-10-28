<!DOCTYPE html>
<html lang = "pt-BR">

    <table>
        <tr> 
          <th>ID</th> 
          <th>Nome</th>
          <th>Sobrenome</th> 
          <th>Gênero</th>
          <th>RG</th> 
          <th>Data de Nascimento</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>Email</th>
        </tr><br>

    <?php
        // Credenciais para conectar com o Banco de Dados.
        $servername = "localhost";
        $database = "aluguelimoveis";
        $username = "root";
        $password = "";

        // Abrindo o Banco.
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Comando SQL a ser Executado.
        $sql = "SELECT * FROM cliente";

        // Executa o Comando SQL.
        $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
            
        // loop para ler todos os registros
        while ($registro = mysqli_fetch_array($resultado)){
            $Cliente_ID = $registro['Cliente_ID'];
            $Cliente_Nome = $registro['Cliente_Nome'];
            $Cliente_Sobrenome = $registro['Cliente_Sobrenome'];
            $Cliente_Sexo = $registro['Cliente_Sexo'];
            $Cliente_RG = $registro['Cliente_RG'];
            $Cliente_DataNascimento = $registro['Cliente_DataNascimento'];
            $Cliente_CPF = $registro['Cliente_CPF'];
            $Cliente_Telefone = $registro['Cliente_Telefone'];
            $Cliente_Email = $registro['Cliente_Email'];
            
            echo "<tr>";
            echo "<td>".$Cliente_ID."</td>";
            echo "<td>".$Cliente_Nome."</td>";
            echo "<td>".$Cliente_Sobrenome."</td>";
            echo "<td>".$Cliente_Sexo."</td>";
            echo "<td>".$Cliente_RG."</td>";
            echo "<td>".$Cliente_DataNascimento."</td>";
            echo "<td>".$Cliente_CPF."</td>";
            echo "<td>".$Cliente_Telefone."</td>";
            echo "<td>".$Cliente_Email."</td>";
            echo "<td> <form action='alterarBanco.php' method='post'> <center> <input type='hidden' name='dado' value=".$Cliente_ID."> <input type=submit value='Alterar' ></form>";
            echo "<form action='pages/clientes/excluir.php' method='post'> <input type='hidden' name='dado' value=".$Cliente_ID."> <center> <input type=submit value='Excluir' ></form></td>";
            echo "</tr>";
        }
        
        mysqli_close($conn);
    ?>
    </table>
</html>