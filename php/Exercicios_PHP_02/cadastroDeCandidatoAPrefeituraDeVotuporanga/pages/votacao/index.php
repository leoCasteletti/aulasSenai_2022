<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleição | SENAI VOTUPORANGA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <h1>Votação para os Candidatos</h1>

    <main>
        <form action="extratoVotacao.php" method="post" enctype="multipart/form-data">
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>

            <input class="botao" type="submit" value="Confirmar Candidato!">
        </form>
    </main>

</body>


</html>