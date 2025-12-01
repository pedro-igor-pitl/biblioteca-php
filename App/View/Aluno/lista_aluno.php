<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Biblioteca - Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div>
        <?php include VIEWS . '/Includes/menu.php' ?>
        <h1>Lista de Alunos</h1>
    </div>

    <a href="/aluno/cadastro">Novo Aluno</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $aluno): ?>
                <tr>
                    <td> <?= $aluno->Id ?> </td>
                    <td> <a href="/aluno/cadastro?id=<?= $aluno->Id ?>"> <?= $aluno->Nome ?> </a> </td>
                    <td> <?= $aluno->Curso ?> </td>
                    <td> <a href="/aluno/delete?id=<?= $aluno->Id ?>"> Remover </a> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>