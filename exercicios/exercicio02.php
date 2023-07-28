<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        h1 {text-align: center;}
        ul li{list-style: none;}
        body{font-family: verdana; font-size: 15px;}
        section {
          display: flex;
          justify-content: center;  
          padding: 20px;
        }
        
    </style>
</head>
<body>
    <?php
    $jhonatan = array("Jhonatan", "18", "jhonatan18@gmail.com", "1234", "Masculino", "São Paulo");
    $julia = array("Júlia", "17", "julia17@gmail.com", "5678", "Feminino", "São Paulo")
    ?>

    <h1>Mostrando os valores</h2>
  <section>
    <article>
      <ul>
        <li>Nome: <b><?=$jhonatan[0]?></b></li>
        <li>Email: <b><?=$jhonatan[2]?></b></li>
        <li>Idade: <b><?=$jhonatan[1]?></b></li>
        <li>Sexo: <b><?=$jhonatan[4]?></b></li>
      </ul>   
    </article>

    <article>
      <ul>
        <li>Nome: <b><?=$julia[0]?></b></li>
        <li>Email: <b><?=$julia[2]?></b></li>
        <li>Idade: <b><?=$julia[1]?></b></li>
        <li>Sexo: <b><?=$julia[4]?></b></li>
      </ul>
    </article>
  </section>  
</body>
</html>