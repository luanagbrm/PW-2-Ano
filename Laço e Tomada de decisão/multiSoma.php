<?php
	
	//Desenvolva um programa para calcular a soma de todos os números ímpares de 0 à 20 e a multiplicação de todos os números pares de 1 à 20.
    for($soma = 0,$i=0; $i <=20; $i++){
        if($i%2!=0){
            $soma+=$i;
        }
    }
    echo ("A soma dos números ímpares de 0 à 20 é: ".$soma);

    for($multi = 1, $i=1; $i <=20; $i++){
        if($i%2==0){
            $multi*=$i;
        }
    }
    echo ("A multiplicação dos números pares de 1 à 20 é: ".$multi);
?>