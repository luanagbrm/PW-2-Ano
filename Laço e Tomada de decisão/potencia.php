<?php

	//Desenvolva um programa para calcular a potência de um número por uma base qualquer. O programa deverá realizar a leitura da base e do expoente.
    $base=2;
    $expo=8;

        for($resultado=1, $i=1; $i<=$expo; $i++){
            $resultado*=$base;
        }

        echo("O resultado de ".$base. " elevado a " .$expo. "ª potência é: " .$resultado);
?>