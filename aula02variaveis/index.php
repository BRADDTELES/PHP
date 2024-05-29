<?php

$nome = "Danillo";
$idade = 34;

$head = "<!DOCTYPE html>
<html lang='pt'>
<head>

    <title>Site de PHP by <?= $nome ?></title>
</head>";
$body = "
<body>
    <h1>Meu nome é $nome, tenho $idade anos. Novamente</h1>
</body>
</html>
";

$html = $head . $body;
echo $html;

