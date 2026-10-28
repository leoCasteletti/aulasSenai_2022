<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Um bot que irá moderar e deixar a sua comunidade segura de um jeito fácil!">
  <title>Sistema de Cadastro</title>
  <link rel="stylesheet" type="text/css" href="views/style.css">
</head>

<body>
  <header class="cabecalho">
    <a href="index.php">
      <img class="cabecalho-imagem" src="views/senai.jpg" alt="Logo da Interface de Cadastro">
    </a>
    <nav class="cabecalho-menu">      
      <a class="cabecalho-menu-item" href="index.php#Cadastro_de_Clientes">Cadastro de Clientes</a>
      <a class="cabecalho-menu-item" href="index.php#Cadastro_de_Produtos">Cadastro de Produtos</a>
      <a class="cabecalho-menu-item" href="index.php#Cadastro_de_Vendedores">Cadastro de Vendedores</a>
      <a class="cabecalho-menu-item" href="index.php#Cadastro_de_Pedidos">Cadastro Pedidos</a>
    </nav>
  </header>

  <main class="conteudo">
    <section class="conteudo-principal">
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Sistema de Cadastro</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Efetue o cadastro de cliente, produto, vendedor e/ou pedidos da sua empresa.</h2>                 
      </div>
      <img class="conteudo-principal-imagem"src="views/avatar.png" alt="Avatar Bunitin">
    </section>

    <section class="conteudo-secundario">
      <h3 class="conteudo-secundario-titulo">O que esse sistema faz por você?</h3>
      <p class="conteudo-secundario-paragrafo">1. Exibe os dados que há no <strong>banco de dados</strong> na tela para o usuário.</p>
      <p class="conteudo-secundario-paragrafo">2. Dá ao usuário a possibilidade de <strong>cadastrar com diversos menus (cliente, produto, vendedor e pedido). </strong></p>
      <p class="conteudo-secundario-paragrafo">3. <strong>Exibe</strong> o resultado atualizado na tela, após inserir os dados.</p>
    </section>
  </main>

  <!-- Tabela de Clientes -->
  <main class="tabela">
    <section class="tabela-clientes">
    <a name="Cadastro_de_Clientes"></a>
      <h3 class="tabela-clientes-titulo">Tabela de Cadastro de Clientes</h3>
            
      <table>
      <form method='post' action='controllers/clientes.php'>
        <tr>
          <th>Nome: </th>
          <th><input type = "text" name = "nomeCliente" size = "20" required></th>
          <th>Sobrenome: </th>
          <th><input type = "text" name = "sobrenomeCliente" size = "20" required></th>
          <th>RG: </th>
          <th><input type = "text" name = "rgCliente" size = "20" placeholder = "Somente Números" required></th>
          <th>CPF: </th>
          <th><input type = "text" name = "cpfCliente" size = "20" placeholder = "Somente Números" required></th>
        </tr>
        <tr>  
          <th>Data de Nascimento: </th>
          <th><input type = 'text' name = 'dataNascimentoCliente' size = '20' placeholder = 'ex. 26/02/2004' required></th>
          <th>Gênero: </th>
          <th><input type = 'text' name = 'generoCliente' size = '20' placeholder = 'Masculuino / Feminino' required></th>
          <th>Endereço: </th>
          <th><input type = 'text' name = 'enderecoCliente' size = '20' required></th>
          <th>Telefone: </th>
          <th><input type = 'text' name = 'telefoneCliente' size = '20' placeholder = 'Somente Números C/ DD' required></th>
        </tr>        
      </table>

      <!-- Botão de Enviar o Cadastro -->
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <button class="tabela-clientes-botao">Cadastrar</button>
      </form>    
      
      <table>
        <tr> 
          <th>ID</th> 
          <th>Nome</th>
          <th>Sobrenome</th> 
          <th>RG</th>
          <th>CPF</th> 
          <th>Data de Nascimento</th>
          <th>Gênero</th>
          <th>Endereço</th>
          <th>Telefone</th>
        </tr><br>

        <!-- Iniciando Parte do Banco de Dados -->
        <?php
          // Credenciais para conectar com o Banco de Dados.
          $servername = "localhost";
          $databse = "vendas_01";
          $username = "root";
          $password = "";

          // Abrindo o Banco.
          $conn = mysqli_connect($servername, $username, $password, $databse);

          // Comando SQL a ser Executado.
          $sql = "SELECT * FROM cadastroclientes";

          // Executa o Comando SQL.
          $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
          
          // loop para ler todos os registros
          while ($registro = mysqli_fetch_array($resultado)){
            $Cliente_ID = $registro['Cliente_ID'];
            $Cliente_Nome = $registro['Cliente_Nome'];
            $Cliente_Sobrenome = $registro['Cliente_Sobrenome'];
            $Cliente_RG = $registro['Cliente_RG'];
            $Cliente_CPF = $registro['Cliente_CPF'];
            $Cliente_DataNascimento = $registro['Cliente_DataNascimento'];
            $Cliente_Genero = $registro['Cliente_Genero'];
            $Cliente_Endereco = $registro['Cliente_Endereco'];
            $Cliente_Telefone = $registro['Cliente_Telefone'];
          
            echo "<tr>";
              echo "<td>".$Cliente_ID."</td>";
              echo "<td>".$Cliente_Nome."</td>";
              echo "<td>".$Cliente_Sobrenome."</td>";
              echo "<td>".$Cliente_RG."</td>";
              echo "<td>".$Cliente_CPF."</td>";
              echo "<td>".$Cliente_DataNascimento."</td>";
              echo "<td>".$Cliente_Genero."</td>";
              echo "<td>".$Cliente_Endereco."</td>";
              echo "<td>".$Cliente_Telefone."</td>";
              echo "<td> <form action='controllers/clientesAlteracao.php' method='post'> <center> <input type='hidden' name='dado' value=".$Cliente_ID."> <input type=submit value='Alterar' ></form>";
              echo "<form action='controllers/clientesExclusao.php' method='post'> <input type='hidden' name='dado' value=".$Cliente_ID."> <center> <input type=submit value='Excluir' ></form></td>";
            echo "</tr>";
          }
          mysqli_close($conn);
        ?>
      </table>     
    </section>

    <!-- Tabela de Produtos -->
    <section class="tabela-produtos">
    <a name="Cadastro_de_Produtos"></a>
      <h3 class="tabela-produtos-titulo">Tabela de Cadastro de Produtos</h3>
      
      <table>
      <form action='controllers/produtos.php' method='post'>
        <tr>
          <th>Código: </th>
          <th><input type = 'text' name = 'codigoProduto' size = '20' placeholder = 'Somente Números' required></th>
          <th>Fornecedor: </th>
          <th><input type = 'text' name = 'fornecedorProduto' size = '20' required></th>
          <th>Descrição: </th>
          <th><textarea rows = "1" style = "width: 10em" name = "decricaoProduto" placeholder = "*Opcional"></textarea></th>
        </tr>
        <tr>
          <th>Estoque: </th>
          <th><input type = 'text' name = 'estoqueProduto' size = '20' placeholder = 'UN / CX' required></th>          
          <th>Preço de Custo: </th>
          <th><input type = 'text' name = 'precoCustoProduto' site = '10 'placeholder='R$' required></th>
          <th>Preço de venda: </th>
          <th><input type = 'text' name = 'precoVendaProduto' size = '10' placeholder = 'R$' required></th>
        </tr>        
      </table>

      <!-- Botão de Enviar o Cadastro -->
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">      
        <button class="tabela-clientes-botao">Cadastrar</button>
      </form>
      
      <table>
        <tr> 
          <th>ID</th> 
          <th>Código</th>
          <th>Fornecedor</th> 
          <th>Descrição</th>
          <th>Estoque</th> 
          <th>Preço de Custo</th>
          <th>Preço de Venda</th>
        </tr><br>
        
        <!-- Iniciando Parte do Banco de Dados -->
        <?php
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
          
          // loop para ler todos os registros
          while ($registro = mysqli_fetch_array($resultado)){
            $Produto_ID = $registro['Produto_ID'];
            $Produto_Codigo = $registro['Produto_Codigo'];
            $Produto_Fornecedor = $registro['Produto_Fornecedor'];
            $Produto_Descricao = $registro['Produto_Descricao'];
            $Produto_Estoque = $registro['Produto_Estoque'];
            $Produto_PrecoCusto = $registro['Produto_PrecoCusto'];
            $Produto_PrecoVenda = $registro['Produto_PrecoVenda'];
          
            echo "<tr>";
              echo "<td>".$Produto_ID."</td>";
              echo "<td>".$Produto_Codigo."</td>";
              echo "<td>".$Produto_Fornecedor."</td>";
              echo "<td>".$Produto_Descricao."</td>";
              echo "<td>".$Produto_Estoque."</td>";
              echo "<td>".'R$ '.$Produto_PrecoCusto."</td>";
              echo "<td>".'R$ '.$Produto_PrecoVenda."</td>";
              echo "<td> <form action='controllers/produtosAlteracao.php' method='post'> <center> <input type='hidden' name='dado' value=".$Produto_ID."> <input type=submit value='Alterar' ></form>";
              echo "<form action='controllers/produtosExclusao.php' method='post'> <input type='hidden' name='dado' value=".$Produto_ID."> <center> <input type=submit value='Excluir' ></form></td>";
            echo "</tr>";
          }
          mysqli_close($conn);
        ?>
      </table> 
    </section>

    <!-- Tabela de Vendedores -->
    <section class="tabela-vendedores">
    <a name="Cadastro_de_Vendedores"></a>
      <h3 class="tabela-vendedores-titulo">Tabela de Cadastro de Vendedores</h3>
      
      <table>
      <form action='controllers/vendedores.php' method='post'>
        <tr>
          <th>Nome: </th>
          <th><input type = 'text' name = 'nomeVendedor' size = '20' required></th>
          <th>Sobrenome: </th>
          <th><input type = 'text' name = 'sobrenomeVendedor' size = '20' required></th>
          <th>Email: </th>
          <th><input type = 'text' name = 'emailVendedor' size = '20' required></th>
          <th>Data de Nascimento: </th>
          <th><input type = 'text' name = 'dataNascimentoVendedor' size = '20' placeholder = 'ex. 26/02/2004' required></th>
        </tr>
        <tr>  
          <th>CPF: </th>
          <th><input type = 'text' name = 'cpfVendedor' size = '20' placeholder = 'Somente Números' required></th>
          <th>RG: </th>
          <th><input type = 'text' name = 'rgVendedor' size = '20' placeholder = 'Somente Números' required></th>
          <th>Endereço: </th>
          <th><input type = 'text' name = 'enderecoVendedor' size = '20' required></th>
          <th>Telefone: </th>
          <th><input type = 'text' name = 'telefoneVendedor' size = '20' placeholder = 'Somente Números C/ DD' required></th>
        </tr>        
      </table>

      <!-- Botão de Enviar o Cadastro -->
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">      
        <button class="controllers/vendedores.php">Cadastrar</button>
      </form>

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
          $databse = "vendas_01";
          $username = "root";
          $password = "";

          // Abrindo o Banco.
          $conn = mysqli_connect($servername, $username, $password, $databse);

          // Comando SQL a ser Executado.
          $sql = "SELECT * FROM cadastrovendedores";

          // Executa o Comando SQL.
          $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
          
          // loop para ler todos os registros
          while ($registro = mysqli_fetch_array($resultado)){
            $Vendedor_ID = $registro['Vendedor_ID'];
            $Vendedor_Nome = $registro['Vendedor_Nome'];
            $Vendedor_Sobrenome = $registro['Vendedor_Sobrenome'];
            $Vendedor_Email = $registro['Vendedor_Email'];
            $Vendedor_DataNascimento = $registro['Vendedor_DataNascimento'];
            $Vendedor_CPF = $registro['Vendedor_CPF'];
            $Vendedor_RG = $registro['Vendedor_RG'];
            $Vendedor_Endereco = $registro['Vendedor_Endereco'];
            $Vendedor_Telefone = $registro['Vendedor_Telefone'];
          
            echo "<tr>";
              echo "<td>".$Vendedor_ID."</td>";
              echo "<td>".$Vendedor_Nome."</td>";
              echo "<td>".$Vendedor_Sobrenome."</td>";
              echo "<td>".$Vendedor_Email."</td>";
              echo "<td>".$Vendedor_DataNascimento."</td>";
              echo "<td>".$Vendedor_CPF."</td>";
              echo "<td>".$Vendedor_RG."</td>";
              echo "<td>".$Vendedor_Endereco."</td>";
              echo "<td>".$Vendedor_Telefone."</td>";
              echo "<td> <form action='controllers/vendedoresAlteracao.php' method='post'> <center> <input type='hidden' name='dado' value=".$Vendedor_ID."> <input type=submit value='Alterar' ></form>";
              echo "<form action='controllers/vendedoresExclusao.php' method='post'> <input type='hidden' name='dado' value=".$Vendedor_ID."> <center> <input type=submit value='Excluir' ></form></td>";
            echo "</tr>";
          }
          mysqli_close($conn);
        ?>
      </table> 
    </section>

    <!-- Tabela de Pedidos -->
    <section class="tabela-pedidos">
    <a name="Cadastro_de_Pedidos"></a>
      <h3 class="tabela-pedidos-titulo">Tabela de Cadastro de Pedidos</h3>
      
      <table>
      <form action='controllers/pedidos.php' method='post'>
        <tr>
          <th>Data de Emissão: </th>
          <th><input type = 'text' name = 'dataEmissaoPedido' placeholder='ex. 26/02/2004' required></th>
          <th>Hora de Emissão: </th>
          <th><input type = 'time' name = 'horaEmissaoPedido' required></th>
          <th>Nota Fiscal: </th>
          <th><input type = 'text' name = 'notafiscalPedido' placeholder = 'Somente Números' required></th>
        </tr>
        <tr>  
          <th>Data de Saída: </th>
          <th><input type = 'text' name = 'dataSaidaPedido' placeholder='ex. 26/02/2004' required></th>
          <th>Hora de Saída: </th>
          <th><input type = 'time' name = 'horaSaidaPedido' required></th>
          <th>Valor do Frete: </th>
          <th><input type = 'text' name = 'valorFretePedido' placeholder = 'R$' required></th>
        </tr>              
      </table>

      <!-- Botão de Enviar o Cadastro -->
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">      
        <button class="tabela-clientes-botao">Cadastrar</button>
      </form>

       <table>
        <tr> 
          <th>ID</th> 
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
          $databse = "vendas_01";
          $username = "root";
          $password = "";

          // Abrindo o Banco.
          $conn = mysqli_connect($servername, $username, $password, $databse);

          // Comando SQL a ser Executado.
          $sql = "SELECT * FROM cadastropedidos";

          // Executa o Comando SQL.
          $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
          
          // loop para ler todos os registros
          while ($registro = mysqli_fetch_array($resultado)){
            $Pedido_ID = $registro['Pedido_ID'];
            $Pedido_DataEmissao = $registro['Pedido_DataEmissao'];
            $Pedido_HoraEmissao = $registro['Pedido_HoraEmissao'];
            $Pedido_NotaFiscal = $registro['Pedido_NotaFiscal'];
            $Pedido_DataSaida = $registro['Pedido_DataSaida'];
            $Pedido_HoraSaida = $registro['Pedido_HoraSaida'];
            $Pedido_ValorFrete = $registro['Pedido_ValorFrete'];
          
            echo "<tr>";
              echo "<td>".$Pedido_ID."</td>";
              echo "<td>".$Pedido_DataEmissao."</td>";
              echo "<td>".$Pedido_HoraEmissao."</td>";
              echo "<td>".$Pedido_NotaFiscal."</td>";
              echo "<td>".$Pedido_DataSaida."</td>";
              echo "<td>".$Pedido_HoraSaida."</td>";
              echo "<td>".'R$ '.$Pedido_ValorFrete."</td>";
              echo "<td> <form action='controllers/pedidosAlteracao.php' method='post'> <center> <input type='hidden' name='dado' value=".$Pedido_ID."> <input type=submit value='Alterar' ></form>";
              echo "<form action='controllers/pedidosExclusao.php' method='post'> <input type='hidden' name='dado' value=".$Pedido_ID."> <center> <input type=submit value='Excluir' ></form>";
              echo "<form action='controllers/produtosEscolher.php' method='post'> <input type='hidden' name='dado' value=".$Pedido_ID."> <center> <input type=submit value='Cadastrar Item' ></form></td>";
            echo "</tr>";
          }
          mysqli_close($conn);
        ?>
      </table> 
    </section>

    <!-- Tabela de Itens Por Pedidos -->
    <section class="tabela-pedidos">
    <a name="Cadastro_de_Pedidos"></a>
      <h3 class="tabela-pedidos-titulo">Tabela de Itens por Pedidos</h3>
      
      <table>
        <tr> 
          <th>ID</th> 
          <th>ID Produto</th>
          <th>ID Pedido</th> 
          <th>Quantidade</th>
          <th>R$ Unitário</th> 
        </tr><br>
        
        <!-- Iniciando Parte do Banco de Dados -->
        <?php
          // Credenciais para conectar com o Banco de Dados.
          $servername = "localhost";
          $databse = "vendas_01";
          $username = "root";
          $password = "";

          // Abrindo o Banco.
          $conn = mysqli_connect($servername, $username, $password, $databse);

          // Comando SQL a ser Executado.
          $sql = "SELECT * FROM itenspedido";

          // Executa o Comando SQL.
          $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");
          
          // loop para ler todos os registros
          while ($registro = mysqli_fetch_array($resultado)){
            $itensPedido_ID = $registro['ItensPedido_ID'];
            $Produto_ID = $registro['Produto_ID'];
            $Pedido_ID = $registro['Pedido_ID'];
            $Quantidade = $registro['Quantidade'];
            $ValorUnitario = $registro['ValorUnitario'];
          
            echo "<tr>";
              echo "<td>".$itensPedido_ID."</td>";
              echo "<td>".$Produto_ID."</td>";
              echo "<td>".$Pedido_ID."</td>";
              echo "<td>".$Quantidade." UN"."</td>";
              echo "<td>"."R$ ".$ValorUnitario."</td>";
            echo "</tr>";
          }
          mysqli_close($conn);
        ?>
      </table> 
    </section>
  </main>

  <footer class="rodape">
    <img class="rodape-imagem" src="views/senai.jpg">
  </footer>
</body>

</html>