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

  <!-- Tabela de Clientes -->
  <main class="tabela">
    <section class="tabela-clientes">
    <a name="Cadastro_de_Clientes"></a>
      <h3 class="tabela-clientes-titulo">Tabela de Cadastro de Itens Por Pedido</h3>
      
      <?php
        echo "<table>";        
        echo "<form action='produtos.php' method='post'>";
          echo "<tr>";
            echo "<th>ID do Pedido: </th>";  
                  $idPedido = $_POST["dado"]; 
                  echo "<td>".$idPedido."</td>";                       
            
            echo "<th>ID do Produto: </th>";              
                
            // Credenciais para conectar com o Banco de Dados.
            $servername = "localhost";
            $databse = "vendas_01";
            $username = "root";
            $password = "";
    
            // Abrindo o Banco.
            $conn = mysqli_connect($servername, $username, $password, $databse);
    
            // Comando SQL a ser Executado.
            $sql = "SELECT * FROM cadastroprodutos";
    
            // Executa o Comando SQL.
            $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
                
            echo "<th><select name = 'produto'>";
    
            // loop para ler todos os registros
            while ($registro = mysqli_fetch_array($resultado)){   
                $Produto_ID = $registro['Produto_ID'];          
                $Produto_Descricao = $registro['Produto_Descricao'];            

                echo "<option value = '$Produto_ID'>".$Produto_Descricao."'</option>";
                
        }
        echo "</select></th>";
                
        mysqli_close($conn);
        echo "<input type='hidden' name='dado' value='".$idPedido."'>";
      ?>
      
                
          <th>Quantidade do Produto: </th>
          <th><input type = "text" name = "quantidadeProduto" size = "20" placeholder = "Somente Números" required></th>
          <th>R$ Unitário: </th>
          <th><input type = "text" name = "valorUnitario" size = "20" placeholder = "Somente Números" required></th>
        </tr>      
    </table>  
      

      <!-- Botão de Enviar o Cadastro -->
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <button class="tabela-clientes-botao">Cadastrar</button>
      </form>  
    </main>
  
  <footer class="rodape">
    <img class="rodape-imagem" src="../views/senai.jpg">
  </footer>

</body>
</html>