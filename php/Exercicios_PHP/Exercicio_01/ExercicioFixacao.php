<html>
    <body>
        <form method = "post" action = "EnviarRelatorio.php">
        
        <?php
        SESSION_start();
            echo "<table border='1' style='width: 45%'>";
                echo "<tr>"; 
                    echo "<th>Nome</th>";
                    echo "<th>Endereço</th>"; 
                    echo "<th>Bairro</th>";
                    echo "<th>Cidade</th>"; 
                    echo "<th>Estado</th>";
                    echo "<th>CEP</th>";
                echo "</tr>";

            $nusuarios = $_POST ['nusuarios'];
            $_SESSION ['quantidade'] = $nusuarios;

                for ($i = 1; $i <= $nusuarios; $i++){
                echo "<tr>";
                echo "<td>"."<input type = 'text' name = ' ".$i."name' size = '15' />"."</td>";
                echo "<td>"."<input type = 'text' name = ' ".$i."address' size = '15' />"."</td>";
                echo "<td>"."<input type = 'text' name = ' ".$i."district' size = '15' />"."</td>";
                echo "<td>"."<input type = 'text' name = ' ".$i."city' size = '15' />"."</td>";           
                echo "<td>"."<input type = 'text' name = ' ".$i."state' size = '15' />"."</td>";
                echo "<td>"."<input type = 'text' name = ' ".$i."zip_code' size = '15' />"."</td>";
                echo "</tr>";       
            }
            echo "</table>";
        ?>
        <br><br>
            <input type = "submit" name = "calcularbnt" value = "Enviar Registro" />
        </form>
    </body>
</html>