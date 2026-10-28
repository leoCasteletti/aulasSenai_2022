<?php

    $escolha = $_POST['escolha'];
    $numero = $_POST['numero'];
    
    $tab = 0;

    if($escolha == 'unico'){
        if(isset($_POST['numero'])){
            $tab = $_POST['numero'];
            if(!is_numeric($tab)){
                echo "<br>O valor informado não é um número.<br>";
            }else{

            $num=0;
            while($num<=10){
                echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
                $num++;
            }
        }
    }
}

    if($escolha == 'varios'){
        for($i =0; $i <=99; $i++){
            echo "<br>";
            for($j = 0; $j <=10; $j++){
                echo $i . " x " . $j . " = " . ($j * $i) . "<br>";
                
            }   
        }
    }
    
?>