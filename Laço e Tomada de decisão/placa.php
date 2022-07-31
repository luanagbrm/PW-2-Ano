
 <?php
	
	//Desenvolva uma página que a partir dos números de uma placa de um veículo informe o dia de rodízio de um veículo.
    $placa = "8848";
    $placafim = $placa%10;

    switch($placafim){
        case 1: case 2:
        echo("Seu rodízio é SEGUNDA-FEIRA");
        break;

        case 3: case 4:
        echo("Seu rodízio é TERÇA-FEIRA");
        break;

        case 5: case 6:
        echo("Seu rodízio é QUARTA-FEIRA");
        break;

        case 7: case 8:
        echo("Seu rodízio é QUINTA-FEIRA");
        break;

        case 9: case 0:
        echo("Seu rodízio é SEXTA-FEIRA");
        break;
    }
 
 ?>