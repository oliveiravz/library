<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);

?>

<h1>Registrar Livro</h1>

<?php if (isset($message) && strlen($message) > 0) { ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php } ?>

<div class="container">
    <form method="POST" action="/register">
        <div class="form-group">
            <label for="name">Nome do Livro</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
    </form>
</div>
<br>
<a href="/">Voltar</a>