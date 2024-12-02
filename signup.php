<?php
    require_once 'biblioteca_arquivo.php';
    require_once 'biblioteca_sessao.php';
    if ($_POST) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $re_senha = $_POST['resenha'];
        $usuario = procurarUsuario($login);
        if ($usuario == false) {
            if ($senha != $re_senha) {
                $mensagem = "Senhas não conferem";    
            } else {
                criarUsuario($login, $senha);
                header('location: index.php');
            }
        } else {
            $mensagem = "Não é possível criar usuário, login já existe.";
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
    <h1>Criar usuário</h1>
    <h2 style='color: red'><?=$mensagem ?? ''?></h2>
    <form action="" method="post">

        <div class="row">
            <div class="campo" style="flex-grow: 1">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" value="" />
            </div>
            <div class="campo" style="flex-grow: 1">
                <label for="senha">Senha</label>
                <input type="password" name="senha"/>
            </div>
            <div class="campo" style="flex-grow: 1">
                <label for="resenha">Re-Senha</label>
                <input type="password" name="resenha"/>
            </div>
        </div>
        <button>Criar usuário</button>
    </form>
    <a href='signin.php'>já tenho cadastro</a>
</body>
</html>