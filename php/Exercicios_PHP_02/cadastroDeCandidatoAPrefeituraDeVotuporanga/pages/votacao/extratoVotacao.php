<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleição | SENAI VOTUPORANGA</title>
    <link rel="stylesheet" type="text/css" href="votacao/style.css">
</head>


<body>
    <h1>Extrato do Resultado Votado</h1>

    <table>
        <tr> 
          <th>ID</th> 
          <th>Nome</th>
          <th>Numero</th> 
          <th>Foto</th>
          <th>Número Escolhido</th>
        </tr><br>

    <?php
    include_once '../../conectarBanco.php';

    $numeroEscolhido = $_POST['numero'];

    // Comando SQL a ser Executado.
    $sql = "SELECT * FROM candidato WHERE Candidato_ID = $numeroEscolhido";

    // Executa o Comando SQL.
    $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
    
    // loop para ler todos os registros
    while ($registro = mysqli_fetch_array($resultado)){
      $Candidato_ID = $registro['Candidato_ID'];
      $Candidato_Nome = $registro['Candidato_Nome'];
      $Candidato_Numero = $registro['Candidato_Numero'];
      $Candidato_Foto = $registro['Candidato_Foto'];    
      
      echo "<tr>";
        echo "<td>".$Candidato_ID."</td>";
        echo "<td>".$Candidato_Nome."</td>";
        echo "<td>".$Candidato_Numero."</td>";        
        echo "<td>".$numeroEscolhido."</td>";   
        echo "<td><img src='../../images/$Candidato_Foto' width='72' height='72'></td>";    
      echo "</tr>";      
    }
    echo "</table>";    

    echo "<main>";
      echo "<form action='registro_votacao.php' method='post' enctype='multipart/form-data'>";
      echo "<input class='botao' type='submit' value='Confirmar Voto!'>";
      echo "<input type='hidden' name='Candidato_Numero' value='$Candidato_Numero'>";
      echo "</form>";
    echo "</main>";

    mysqli_close($conn);
    ?>

</body>


</html>