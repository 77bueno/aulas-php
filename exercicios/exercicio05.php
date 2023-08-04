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
    [
        "nome" => "Victor",
        "nota1" => 8,
        "nota2" => 9,
    ],
    [
        "nome" => "Phelipe",
        "nota1" => 5, 
        "nota2" => 4,
    ],
    [
        "nome" => "Jhon",
        "nota1" => 6,
        "nota2" => 6,
    ],
    [
        "nome" => "Eliandro",
        "nota1" => 9, 
        "nota2" => 2,
    ],
    [
        "nome" => "Eliel",
        "nota1" => 7,
        "nota2" => 5
    ]
];


function media(float $nota1, float $nota2):float{
    $media = ($nota1 + $nota2) / 2;

    return $media;
}


function resultado(float $media):string{
    if ($media >= 7) {
        return "aprovado";
    } else { 
        return "reprovado";
    }
}

foreach($alunos as $aluno){
    ?>
        <p>Nome: <?=$aluno["nome"]?> </p>
        <p>Nota 1: <?=$aluno["nota1"]?> </p>
        <p>Nota 2: <?=$aluno["nota2"]?> </p>
        <p>E sua média foi: <?=media($aluno["nota1"], $aluno["nota2"])?></p>
        <p>E você foi: <?=resultado(  media($aluno["nota1"], $aluno["nota2"])  )?></p>
        <hr>
    <?php
}
?>


</body>
</html>