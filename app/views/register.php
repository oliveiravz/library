<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);

?>

<h1>Registrar Livro</h1>

<?php if(strlen($message)) {?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php } ?>
<form action="/register" method="POST" class="row g-3">
    <div class="col-md-6">
        <label for="nome_livro" class="form-label">Nome do Livro</label>
        <input type="text" class="form-control" name="name" id="name" value="Senhor do Anéis">
    </div>
    <div class="col-md-6">
        <label for="genero" class="form-label">Gênero</label>
        <input type="text" class="form-control" name="category" id="category" value="Fantasia">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<a href="/">Voltar</a>