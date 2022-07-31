<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Aluno</title>
    </head>

<?php
    if (isset($_COOKIE['corCookie'])){
        $cor = $_COOKIE['corCookie'];
        echo("<body bgcolor=".$cor.">");
    }
    else {
        echo("<body bgcolor='pink'>");
    }
?> 
        <form id="form1" name="form1" method="post" action="cor.php">
            <label>Selecione a cor: </label>
              <select name="corSelect">
                <option value="#FF0000">Vermelho</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FFFF">Ciano</option>
                <option value="yellow">Amarelo</option>
              </select>
              <br />

            <input type="submit" name="Submit" value="Aplicar" />
        </form>

</body>

</html>