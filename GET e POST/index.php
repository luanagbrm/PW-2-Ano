<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Aluno</title>
    </head>
    <body>
        <form action="infoAluno.php" method="post">
            <label>Nome:</label>
            <input type="text" name="txtNome" id="txtNome">
            <br>
            <label>Email:</label>
            <input type="email" name="txtEmail" id="txtEmail">
            <br>
            <label>Turma:</label>
            <select name="slTurma" id="slTurma">
                <option value="1">1º DS</option>
                <option value="2">2º DS</option>
                <option value="3">3º DS</option>
            </select>
            <br>
            <label>Período:</label>
            <input type="radio" name="rdPeriodo" id="rdPeriodo" value="1">Manhã
            <input type="radio" name="rdPeriodo" id="rdPeriodo" value="2">Tarde
            <br>
            <label>Documentos entregues:</label> <br>
            <input type="checkbox" name="ckRg" id="ckRg" value="1">RG <br>
            <input type="checkbox" name="ckEnd" id="ckEnd" value="1"> Comprovante de endereço <br>
            <input type="checkbox" name="ckHist" id="ckHist" value="1">Histórico Ensino Fundamental
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>