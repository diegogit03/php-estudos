<div class="titulo">Upload</div>

<?php

print_r($_FILES);

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = __DIR__ . '/uploads/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)) {
        echo '<br/>Arquivo valido e enviado com sucesso.';
    } else {
        echo '</br>Erro no upload do arquivo!';
    }
}

?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
