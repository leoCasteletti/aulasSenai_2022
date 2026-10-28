<html>
    <head>
        <tilte>Relatório<br><br></tilte>
    <head>
<body>
    <form method = "post" action = "atividadeVetores.php">
    
    <?php
    SESSION_start();
        $ncasos = $_SESSION['quantidade'];
        $qtd_cobaia = array ();
        $qtd_cobaia[] = $ncasos;

        $qtd_tipo = array ();
        $qtd_tipo[] = $ncasos;
        
        for ($i = 1; $i <= $ncasos; $i++){

          $qtd_cobaia[$i] = $_POST [$i.'quantidadecobaias'];
          $qtd_tipo[$i] = $_POST [$i.'TipoCobaias'];
          
          echo "<br>";
          echo "dados -> ",  $i , "  " , $qtd_cobaia[$i], "   ", $qtd_tipo[$i] ;
        }

        
    ?>
        <input type = "submit" name = "calcularbnt" value = "Enviar Relatório" />
    </form>
</body>
</html>