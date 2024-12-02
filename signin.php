<?php
    require_once 'biblioteca_arquivo.php';
    require_once 'biblioteca_sessao.php';
    if ($_POST) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $usuario = procurarUsuario($login);
        
        if ($usuario === false) {
            $mensagem = "Usuário não encontrado";
        } else {
            if ($usuario['senha'] == $senha) {
                login($usuario);
                header('location: admin.php');
            } else {
                $mensagem = "Senha inválida";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <h2 style='color: red'><?=$mensagem ?? ''?></h2>
    <form action="" method="post">

        <div class="row">
            <div class="campo" style="flex-grow: 1">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" value="" />
            </div>
            <div class="campo" style="flex-grow: 1">
                <label for="sobrenome">Senha</label>
                <input type="password" name="senha"/>
            </div>
        </div>
        <button type="">Autenticar</button>
    </form>
    <a href='signup.php'>Criar usuario</a>
</body>
</html>