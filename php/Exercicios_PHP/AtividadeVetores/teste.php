<html>
    <head>
        <tilte>Atividade - Vetores<br><br></tilte>
    <head>
<body>
    <form method = "post" action = "atividadeVetores.php">
    
    <?php
    SESSION_start();
        $ncasos = $_POST ['ncasos'];
        $_SESSION ['quantidade'] = $ncasos;

            for ($i = 1; $i <= $ncasos; $i++){
            echo "Quantidade de Cobaias:";
            echo "<input type = 'text' name = ' ".$i."quantidadecobaias' size = '5' />";

            echo "<br>Tipo de Cobaia:";
            echo "<select name = ' ".$i."TipoCobaias'>";
                echo "<option value = 'Ratos'>Selecionar Somente Ratos</option>";
                echo "<option value = 'Sapos'>Selecionar Somente Sapos</option>";
                echo "<option value = 'Coelhos'>Selecionar Somente Coelhos</option>";
            echo "</select>";
            
            echo "<br><br>";

        }
    ?>
        <input type = "submit" name = "calcularbnt" value = "Enviar Relatório" />
    </form>
</body>
</html>