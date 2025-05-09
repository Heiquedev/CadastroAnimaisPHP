<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="bg-secondary-subtle">

    <div class="d-flex justify-content-center w-100 mt-5">
        <form action="/animal/formanimal/save" method="post" class="mt-5 w-80">
            <h2>Formulário de Animais 😺🐶🐦</h2>
            <div class="mt-5 mb-3 w-60">
                <input type="hidden" name="id" readonly value="<?= $model->id ?>">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $model->nome ?>">
            </div>
            <div class="mt-3 mb-3 w-60">
                <label class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="<?= $model->tipo ?>">
            </div>
            <div class="mt-3 mb-3 w-60 form-label">
                <label class="form-label">Especie:</label>
                <input type="text" class="form-control" id="especie" name="especie" value="<?= $model->especie ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>



</body>

</html>