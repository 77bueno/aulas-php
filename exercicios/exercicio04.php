<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04</title>
<style>
table,th, td {
    border: 1px solid black;
    border-collapse: collapse;
    margin: auto; 
}
tr:nth-child(odd) {
    background-color: lightslategrey;
}
tr:nth-child(even) {
    background-color: lightblue;
}
tr:hover:nth-child(odd) {
    background-color: slategrey;
}
tr:hover:nth-child(even) {
    background-color: lightskyblue;
}
</style>
</head>
<body>

<table>
<tr>
    <th>ID</th>
    <th>Linguagem</th>
    <th>Descrição</th>
</tr>

<?php
  $linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Software"
  ];

$i = 0;
foreach ($linguagens as $linguagem => $descricao) {
$i++;
?> 
    <tr>
        <td><?=$i?></td>
        <td><?=$linguagem?></td>
        <td><?=$descricao?></td>
    </tr>
<?php
}
?>
</table>
</body>
</html>