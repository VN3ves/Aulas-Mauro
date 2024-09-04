<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Multiplicação</title>
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

// Função que recebe um array de números e retorna o resultado da multiplicação
function multiplicar($numeros) {
    $resultado = 1;
    foreach ($numeros as $numero) {
        $resultado *= $numero;
    }
    return $resultado;
}

// Captura os números da URL (GET)
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$n3 = $_GET['num3'];

// Armazena os números em um vetor
$numeros = [$n1, $n2, $n3];

// Chama a função para multiplicar os números
$resultado = multiplicar($numeros);

// Exibe o resultado
echo "<p>$n1 * $n2 * $n3 = $resultado</p>";
?>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
