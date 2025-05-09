<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>CRUD Animais</title>
</head>

<body class="bg-secondary-subtle">
    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex justify-align-content-around ">
            <a class="btn btn-outline-dark me-2" href="/animal/formanimal">Cadastro</a>
            <a class="btn btn-outline-dark me-2" href="/animal">Ver Lista</a>
        </div>
    </div>
</body>

</html>

<?php

include 'Controller/AnimalController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//echo $url;
//echo "<br>";

switch ($url) {

    case '/':
        echo "<h1 class=' d-flex justify-content-center mt-5'>🏡</h1>";
        break;

    case "/animal":
        AnimalController::index();
        break;

    case '/animal/formanimal':
        AnimalController::form();
        break;

    case '/animal/formanimal/save':
        AnimalController::save();
        break;

    case '/animal/delete':
        AnimalController::delete();
        break;

    default:
        echo "<br>erro 404";
        break;
}
