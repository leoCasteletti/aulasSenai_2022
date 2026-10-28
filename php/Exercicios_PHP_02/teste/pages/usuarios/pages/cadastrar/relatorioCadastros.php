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
    <h1>Dados Pessoais</h1>

    <table border="1" style="width: 50%">
        <tr> 
          <th>ID</th> 
          <th>Nome</th>
          <th>E-mail</th> 
          <th>Senha</th>
          <th>Celular</th>
          <th>Administrador?</th>
          <th>CPF / CNPJ</th>
          <th>Endereço</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th>Bairro</th>
          <th>CEP</th>
          <th>Executar</th>
        </tr><br>

    <?php
    include_once '../bancoDados/conectarBanco.php';

    // Comando SQL a ser Executado.
    $sql = "SELECT * FROM usuarios";

    // Executa o Comando SQL.
    $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
    
    // loop para ler todos os registros
    while ($registro = mysqli_fetch_array($resultado)){
      $Usuarios_id = $registro['Usuarios_id'];
      $Usuarios_nome = $registro['Usuarios_nome'];
      $Usuarios_email = $registro['Usuarios_email'];
      $Usuarios_senha = $registro['Usuarios_senha'];  
      $Usuarios_celular = $registro['Usuarios_celular'];
      $Usuarios_administrador = $registro['Usuarios_administrador'];
      $usuarios_cpfCNPJ = $registro['usuarios_cpfCNPJ'];
      $Usuarios_Endereco = $registro['Usuarios_Endereco'];   
      $Usuarios_Cidade = $registro['Usuarios_Cidade'];
      $Usuarios_ES = $registro['Usuarios_ES'];
      $Usuarios_bairro = $registro['Usuarios_bairro'];
      $Usuarios_cep = $registro['Usuarios_cep'];     
      
      echo "<tr>";
        echo "<td>".$Usuarios_id."</td>";
        echo "<td>".$Usuarios_nome."</td>";
        echo "<td>".$Usuarios_email."</td>";        
        echo "<td>".$Usuarios_senha."</td>";   
        echo "<td>".$Usuarios_celular."</td>";
        echo "<td>".$Usuarios_administrador."</td>";
        echo "<td>".$usuarios_cpfCNPJ."</td>";        
        echo "<td>".$Usuarios_Endereco."</td>";  
        echo "<td>".$Usuarios_Cidade."</td>"; 
        echo "<td>".$Usuarios_ES."</td>";
        echo "<td>".$Usuarios_bairro."</td>";
        echo "<td>".$Usuarios_cep."</td>"; 
        echo "<td> <form action='alterar/alterarCadastro.php' method='post'> <center> <input type='hidden' name='dado' value=".$Usuarios_id."> <input type=submit value='Alteração' ></form>";
        echo "<form action='excluirBanco.php' method='post'> <input type='hidden' name='dado' value=".$Usuarios_id."> <center> <input type=submit value='Exclusão' ></form></td>"; 
      echo "</tr>";      
    }
    echo "</table>"; 

    mysqli_close($conn);
    ?>

</body>


</html>