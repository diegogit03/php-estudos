<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br />';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Diego';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'diego@email.com';
}

?>

<p>
    <a href="basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>
