<?php
    $this->layout(
        'master', 
        [
            'title' => "$title"
        ]
    );
?>

<?= $this->start('homeCss')?>
    <link rel="stylesheet" href="assets/css/home.css">
<?= $this->stop()?>

<h1>Biblicoteca Univem</h1>
<div class="buttons">
    <a href="/register" class="btn btn-primary btn-large button">Cadastrar um livro</a>
    <a href="/borrow" class="btn btn-primary btn-large button">Emprestar um Livro</a>
</div>