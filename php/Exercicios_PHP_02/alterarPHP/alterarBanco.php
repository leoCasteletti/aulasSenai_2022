<?php
    // Credenciais para conectar com o Banco de Dados.
    $servername = "localhost";
    $database = "aluguelimoveis";
    $username = "root";
    $password = "";

    $chave = $_POST["dado"];

    // Abrindo o Banco.
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar Conexão
    if (!$conn) {
        die("falha na conexão: " . mysqli_connect_error());
    }       

    // Comando SQL a ser Executado.
    $sql = "SELECT * FROM cliente where Cliente_ID = $chave"; 
          
    // Executa o Comando SQL.  
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    // loop para ler todos os registros
    $registro = mysqli_fetch_array($resultado);  
        echo "<form action='salvarAlteracaoBanco.php' method='post'>";      
        echo "<tr>";
        echo "<input type='hidden'name='dados[]'value=".$registro['Cliente_ID'].">";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_Nome']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_Sobrenome']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_Sexo']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_RG']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_DataNascimento']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_CPF']."></td>";
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_Telefone']."></td>";          
        echo "<td><input type='text' name='dados[]'value=".$registro['Cliente_Email']."></td>"; 
        echo "</table>";
        echo "<input type='submit' value='Enviar formulário' class='enviar'>";
        echo "</form>";
            
    mysqli_close($conn);        
?>