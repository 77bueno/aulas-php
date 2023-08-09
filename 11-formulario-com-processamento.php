<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e PHP combinado </title>
</head>
<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>

<?php 
/* Se o botão enviar for acionado/definido/setado, significa que o formulário foi enviado */
if( isset($_POST["enviar"]) ){
    $nome = $_POST['nome'];
    $email = $_POST['email']; 
?>
<h2>Dados processados:</h2>
<p>Nome: <?=$nome?></p>
<p>E-mail: <?=$email?></p>

<?php
} else {
?>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required>  
        </p>
        
        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
<?php 
} 
?>
</body>
</html>