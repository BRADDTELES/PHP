<?php

$nome = "Danillo";
$idade = 34;

$html = "<!DOCTYPE html>
<html lang='pt'>
<head>

    <title>Site de PHP by <?= $nome ?></title>
</head>
<body>
    <h1>Meu nome é $nome, tenho $idade anos.</h1>
</body>
</html>
";

echo $html;

echo "<br><br>";