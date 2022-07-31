<?php
	
	//Criar uma página que leia o salário de um funcionário e o departamento que ele trabalha. Para o departamento Operacional, o aumento será de 15%. Para o departamento de desenvolvimento deverão ser aplicadas as seguintes regras:
	//$depto = 1;//Operacional
	//$depto = 2;//Desenvolvimento
	//para 1.500,00 <= salarioAtual < 1.750,00: aumento igual a 12%
	//para 1.750,00 <= salarioAtual < 2.000,00: aumento igual a 10%
	//para 2.000,00 <= salarioAtual < 3.000,00: aumento igual a 7%
	//para acima de 3.000,00: aumento igual a 5%.
	
    $depto = 2;
    $salarioAtual = 3500;

    if($depto==1){
        $aumento = $salarioAtual*0.15;
        echo("Seu salário atual é de: " .$salarioAtual. "<br>O aumento será de: R$" .$aumento. 
        "<br> Seu salário atualizado será de: R$" .($salarioAtual+$aumento) );
        
    } else if($depto==2 && $salarioAtual<1750){
        $aumento = $salarioAtual*0.12;
        echo("Seu salário atual é de: " .$salarioAtual. "<br>O aumento será de: R$" .$aumento. 
        "<br> Seu salário atualizado será de: R$" .($salarioAtual+$aumento) );
    } else if($depto==2 && $salarioAtual<2000){
        $aumento = $salarioAtual*0.1;
        echo("Seu salário atual é de: " .$salarioAtual. "<br>O aumento será de: R$" .$aumento. 
        "<br> Seu salário atualizado será de: R$" .($salarioAtual+$aumento) );
    } else if($depto==2 && $salarioAtual<3000){
        $aumento = $salarioAtual*0.07;
        echo("Seu salário atual é de: " .$salarioAtual. "<br>O aumento será de: R$" .$aumento. 
        "<br> Seu salário atualizado será de: R$" .($salarioAtual+$aumento) );
    } else if($depto==2 && $salarioAtual>=3000){
        $aumento = $salarioAtual*0.05;
        echo("Seu salário atual é de: " .$salarioAtual. "<br>O aumento será de: R$" .$aumento. 
        "<br> Seu salário atualizado será de: R$" .($salarioAtual+$aumento) );
    }
?>