<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .compra{ color: red;}

        .urgente{ color: red; background-color: yellow; font-weight: bold;}

        .normal{ color: green;}
    </style>
</head>
<body>
    <h1>Trabalhando com condicionais</h1>
    <hr>

    <h2>Simples</h2>
<?php
    $numero = 5;
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }

    // Sintaxe sem chaves
    if($numero > 1) echo "<p>$numero é maior que 1</p>"
?>

    <h2>Composta</h2>
<?php
    $produto = "Ultrabook Asus";
    $qntdEmEstoque = 20; // o que temos
    $qntdCritica = 15; // mínimo necessário

    echo "<h3>$produto</h3>";
    if($qntdEmEstoque < $qntdCritica) {
        echo "<p>É necessário <span class='compra'>comprar!</span></p>";
        
        // Condicional ANINHADA
        if($qntdEmEstoque == 0) {
            echo "<p class='urgente'> URGENTE!</p>";
        }
    } else {
        echo "<p class='normal'>Estoque normal</p>";
    }
?>

    <h2>Encadeada</h2>
<?php
    /*Opções para o exemplo:
    1 -> Lancche
    2 -> Pizza
    3 -> Paçoca
    qualquer outra -> Opção inválida
    */

    $opcaoEscolhida = 1; // comece com qualquer valor

    if($opcaoEscolhida == 1){
        echo "<p>Ok, vamos fazer o lanche!</p>";
    } elseif($opcaoEscolhida == 2){
        echo "<p>Beleza, pizza no forno...</p>";
    } elseif ($opcaoEscolhida == 3) {
        echo "<p>Professor ficou feliz!</p>";
    } else {
        echo "<p>Não entendi... vou chamar a Valeska</p>";
    }

    // Exemplo: == e ===
    $a = 10;
    $b = 10;
    $resultado = $a == $b; // Lógico/Boolean
    var_dump($resultado);
    
    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_dump($b);
?>
</body>
</html>