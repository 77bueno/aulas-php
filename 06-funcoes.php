<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
<h1>Criando e usando funções</h1>
<hr>

<h2>Funções como procedimento ou sub-rotina</h2>
<?php 
function dadosAutor(){
    echo "<div>";
    echo "<p>Victor Hugo M. Bueno<p>";
    echo "<p><a href=''>victorhugomotabueno@gmail.com</a></p>";
    echo "</div>";
}
?>

<section>
    <h3>Chamada da sub-rotina/procedimento</h3>
    <?=dadosAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>

<h2>Função com retorno de dados</h2>
<?php 
function dadosCurso(){
    // return "Técnico em Informática para Internet";
    return "<b>Encher o saco no WhatsApp</b>";

}
?>
<p>Estamos no curso de <?=dadosCurso()?></p>
<p><?=dadosCurso()?> é ministrado no Senac Penha.</p>

<hr>

<h2>Função com parâmetros (ou arguementos)</h2>
<?php 
function soma( $valor1, $valor2, $valor3 ){
    // Variável de escopo local
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}
?>
<!-- Chamando e exibindo diretamente o retorno -->
<p>Resultado 1: <?=soma(10,20,5)?> </p>
<p>Resultado 2: <?=soma(500, 2.9, 98)?> </p>
<?php 
// Chamando e guardando o retorno
$resultado3 = soma(500, 480, 700);
?>
<p>Resultado 3: <?=$resultado3?></p>

<?php if($resultado3 > 100) { ?>
    <p>Vinicius é demitido</p>
<?php } ?>

<!-- Usando uma função como parte de uma condição -->
<?php if( soma(2, 3, 10) >= 10 ){  ?>
    <p>Kaue reprovado!!!</p>
<?php } ?>

<h3>Função com parâmetros opcionais</h3>
<?php 
// $pessoa é um parâmetro opcional com um valor padrão 
function saudacao($mensagem, $pessoa = "Fulano(a)"){
    return "Olá, $mensagem $pessoa!";
}
?>
<p> <?=saudacao("bom dia", "Phelipe")?> </p>
<p> <?=saudacao("boa noite", "Jhon")?> </p>
<p> <?=saudacao("boa tarde")?> </p>
</body>
</html>