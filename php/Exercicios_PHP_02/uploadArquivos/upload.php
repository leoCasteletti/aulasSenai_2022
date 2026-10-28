<?php


// $dir = "img/imagens/";

// Recebendo o arquivo multipart
$file = $_FILES["arquivo"];
$teste1 = $file["tmp_name"];
$teste2 = $file["name"];

echo $teste1;
echo "<br>";
echo $teste2;

// Move o arquivo da pasta temporaria de upload para a pasta de destino
if (move_uploaded_file($file["tpm_name"], "images/" .$file["name"])) {
    echo "<br>";
    echo "Arquivo enviado com sucesso!";
} else {
    echo "Erro, o arquivo não pode ser enviado.";
}
?>