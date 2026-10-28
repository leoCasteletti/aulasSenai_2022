<?php

SESSION_start();
    $nusuarios = $_SESSION['quantidade'];
    $name = array ();
    $name[] = $nusuarios;

    $address = array ();
    $address[] = $nusuarios;

    $district = array ();
    $district[] = $nusuarios;

    $city = array ();
    $city[] = $nusuarios;

    $state = array ();
    $state[] = $nusuarios;

    $zip_code = array ();
    $zip_code[] = $nusuarios;

    $file = fopen('cad_001.data', 'a+'); // Escrevendo em um arquivo        
         
    for ($i = 1; $i <= $nusuarios; $i++){
        $name[$i] = $_POST [$i.'name'];
        $address[$i] = $_POST [$i.'address'];
        $district[$i] = $_POST [$i.'district'];
        $city[$i] = $_POST [$i.'city'];
        $state[$i] = $_POST [$i.'state'];
        $zip_code[$i] = $_POST [$i.'zip_code'];
            
        fprintf($file, 'Nome: '.$name[$i]);
        fprintf($file, 'Endereço: '.$address[$i]);
        fprintf($file, 'Bairro: '. $district[$i]);
        fprintf($file, 'Cidade: '. $city[$i]);
        fprintf($file, 'Estado: '. $state[$i]);
        fprintf($file, 'CEP: '. $zip_code[$i]);
    }
?>

<?php

// Iniciando Banco de Dados
    $nusuarios = $_SESSION['quantidade'];

    $servername = "localhost";
    $database = "banco01";
    $username = "root";
    $password = "";

    // Criar Conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Checar Conexão
    if (!$conn){
        die("Fudeu, deu erro na conexão: " . mysqli_connect_error());
    }

    echo "Conexão com o banco de dados foi estabelecida.<br>";

    for ($i = 1; $i <= $nusuarios; $i++){
        $sql = "INSERT INTO cadastro (idCadastro, 
                                        Cad_Nome, 
                                        Cad_Endereco, 
                                        Cad_Bairro, 
                                        Cad_Cidade, 
                                        Cad_Estado, 
                                        Cad_CEP) VALUES
                                            ('',
                                            '$name[$i]',
                                            '$address[$i]',
                                            '$district[$i]',
                                            '$city[$i]',
                                            '$state[$i]',
                                            '$zip_code[$i]')";
    

        if (mysqli_query($conn, $sql)){
            echo "<br> Dados de <b>".$name[$i]."</b> coletados.<br>";
        } else {
            echo "Deu ruim: " .  $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>

<html>
    <form method = "post" action = "conecta_banco.php">
    <br>
    <input type = "submit" name = "calcularbnt" value = "Confirmar"/>    
</html>