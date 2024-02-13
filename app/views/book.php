<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);
?>

<h1>Livros Cadastrados</h1>
<a href="/"> Voltar </a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Data de Cadastrado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $key => $value) { ?>
            <tr>
                <td><?=$value["name"]?></td>
                <td><?=$value["category"]?></td>
                <td><?=$value["created_at"]?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>