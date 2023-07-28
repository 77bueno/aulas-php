<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Array</title>
    <style>
        .planoDeEstudos:nth-child(odd){color: blue;}
        .planoDeEstudos:nth-child(even){color: red;}

    </style>
</head>
<body>
    <h1>Trabalhando com Arrays (Vetores e matrizes)</h1>
    <hr>
<h2>Arrays com indice numérico</h2>
<?php
  // Sintaxe com colchetes
  $bandas = ["Savatage","Dio","Rush"];

  // Sintaxe com função array()
  $cursos = array("HTML","Node","PHP");

  // Sintaxe com atribuição manual
  
  $buteco[0] = "Bolinho de bacalhau";
  $buteco[1] = "Pastel";
  $buteco[2] = "Esfiha";

  // Constantes de array
  define("UNIDADES", ["PENHA", "TATUAPÉ"]);
  const FRUTAS = ["Morango", "Abacaxi"];
?>

<h3>Acessando os dados</h3>
<ol>
    <li>Banda que mais gosto:
        <b><?=$bandas[2]?></b></li>
    <li>Curso básico de: 
        <b><?=$cursos[0]?></b></li>
    <li>Quero comer: 
        <b><?=$buteco[1]?></b></li>
    <li>Estamos no Senac 
        <b><?=UNIDADES[0]?></b></li>
    <li>Fruta boa ora caipirinha/vitamina:
        <b><?=FRUTAS[0]?></b></li>
</ol>

<hr>

<h2>Array associativo</h2>

<?php
  $curso = [
    // Chave associativa:
    // identificador => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver água"
  ];
?>
<h3>Acessando os dados (array associativo)</h3>
<p>Nome do curso: <b><?=$curso["titulo"]?></b></p>
<p>Carga horaria: <b><?=$curso["carga_horaria"]?></b> horas.</p>
<p>Descritivo: <b><?=$curso["descritivo"]?></b></p>

<hr>

<h2>Matriz (array dentro de array)</h2>

<?php
  $planoDeEstudos = [
    ["JS Avançado", "Node.js", "React"],
    ["PHP", "POO", "MySQL", "Python"],
    ["Teoria das Cores","Photoshop","UX/UL"]
  ];
?>

<ul>
    <li class="planoDeEstudos"><?=$planoDeEstudos[0][2]?></li>
    <li class="planoDeEstudos"><?=$planoDeEstudos[1][3]?></li>
    <li class="planoDeEstudos"><?=$planoDeEstudos[2][1]?></li>
    <li class="planoDeEstudos"><?=$planoDeEstudos[2][0]?></li>
</ul>

<hr>

<h2>Funções de análise de estruturas de dados (debug/depuração)</h2>

<h3>print_r()</h3>

   <pre>
    <?=print_r($bandas)?>
   </pre>

<h3>var_dump()</h3>

   <pre>
    <?=var_dump($bandas)?>
   </pre>

</body>
</html>