
<?php

function procurarUsuario($login) {
    $usuarios = lerUsuarios();
    foreach($usuarios as $id => $usuario) {
        if ($usuario['login'
        ] == $login) {
            
            return $usuario;
        }
    }
    return false;
}

function criarUsuario($login, $senha) {
    $id = uniqid();
    $usuario = [
        'login' => $login,
        'senha' => $senha,
        'id' => $id
    ];
    $usuarios = lerUsuarios();
    $usuarios[] = $usuario; //array_push($usuarios, $usuario);
    salvarUsuarios($usuarios);
}

function lerUsuarios() {
    $usuarios_em_texto = @file_get_contents('usuarios.json');

    if ($usuarios_em_texto === false) {
        return [];
    }
    $usuarios = json_decode($usuarios_em_texto, true);
    return $usuarios;
}

function salvarUsuarios($usuarios) {
    $usuarios_em_texto = json_encode($usuarios);

    $arquivo = fopen('usuarios.json','w');
    if ($arquivo) {
        fwrite($arquivo,$usuarios_em_texto);
        fclose($arquivo);
    }
}
// --------- PRESTADOR
function criarNoticias($titulo, $subtitulo, $texto_noticia, $dataPost,  $foto) {
    $id = uniqid();
    $noticia = [
        'titulo' => $titulo,
        'subtitulo' => $subtitulo,
        'texto_noticia' => $texto_noticia,
        'dataPost' => $dataPost,
        'foto' => $foto, // salva o caminho completo da imagem
        'id' => $id
    ];
    $noticias = lerNoticias();
    $noticias[] = $noticia;
    salvarNoticias($noticias);
}

function lerNoticias() {
    $noticias_em_texto = @file_get_contents('noticias.json');

    if ($noticias_em_texto === false) {
        return [];
    }
    $noticias = json_decode($noticias_em_texto, true);
    return $noticias;
}

function salvarNoticias($noticias) {
    $noticias_em_texto = json_encode($noticias);

    $arquivo_noticias = fopen('noticias.json','w');
    if ($noticias) {
        fwrite($arquivo_noticias,$noticias_em_texto);
        fclose($arquivo_noticias);
    }
}

function excluirNoticias($id) {
    $noticias = lerNoticias();
    $index = 0;
    $found = false;
    foreach($noticias as $index => $noticia) {
        if ($noticia['id'] == $id) {
            $found = true;
            break;
        } 
    }
    
    if ($found){
        array_splice($noticias, $index, 1);
        salvarNoticias($noticias);
        return true;
    }
    
    return false;
}

function pegarPeloId($id) {
    $noticias = lerNoticias();
    foreach($noticias as $index => $noticia) {
        if ($noticia['id'] == $id) {
            return $noticia;
        }
    }
    return false;
}
// -------- FIM PRESTADOR

?>
