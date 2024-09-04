<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $_SESSION['nome'] = $nome;
    header('Location: mostrar_nome.php');
    exit();
} else {
    header('Location: primeira.php');
    exit();
}
?>
