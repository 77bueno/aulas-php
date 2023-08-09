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
    $nome = $_POST['nome']; 
    $fabricantes = ;
    $preco = $_POST['preco'];
    $disponibilidade = $_POST['disponibilidade'];
    $descricao = $_POST['descricao'];

?>
<h2>Dados processados:</h2>
<p>Nome do produto: <?=$nome?></p>
<p>Preço: <?=$preco?></p>
<p>Disponibilidade: <?=$disponibilidade?> </p>
<p>Descrição: <?=$descricao?></p>

<?php
} else {
?>
    <form action="" method="post"> 

        <p> 
            <label for="nome">Nome do produto:</label>
            <input required placeholder="Digite o nome do produto:" type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="assunto">Nome do Fabricante:</label>
            <select required name="assunto" id="assunto">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step=".01">
        </p>

        <p>
            Disponibilidade<br>
            <input type="radio" name="disponibilidade" id="sim" value="Sim">
            <label for="sim">Sim</label> 

            <input type="radio" name="disponibilidade" id="nao" value="Não">
            <label for="nao">Não</label>
        </p>

        <p>
            <label for="descricao">Descrição (mínimo 10 e máximo de 30)</label> <br>
            <textarea maxlength="30" name="descricao" id="descricao" cols="25" rows="5"></textarea>
        </p>
        
        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
<?php 
} 
?>
</body>
</html>