<!DOCTYPE html>
    <html lang = "pt-br">
        <meta charset="UTF-8">
    <body>
        <form method = "post" action = "enviarRelatorio.php">

    <?php  
        echo "<table border='0.5' style='width: 20%'>";

        echo "<tr>"; 
            echo "<th>Placa do Veículo</th>";
            echo "<th><input type = 'text' name = 'placaVeiculo' size = '27' required></th>";
        echo "</tr>"; 
         
        echo "<tr>"; 
            echo "<th>Renavam do Veículo</th>";
            echo "<th><input type = 'text' name = 'renavamVeiculo' size = '27' required></th>";
        echo "</tr>"; 

        echo "<tr>"; 
            echo "<th>Marca do Veículo</th>";
            echo "<th><input type = 'text' name = 'marcaVeiculo' size = '27' required></th>";
        echo "</tr>"; 

        echo "<tr>"; 
            echo "<th>Cor do Veículo</th>";
            echo "<th><input type = 'text' name = 'corVeiculo' size = '27' required></th>";
        echo "</tr>"; 

        echo "<tr>"; 
            echo "<th>Chassi do Veículo</th>";
            echo "<th><input type = 'text' name = 'chassiVeiculo' size = '27' required></th>";
        echo "</tr>";

        echo "</table><br>";
        
    ?> 
        <input type = "submit" name = "enviarSolicitacao" value = "Enviar Solicitação de Registro" />

        </form>
    </body>
</html>