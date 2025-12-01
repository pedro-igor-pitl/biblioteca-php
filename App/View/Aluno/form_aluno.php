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
        <h1>Cadastro de Aluno</h1>
    </div>

    <form action="/aluno/cadastro" method="POST" class="p-5">

        <input name="id" type="hidden" value="<?= $model->Id ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" value="<?= $model->Nome ?>" class="form-control" name="nome" id="nome">
        </div>

        <div class="mb-3">
            <label for="ra" class="form-label">RA: </label>
            <input type="text" value="<?= $model->RA ?>" class="form-control" name="ra" id="ra">
        </div>

        <div class="mb-3">
            <label for="curso" class="form-label">Curso: </label>
            <input type="text" value="<?= $model->Curso ?>" class="form-control" name="curso" id="curso">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>