<?php
    session_start();
    require_once 'biblioteca_arquivo.php';
    require_once 'biblioteca_sessao.php';
    require_once 'biblioteca_validacao.php';

    $autenticado = estaAutenticado();
    
    if (!$autenticado) {
        header('location: signin.php');
    }

    $arquivo_destino = null;
    $usuario = null;

    if ($_POST) {
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $texto_noticia = $_POST['texto_noticia'];
        $dataPost = $_POST['dataPost'];
        if ($dataPost) {
            $dataPost = str_replace('/', '-', $dataPost);
        }

        $atividade = $_POST['atividade'];

        if (!$atividade) {
            $atividade = [];
        }

        $campos_invalidos = validaFormNoticias($titulo, $subtitulo, $texto_noticia, $dataPost);

        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
            $nome_original = $_FILES['foto']['name'];
            $temp = explode(".", $nome_original);
            $extensao = end($temp);
            // Gera um nome único e inclui o diretório 'fotos/'
            $arquivo_destino = 'fotos/' . uniqid() . '.' . $extensao;

            if (count($campos_invalidos) == 0) {
                criarNoticias($titulo, $subtitulo, $texto_noticia, $dataPost,  $arquivo_destino);
            }
        
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $arquivo_destino)) {
                echo "Imagem enviada com sucesso!";
            }
        };

        
    } else {
        $titulo = null;
        $subtitulo = null;
        $texto_noticia = null;
        $dataPost = null;
        $regiao = null;
        $atividade = [];
    }


    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="script.js"></script>
    <style type="text/css">
        form {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 1px;
            border: 1px solid #adadad;
        }
        .grupo, .campo {
        }
        .acoes{
            text-align: center;
        }
        .campo label{
            color: rgba(0, 0, 0, 0.99);
        }
        .campo input, select{
            width: 96%;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-right: 5px;
            border-radius: 3px;
            border: 1px solid #8a8a8a;
            padding-left: 5px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .vertical-row {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        fieldset {
            border: 1px solid rgba(49, 92, 49, 0.97);
            border-radius: 5px;
            margin-top: 10px;
        }

        legend {
            padding: 0.2em 0.5em;
            border: 1px solid rgba(49, 92, 49, 0.97);
            color: rgba(0, 0, 0, 0.99);
            font-size: 90%;
            text-align: center;
        }

        button {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #8a8a8a;
        }

        .erro {
            color: red;
            display: none;
        }

    </style>

</head>
<body>
    
    <h2>Formulário de cadastro de noticias</h2>
    <button style="margin-bottom: 10px;"><a href="listar.php">Listagem de noticias</a></button>
    
    <form name="formulario" action="admin.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="campo" style="flex-grow: 1">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo $titulo ?>" />
                <span class="erro" style="<?php echo isset($campos_invalidos['titulo']) ? 'display: block;' : 'display: none;'; ?>" >Titulo inválido</span>
            </div>
            <div class="campo" style="flex-grow: 1">
                <label for="subtitulo">Subtitulo</label>
                <input type="text" name="subtitulo" id="subtitulo" value="<?php echo $subtitulo ?>" />
                <span class="erro" style="<?php echo isset($campos_invalidos['subtitulo']) ? 'display: block;' : 'display: none;'; ?>">Subtitulo inválido</span>
            </div>
        </div>
        <div class="row">
            <div class="vertical-row" style="flex-grow: 9">
                <div class="campo" style="flex-grow: 1; margin-top: 5px;">
                    <label for="texto_noticia">Texto Noticia</label>
                    <textarea style="width: 500px; height: 100px" type="text" name="texto_noticia" id="texto_noticia" value="<?php echo $texto_noticia ?>"></textarea>
                    <span class="erro" style="<?php echo isset($campos_invalidos['texto_noticia']) ? 'display: block;' : 'display: none;'; ?>">Texto inválido</span>
                </div>
            </div>
            <fieldset class="grupo row" style="flex-grow: 1">
                <legend>Data</legend>
                <div class="campo" style="flex-grow: 1">
                    <label for="dataPost">Data de Postagem</label>
                    <input type="text" name="dataPost" id="dataPost" value="<?php echo $dataPost ?>" />
                    <span class="erro" style="<?php echo isset($campos_invalidos['dataPost']) ? 'display: block;' : 'display: none;'; ?>"><?php echo isset($campos_invalidos['dataPost']) ? $campos_invalidos['dataPost']['motivo'] : ''; ?></span>
                    
                </div>
            </fieldset>
        <div class="row">
            <fieldset class="grupo" style="flex-grow: 1">
                <span>Envie a foto para a Noticia</span>
                <input type="file" name="foto" accept=".jpg, .jpeg, .png" required>
            </fieldset>
        <div class="row">
            <fieldset class="acoes" style="flex-grow: 1">
                <legend>Ações</legend>
                <button type='submit'>Enviar</button>
                <button><a href='signout.php'>Sair</a></button>
                <button type='button'>Ajuda</button>
            </fieldset>      
            <h3><?php 
        if (isset($usuario) && $usuario !== null) {
            echo $usuario['login']; 
        } else {
            echo "";
        }
    ?> 
    <a href='signout.php'>sair</a></h3>
        </div>
    </form>    
</body>
</html>