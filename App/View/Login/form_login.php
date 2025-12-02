<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Biblioteca - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="/login" method="POST" class="p-5">
        <?= $erro ?>
        <h1>Login</h1>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail: </label>
            <input type="email" value="<?= $model->Email ?>" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha: </label>
            <input type="password" class="form-control" name="senha" id="senha" required>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="lembrar" id="lembrar">
            <label for="lembrar" class="form-label">Lembrar do meu Usuario</label>

        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>