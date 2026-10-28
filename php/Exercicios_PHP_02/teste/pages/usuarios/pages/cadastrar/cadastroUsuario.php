<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

        <!-- Título da página (aparece na aba) -->
        <title>Cadastro</title>
    </head>

    <body>  

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadastro de Usuários</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form method='post' action='salvarCadastros.php'>
            <fieldset class="grupo">
            <legend><strong>Insira os seus dados pessoais</strong></legend><br>
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome:</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="campo">
                    <label for="email"><strong>E-mail:</strong></label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="campo">
                    <label for="celular"><strong>Celular:</strong></label>
                    <input type="tel" name="celular" id="celular" required>
                </div>

                <div class="campo">
                    <label for="cpf_cnpj"><strong>CPF ou CNPJ:</strong></label>
                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" required>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
            <legend><strong>Insira seus dados de localidade</strong></legend><br>
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="endereco"><strong>Endereço:</strong></label>
                    <textarea rows="1" style="width: 26em" id="endereco" name="endereco"></textarea>
                </div>

                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="campo">
                    <label for="cidade"><strong>Cidade:</strong></label>
                    <input type="text" name="cidade" id="cidade" required>
                </div>                

                <div class="campo">
                    <label for="bairro"><strong>Bairro:</strong></label>
                    <input type="text" name="bairro" id="bairro" required>
                </div>

                <div class="campo">
                    <label for="cep"><strong>CEP:</strong></label>
                    <input type="text" name="cep" id="cep" required>
                </div>

                <div class="campo">
                    <label for="estado"><strong>Estado:</strong></label>
                    <select name="estado" id="estado" required>
                        <option selected disabled value="">Estado</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>                        
                    </select>
                </div>
            </fieldset><br>

           

            <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label><strong>O usuário será administrador?</strong></label>
                <label>
                    <input type="radio" name="permissao" value="Y" checked>Não
                </label>
                <label>
                    <input type="radio" name="permissao" value="N">Sim
                </label>                
            </div><br>

            <fieldset class="grupo">
            <legend><strong>Cadastre sua senha</strong></legend><br>
                <div>            
                    <label for="senha">Senha (6 Caracteres Mínimos):</label>
                    <input type="password" id="senha" name="senha" minlength="6" required>
                </div>
            </fieldset><br>


            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit">Concluir Cadastro</button>                        

        </form>

    </body>

</html>