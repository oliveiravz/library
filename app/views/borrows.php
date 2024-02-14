<?php
$this->layout(
    'master',
    [
        'title' => "$title"
    ]
);
?>

<h1>Empréstimos de Livros</h1>
<a href="/"> Voltar </a>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome Usuário</th>
            <th scope="col">CPF</th>
            <th scope="col">Livro</th>
            <th scope="col">Data Empréstimo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $value) { ?>
            <tr>
                <td><?=$value["name"]?></td>
                <td><?=$value["cpf"]?></td>
                <td><?=$value["book"]?></td>
                <td><?=$value["created_at"]?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>