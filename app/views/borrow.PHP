<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);
?>
<h1>Emprestar Livro</h1>

<div class="container">
    <form method="POST" action="/borrow">
        <div class="form-group">
            <label for="name">Nome do usuário</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="category">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label for="category">Livro</label>
            <select class="custom-select" name="book" id="book">
                <option selected>Selecione</option>
                <?php foreach ($data as $key => $book) { ?>
                    <option value="<?=$book['id']?>"><?=$book['name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
<br>
<a href="/">Voltar</a>

<?= $this->start('borrowJs')?>
    <script>

        $(function() {
            
            $(document).ready(function () {

                var selectElement = $('#books');

                selectElement.on('change', function () {
                    var selectedOptions = $(this).val();
                    console.log('Opções selecionadas:', selectedOptions);
                });
            });
        });
    </script>
<?= $this->stop()?>
