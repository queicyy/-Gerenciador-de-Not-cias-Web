<?php

function validaFormNoticias($titulo, $subtitulo, $texto_noticia, $dataPost) {
    $campos_invalidos = [];

    if (!$titulo or strlen($titulo) < 3) {
        $motivo = "";
        if (!$titulo) {
            $motivo = "Titulo não pode ser vazio";
        } else {
            $motivo = "Titulo precisa ser maior que 3 caracteres";
        }
        $campos_invalidos["titulo"] = ["motivo" => $motivo];
    }
    if (!$subtitulo) {
        $campos_invalidos["subtitulo"] = ["motivo" => "Sobrenome não pode ser vazio"];
    }
    

    if ($dataPost) {
        $dataInicio = new DateTime($dataPost);
        $dataAtual = new DateTime();
        

        if ($dataInicio < $dataAtual) {
            $campos_invalidos["dataPost"] = ["motivo" => "Data de Postagem não pode ser menor que a data atual"];
      
    }

}

    

    return $campos_invalidos;
    
}



?>