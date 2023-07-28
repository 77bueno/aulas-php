<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<h1>Calculando reajuste de salário</h1>

<?php
  $salario = 3000;
  ?>


<?php

if ($salario < 1500) {
    $porcentagem = 15;
    $aumento = $salario * 1.15;
} elseif ($salario <= 3000){
    $porcentagem = 10;
    $aumento = $salario * 1.10;
} elseif ($salario > 3001){
    $porcentagem = 5;
    $aumento = $salario * 1.05;
}
$salario = number_format($salario,2,',','. ');
$aumento = number_format($aumento,2,',','. ');
?>

<p>
    Seu salário atual é de <b><?=$salario?></b>
</p>
<p>
    Seu salário passou por um reajuste de <b><?=$porcentagem?>%</b> e teve um aumento e agora o seu novo salário é de: <b><?=$aumento?></b> reais.
</p>
    
</body>
</html>