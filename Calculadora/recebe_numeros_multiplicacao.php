<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples - Multiplicação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$pg_atual = 'multiplicacao';

include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Calculadora de Multiplicação</h1>
        <form action="multiplicacao.php">
            <label for="num1" class="form-label">Número 1:</label>
            <input type="number" id="num1" name="num1" class="form-control" required><br>

            <label for="num2" class="form-label">Número 2:</label>
            <input type="number" id="num2" name="num2" class="form-control" required><br>

            <label for="num3" class="form-label">Número 3:</label>
            <input type="number" id="num3" name="num3" class="form-control" required><br>

            <input type="submit" value="Calcular" class="btn btn-primary">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
