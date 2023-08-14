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
    $bueno = array("Bueno", "16", "bueno10@gmail.com", "1234", "Masculino", "São Paulo");
    $phelipe = array("Phelipe", "20", "phelipe@gmail.com", "5678", "Masculino", "São Paulo")
    ?>

    <h1>Mostrando os valores</h2>
  <section>
    <article>
      <ul>
        <li>Nome: <b><?=$bueno[0]?></b></li>
        <li>Email: <b><?=$bueno[2]?></b></li>
        <li>Idade: <b><?=$bueno[1]?></b></li>
        <li>Sexo: <b><?=$bueno[4]?></b></li>
      </ul>   
    </article>

    <article>
      <ul>
        <li>Nome: <b><?=$phelipe[0]?></b></li>
        <li>Email: <b><?=$phelipe[2]?></b></li>
        <li>Idade: <b><?=$phelipe[1]?></b></li>
        <li>Sexo: <b><?=$phelipe[4]?></b></li>
      </ul>
    </article>
  </section>  
</body>
</html>