<?php
    $file = fopen('cad_001.data', 'a+'); // Escrevendo em um arquivo           
    
        $placa = $_POST['placaVeiculo'];
        $renavam = $_POST['renavamVeiculo'];
        $marca = $_POST['marcaVeiculo'];
        $cor = $_POST['corVeiculo'];
        $chassi = $_POST['chassiVeiculo'];
            
        fprintf($file, 'Placa do Veículo: '.$placa);
        fprintf($file, 'Renavam do Veículo: '.$renavam);
        fprintf($file, 'Marca do Veículo: '. $marca);
        fprintf($file, 'Cor do Veículo: '. $cor);
        fprintf($file, 'Chassi do Veículo: '. $chassi); 
?>

<?php

// Iniciando Banco de Dados
    $servername = "localhost";
    $database = "db_cadastroveicular";
    $username = "root";
    $password = "";

    // Criar Conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Checar Conexão
    if (!$conn){
        die("Fudeu, deu erro na conexão: " . mysqli_connect_error());
    }

    //echo "Conexão com o banco de dados foi estabelecida.<br>";

        $sql = "INSERT INTO cadastrar_veiculo (Veiculo_ID, 
                                        Veiculo_Placa, 
                                        Veiculo_Renavam, 
                                        Veiculo_Marca, 
                                        Veiculo_Cor, 
                                        Veiculo_Chassi) VALUES
                                            ('',
                                            '$placa',
                                            '$renavam',
                                            '$marca',
                                            '$cor',
                                            '$chassi')";
    

        if (mysqli_query($conn, $sql)){
            echo "<br> Dados do Veículo Coletado.";
        } else {
            echo "Deu ruim: " .  $sql . "<br>" . mysqli_error($conn);        
        }
    

    mysqli_close($conn);
?>

<html>
    <form method = "post" action = "pesquisaSomenteUm.php"><br>
    <input type = "submit" name = "enviarRelatorio" value = "Exibir Relatório de Cadastros"/>    
</html>