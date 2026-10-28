<!doctype html>
<html>  

    <div>   
        <h1 id="titulo">Cadastro de Usuários</h1>
        <p id="subtitulo">Complete suas informações</p><br>
    </div>

    <?php
        $servername = "localhost";
        $database = "projetoGaia";
        $username = "root";
        $password = "";

        $chave = $_POST["dado"];

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("falha na conexão: " . mysqli_connect_error());
        }       

        $sql = "SELECT * FROM usuarios where Usuarios_ID = $chave"; 
          
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

        // loop para ler todos os registros
        $registro = mysqli_fetch_array($resultado);  
        echo "<form action='salvar.php' method='post'>";   
        
        echo "<input type='hidden'name='dados[]'value=".$registro['Usuarios_id'].">";

        echo "<fieldset class='grupo'>";
        echo "<legend><strong>Altere os Dados Pessoas</strong></legend><br>";
            echo "<div class='campo'>";
                echo "<label for='nome'><strong>Nome:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_nome'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='email'><strong>E-mail:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_email'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='celular'><strong>Celular:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_celular'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='cpf_cnpj'><strong>E-mail:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['usuarios_cpfCNPJ'].">";
            echo "</div>";
        echo "</fieldset>";

        echo "<fieldset class='grupo'>";
        echo "<legend><strong>Alterar Localização</strong></legend><br>";
            echo "<div class='campo'>";
                echo "<label for='endereco'><strong>Endereço:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_Endereco'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='cidade'><strong>Cidade:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_Cidade'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='cidade'><strong>Bairro:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_bairro'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='cidade'><strong>CEP:</strong></label>";
                echo "<input type='text' name='dados[]'value=".$registro['Usuarios_cep'].">";
            echo "</div>";

            echo "<div class='campo'>";
                echo "<label for='estado'><strong>Estado:</strong></label>";
                echo "<select name='estado' id='estado' required>";
                    echo "<option selected disabled value=''>".$registro['Usuarios_ES']."</option>";
                    echo "<option value='AC'>AC</option>";
                    echo "<option value='AL'>AL</option>";
                    echo "<option value='AP'>AP</option>";
                    echo "<option value='AM'>AM</option>";
                    echo "<option value='BA'>BA</option>";
                    echo "<option value='CE'>CE</option>";
                    echo "<option value='ES'>ES</option>";
                    echo "<option value='GO'>GO</option>";
                    echo "<option value='MA'>MA</option>";
                    echo "<option value='MT'>MT</option>";
                    echo "<option value='MS'>MS</option>";
                    echo "<option value='MG'>MG</option>";
                    echo "<option value='PA'>PA</option>";
                    echo "<option value='PB'>PB</option>";
                    echo "<option value='PR'>PR</option>";
                    echo "<option value='PE'>PE</option>";
                    echo "<option value='PI'>PI</option>";
                    echo "<option value='RJ'>RJ</option>";
                    echo "<option value='RN'>RN</option>";
                    echo "<option value='RS'>RS</option>";
                    echo "<option value='RO'>RO</option>";
                    echo "<option value='RR'>RR</option>";
                    echo "<option value='SC'>SC</option>";
                    echo "<option value='SP'>SP</option>";
                    echo "<option value='SE'>SE</option>";
                    echo "<option value='TO'>TO</option>";                       
                echo "</select>";
            echo "</div></fieldset><br>";

            echo "<div class='campo'>";
                echo "<label><strong>O Usuário Será Administrador?</strong></label>";
                echo "<label>";
                    echo "<input type='radio' name='dados[]'value=".$registro['Usuarios_administrador']."> SIM";
                echo "</label>";
                echo "<label>";
                    echo "<input type='radio' name='dados[]'value=".$registro['Usuarios_administrador']."> NÃO";
                echo "</label>";
            echo "</div><br>";

            echo "<fieldset class='grupo'>";
            echo "<legend><strong>Cadastre sua senha</strong></legend><br>";
                echo "<div>";         
                    echo "<label for='senha'>Senha (6 Caracteres Mínimos):</label>";
                    echo "<input type='text' id='senha' name='dados[]'value=".$registro['Usuarios_senha']." minlength='6' required>";
                echo "</div>";
            echo "</fieldset><br>";

          echo "<input type='submit' value='Enviar formulário' class='enviar'>";
          echo "</form>";
            
        mysqli_close($conn);        
      ?>
      
    </section>
  </main>

</body>
</html>