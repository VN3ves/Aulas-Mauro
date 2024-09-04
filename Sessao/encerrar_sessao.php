<?php
session_start();

$_SESSION = array();

// Destrói os dados da sessão no servidor
session_destroy();

// Apaga o cookie da sessão (opcional, mas recomendado)
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Redireciona para a página `primeira.php`
header('Location: primeira.php');
exit();
?>
