<div class="titulo">Download</div>

<?php

$arquivos = $_SESSION['arquivos'] ?? [];
if ($_FILES && $_FILES['arquivo']) {
    $pastaUpload = __DIR__ . '/uploads/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo '<br/>Arquivo valido e enviado com sucesso.';
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    } else {
        echo '<br/>Erro no upload do arquivo!';
    }
}

?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
    <li>
        <?php if(stripos($arquivo, '.png')): ?>
            <img src="api/uploads/<?= $arquivo ?>"/>
        <?php endif ?>
    </li>
    <?php endforeach ?>
</ul>
