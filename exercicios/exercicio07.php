<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - PHP</title>
</head>
<body>
    <h1>Exercício 07 - Simulação de Cadastro</h1>

<?php
$fabricantes = [
    "Wolks" => "Wolks",
    "Honda" => "Honda",
    "Mercedes" => "Mercedes",
    "Bmw" => "Bmw"
];


if( isset($_POST["enviar"]) ){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); 
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
    $disponibilidade =filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

    if( empty($_POST["nome"]) || empty($_POST["preco"]) ){
        ?>
            <p style="color: red;">Você deve preencher nome e preço!</p>
           <p><a href="exercicio07.php">Voltar!</a></p>
        <?php
    } else {
        ?>
        <h2>Dados processados:</h2>
        <p>Nome do produto: <?=$nome?></p>
        <p>Fabricante: <?=$fabricante?></p>
        <p>Preço: <?=number_format($preco,2,",",".")?></p>
        <?php if(!empty($disponibilidade)) { ?>
            <p>Disponibilidade: <?=$disponibilidade?> </p>
        <?php } ?>
        <?php if (!empty($descricao)) { ?>
        <p>Descrição: <?=$descricao?></p>
        <?php 
        } ?>
        
    <?php
    }

} else {
?>
    <form action="" method="post"> 

        <p> 
            <label for="nome">Nome do produto:</label>
            <input required placeholder="Digite o nome do produto:" type="text" name="nome" id="nome">
        </p>


        <p>
            <label for="fabricante">Nome do Fabricante:</label>
            <select required name="fabricante" id="fabricante">
            <option value=""></option>
<?php
foreach ($fabricantes as $fabricante){
?>

    <option value="<?=$fabricante?>"><?=$fabricante?></option>
<?php
}
?>
            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000000" step=".01">
        </p>

        <p>
            Disponibilidade<br>
            <input type="radio" name="disponibilidade" id="sim" value="Sim">
            <label for="sim">Sim</label> 

            <input type="radio" name="disponibilidade" id="nao" value="Não">
            <label for="nao">Não</label>
        </p>

        <p>
            <label for="descricao">Descrição (máximo de 30)</label> <br>
            <textarea maxlength="30" name="descricao" id="descricao" cols="25" rows="5"></textarea>
        </p>
        
        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
<?php 
} 
?>
</body>
</html>