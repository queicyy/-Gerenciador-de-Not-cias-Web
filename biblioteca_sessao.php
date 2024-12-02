<?php
@session_start();

function estaAutenticado() {
    return isset($_SESSION['usuario']);
}

function usuarioAutenticado() {
    return $_SESSION['usuario'] ?? false;
}

function login($usuario) {
    $_SESSION['usuario'] = $usuario;
}

function logoff() {
    unset($_SESSION['usuario']);
}
?>