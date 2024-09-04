<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Divisão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$pg_atual = 'resultado';

include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Resultado:</h1>
<?php

// Função que recebe $x por referência e calcula a divisão
function dividir(&$x, $y) {
    if ($y == 0) {
        echo "<p>Divisão por zero não é permitida.</p>";
        return;
    }
    $x = $x / $y;
}

// Captura os números da URL (GET)
$x = $_GET['num1'];
$y = $_GET['num2'];

// Chama a função para dividir os números
dividir($x, $y);

// Exibe o resultado
echo "<p>Resultado: $x</p>";
?>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
