<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 05</title>
<style>
    .aprovado{
        color: green;
        font-weight: bold;
    }
    .reprovado{
        color: red;
        font-weight: bold;
    }
</style>
</head>
<body>
<h1>Exercício 05 - Notas aluno</h1>

<?php

$alunos = [
    

];


function aluno(float $nota1, float $nota2):float{
    $media = ($nota1 + $nota2) / 2;

    return $media;
}

function resultado(int $media):string{
    if ($media >= 7) {
        return "aprovado";
    } else { 
        return "reprovado";
    }
}
?>

<p>Sua média é: <?=aluno(6,8)?> e você está: <span class="<?=resultado(aluno(6,8))?>"><?=resultado(aluno(6,8))?></span> </p>

</body>
</html>