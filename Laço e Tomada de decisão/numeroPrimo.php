<?php

	//Desenvolva uma página que ao ler um número diga se ele é primo ou não.
    $num = 7;
    $qtd = 0;

        for($i=1; $i<=$num; $i++){
            if($num%$i==0){
                $qtd++;
            }
        }

        if ($qtd==2){
            echo('O número é primo!');
        } else{
            echo('O número não é primo!');
        }
?>
