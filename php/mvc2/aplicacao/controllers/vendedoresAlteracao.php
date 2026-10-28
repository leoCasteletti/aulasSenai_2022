<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Um bot que irá moderar e deixar a sua comunidade segura de um jeito fácil!">
  <title>Editar Pedido</title>
  <link rel="stylesheet" type="text/css" href="../views/alterar.css">
</head>

<body>
  <header class="cabecalho">
  <a href="../index.php">
    <img class="cabecalho-imagem" src="../views/senai.jpg" alt="Logo da Interface de Cadastro">
  </a>
    <nav class="cabecalho-menu">
      <a class="cabecalho-menu-item" href="../index.php#Cadastro_de_Clientes">Cadastro de Clientes</a>
      <a class="cabecalho-menu-item" href="../index.php#Cadastro_de_Produtos">Cadastro de Produtos</a>
      <a class="cabecalho-menu-item" href="../index.php#Cadastro_de_Vendedores">Cadastro de Vendedores</a>
      <a class="cabecalho-menu-item" href="../index.php#Cadastro_de_Pedidos">Cadastro Pedidos</a>
    </nav>
  </header>

  <main class="conteudo">
    <section class="conteudo-principal">
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Editar Pedido</h1>
      </div>
      <img class="conteudo-principal-imagem"src="../views/avatar.png" alt="Avatar Bunitin">
    </section>
  </main>

  <!-- Tabela de Produtos -->
  <main class="tabela">
    <section class="tabela-produtos">
      <table>
        <tr>  
            <th>ID</th> 
            <th>Nome</th>
            <th>Email</th> 
            <th>Data de Nascimento</th>
            <th>CPF</th> 
            <th>RG</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr><br>

      <!-- Iniciando Parte do Banco de Dados -->
      <?php
        // Credenciais para conectar com o Banco de Dados.
        $servername = "localhost";
        $database = "vendas_01";
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
        $sql = "SELECT * FROM cadastrovendedores where Vendedor_ID = $chave"; 
          
        // Executa o Comando SQL.  
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

        // loop para ler todos os registros
        $registro = mysqli_fetch_array($resultado);  
        echo "<form action='vendedoresAlteracaoUpdate.php' method='post'>";      
          echo "<tr>";
            echo "<input type='hidden'name='dados[]'value=".$registro['Vendedor_ID'].">";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_Nome']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_Sobrenome']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_Email']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_DataNascimento']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_CPF']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_RG']."></td>";       
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_Endereco']."></td>";  
            echo "<td><input type='text' name='dados[]'value=".$registro['Vendedor_Telefone']."></td>";  
          echo "</table>";
          echo "<input type='submit' value='Enviar formulário' class='enviar'>";
          echo "</form>";
            
        mysqli_close($conn);        
      ?>
      
    </section>
  </main>
  
  <footer class="rodape">
    <img class="rodape-imagem" src="../views/senai.jpg">
  </footer>

</body>
</html>