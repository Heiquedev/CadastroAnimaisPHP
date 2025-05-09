<?php

//echo "Aqui deveria ter uma lista.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Lista de Pessoas</title>
</head>

<body class="bg-secondary-subtle">

    <h2 class="d-flex justify-content-center mt-5">Lista de Animais</h2>
    <div class="d-flex justify-content-center mt-5">
        <table class="table table-striped table-hover w-50">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Espécie</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php foreach ($model->rows as $item): ?>
                <tbody>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->nome ?></td>
                        <td><?= $item->tipo ?></td>
                        <td><?= $item->especie ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-teste">
                                Deletar
                            </button>
                            <div class="modal fade" id="modal-teste" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="avisoEstatico" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="avisoEstatico">Aviso!</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Você realmente deseja deletar esse animal? Ao deletar o animal da 
                                                lista não tera como desfazer está ação. ⚠️⚠️⚠️
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/animal" class="btn btn-dark" data-bs-dismiss="modal-teste" >Fechar</a>
                                            <a href="/animal/delete?id=<?= $item->id ?>" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-dark" href="/animal/formanimal?id=<?= $item->id ?>">Editar</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary w-25" href="/animal/formanimal">Adicionar novo animal</a>
    </div>

    <div class="position-absolute bottom-0 w-100">
        <hr>
        <p class="d-flex justify-content-center">Essa página foi feita pelo dev Heique R. Fuck. Direitos Reservados.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>

</html>