<table Border="5">
    <thead>
        <tr>
            <?php

            for ($j=0; $j <= 10; $j++) { 

                echo "<th>","$j", " ","</th>";

            }
            ?>

        </tr>
    </thead>

    <tbody>

        <?php

        for ($i=0; $i <= 10; $i++) { 

            for ($j=0; $j <= 10; $j++) { 

                echo "<td>","$j","X","$i", " ","</td>";

            }
            echo "<tr></tr>";
        }
        ?>

    </tbody>

    </table>