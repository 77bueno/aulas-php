</main>

    <footer>
        <p>Site criado para o curso <b>Téc. em informática para Internet</b></p>
<?php
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:sa");
?>
<ul>
    <li>Data: <?=$data?></li>
    <li>Hora: <?=$hora?></li>
</ul>
    </footer>
</body>
</html>