<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Versão 2)Condicionais</title>
    <style>
        .compra {
            color: red;
        }

        .urgente {
            color: red;
            background-color: yellow;
            font-weight: bold;
        }

        .normal {
            color: green;
        }
    </style>
</head>

<body>
    <h1>(Versão 2)</h1>
    <hr>

    <h2>Simples</h2>
    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?= $numero ?> é maior que 1</p>
    <?php
    }

    // Sintaxe sem chaves
    if ($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>
    <h2>Composta</h2>
    <?php
    
    $qntdEmEstoque = 20; // o que temos
    $qntdCritica = 15; // mínimo necessário
    ?>

    <h3>Ultrabook Asus</h3>
    
    <?php
    if ($qntdEmEstoque < $qntdCritica) {
    ?>

        <p>É necessário <span class='compra'>comprar!</span></p>

    <?php
        // Condicional ANINHADA
        if ($qntdEmEstoque == 0) {
    ?>

            <p class='urgente'> URGENTE!</p>
       
    <?php
        }
    } else {
    ?>

        <p class='normal'>Estoque normal</p>

    <?php
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
    ?>
    <?php
    if ($opcaoEscolhida == 1) {

       $mensagem = "Ok, vamos fazer o lanche!";
   
    
    } elseif ($opcaoEscolhida == 2) {
    

      $mensagem = "Beleza, pizza no forno...";
    
    
    } elseif ($opcaoEscolhida == 3) {

      $mensagem = "Professor ficou feliz!";
    
    
    } else {
        
        $mensagem = "Não entendi... vou chamar a Valeska";
        
    }

    // Versão usando switch/case

    switch($opcaoEscolhida){
        case 1: $mensagem = "Ok, vamos fazer o lanche!"; break;
        case 2: $mensagem = "Beleza, pizza no forno..."; break;
        case 3: $mensagem = "Professor ficou feliz!"; break;
        default: $mensagem = "Socorro Valeskaaa!"; break;
    }
    
    
    // Exemplo: == e ===
    $a = 10;
    $b = 10;
    $resultado = $a == $b; // Lógico/Boolean
    var_dump($resultado);
    ?>
    <?=$mensagem?>
    
    <br>
   <?= var_dump($a)?>
    <br>
    <?=var_dump($b)?>
    

</body>

</html>