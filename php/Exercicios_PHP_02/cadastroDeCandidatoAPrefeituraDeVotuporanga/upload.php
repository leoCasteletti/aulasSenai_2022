<!DOCTYPE html>
<html>

<?php
    $file = $_FILES['foto'];
    $nomeFoto = $file['name'];

    move_uploaded_file($file['tmp_name'],$file['name']);

    include_once 'conectarUrna.php';

    $Candidato_Nome = $_POST['nome'];
    $Candidato_Numero = $_POST['numero'];

    $sql = "INSERT INTO candidato (Candidato_Nome, Candidato_Numero, Candidato_Foto) VALUES ('$Candidato_Nome', '$Candidato_Numero', '$nomeFoto')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>

    <meta http-equiv="refresh" content="0; URL='index.html'"/>
</html>

