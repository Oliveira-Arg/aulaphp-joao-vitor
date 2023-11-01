<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia ". date("d/m/Y");
    echo " é a hora atual é " . date("6:i:s");
    ?>
</body>
</html>