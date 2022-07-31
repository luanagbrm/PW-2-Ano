<?php
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $turma = $_POST['slTurma'];
    $periodo = $_POST['rdPeriodo'];
    $rg = $_POST['ckRg'];
    $end = $_POST['ckEnd'];
    $historico = $_POST['ckHist'];

    if ($turma == 1){
        $turma = "1º DS";
    }
    else if($turma == 2){
        $turma = "2º DS";
    }
    else{
        $turma = "3º DS";
    }

    if($periodo == 1){
        $periodo = "Manhã";
    }
    else{
        $periodo = "Tarde";
    }

    echo("O aluno ".$nome." foi cadastrado  na turma ".$turma." no período da ".$periodo." com sucesso.");
?>