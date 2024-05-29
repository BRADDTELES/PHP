<?php 
echo "Olá, Mundo!";
echo "<br><br>";
echo "Dentro do terminal e dentro da pasta aonde está o index.php";
echo "<br>";
echo "--digitar o comando no Terminal:</br>php -S localhost:nº_da_Porta_que_não _esteja_usando";
echo "<br>";
echo "<br>";
?>
<?="Olá, mundo com o echo customizado que serve somente para impressão na tela <br>"?>
<?= $nome = "Danillo"; $idade = 34; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de PHP by <?= $nome ?></title>
</head>
<body>
    <h1>Meu nome é <?=$nome?>, tenho <?= $idade?> anos e sou <?=" Brasileiro"?> </h1>
</body>
</html>