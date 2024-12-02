<?php
    session_start();
    require_once 'biblioteca_arquivo.php';
    require_once 'biblioteca_sessao.php';

    $autenticado = estaAutenticado();
    
    if (!$autenticado) {
        header('location: signin.php');
        exit();
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        excluirNoticias($id);
        header('Location: listar.php'); // Redireciona após excluir
        exit();
    }

    $noticias = file_exists('noticias.json') ? json_decode(file_get_contents('noticias.json'), true) : [];

    if(!$noticias){
        $noticias = [];
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Lista de Prestadores</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Noticias</h2>
    <table>
        <thead>
            <tr>
                
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Texto Noticia</th>
                <th>Foto p/ Noticia</th>
                <th>Data da Postagem</th>>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($noticias as $noticia): ?>
                <tr>
                   
                    <td><?php echo htmlspecialchars($noticia['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($noticia['subtitulo']); ?></td>
                    <td><?php echo htmlspecialchars($noticia['texto_noticia']); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($noticia['foto']); ?>" 
                             alt="Foto de <?php echo htmlspecialchars($noticia['titulo']); ?>" 
                             style="width: 100px; height: auto;">
                    </td>
                    
                    <td><?php echo htmlspecialchars($noticia['dataPost']); ?></td>
                    <td><a href="listar.php?delete_id=<?php echo $noticia['id']; ?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button><a href='admin.php'>Cadastrar Noticia</a></button>
    <button><a href='signout.php'>Sair</a></button>
    <button style="margin-bottom: 10px;"><a href="index.php">Ver Notícias</a></button>
</body>
</html>
