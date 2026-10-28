<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Um bot que irá moderar e deixar a sua comunidade segura de um jeito fácil!">
  <title>Editar Pedido</title>
  <link rel="stylesheet" type="text/css" href="../../css/alterar.css">
</head>

<body>
  <header class="cabecalho">
  <a href="LandingPage-main/../../../index.php">
    <img class="cabecalho-imagem" src="../../images/senai.jpg" alt="Logo da Interface de Cadastro">
  </a>
    <nav class="cabecalho-menu">      
      <a class="cabecalho-menu-item" href="LandingPage-main/../../../index.php#Cadastro_de_Clientes">Cadastro de Clientes</a>
      <a class="cabecalho-menu-item" href="LandingPage-main/../../../index.php#Cadastro_de_Produtos">Cadastro de Produtos</a>
      <a class="cabecalho-menu-item" href="LandingPage-main/../../../index.php#Cadastro_de_Vendedores">Cadastro de Vendedores</a>
      <a class="cabecalho-menu-item" href="LandingPage-main/../../../index.php#Cadastro_de_Pedidos">Cadastro Pedidos</a>
    </nav>
  </header>

  <main class="conteudo">
    <section class="conteudo-principal">
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Editar Pedido</h1>
      </div>
      <img class="conteudo-principal-imagem"src="../../images/avatar.png" alt="Avatar Bunitin">
    </section>
  </main>

  <!-- Tabela de Pedidos -->
  <main class="tabela">
    <section class="tabela-pedidos">
      <table>
        <tr>      
          <th>Data de Emissão</th>
          <th>Hora de Emissão</th> 
          <th>Nota Fiscal</th>
          <th>Data de Saída</th> 
          <th>Hora de Saída</th>
          <th>Valor do Frete</th>
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
        $sql = "SELECT * FROM cadastropedidos where Pedido_ID = $chave"; 
          
        // Executa o Comando SQL.  
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

        // loop para ler todos os registros
        $registro = mysqli_fetch_array($resultado);  
        echo "<form action='salvar.php' method='post'>";      
          echo "<tr>";
            echo "<input type='hidden'name='dados[]'value=".$registro['Pedido_ID'].">";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_DataEmissao']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_HoraEmissao']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_NotaFiscal']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_DataSaida']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_HoraSaida']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_ValorFrete']."></td>";
            echo "<td><input type='text' name='dados[]'value=".$registro['Pedido_EmpresaFrete']."></td>";          
          echo "</table>";
          echo "<input type='submit' value='Enviar formulário' class='enviar'>";
          echo "</form>";
            
        mysqli_close($conn);        
      ?>
      
    </section>
  </main>
  
  <footer class="rodape">
    <img class="rodape-imagem" src="../../images/senai.jpg">
  </footer>

</body>
</html>