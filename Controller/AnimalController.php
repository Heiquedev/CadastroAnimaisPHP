<?php

class AnimalController
{
    public static function index()
    {
        include 'Model/AnimalModel.php';
        $model = new AnimalModel();
        $model->getAllRows();
        include "View/modulos/Animal/ListaAnimal.php";
        
    }

    public static function save()
    {
        //var_dump($_POST);
        //exit;
        include 'Model/AnimalModel.php'; // inclui a model para transportar o animal

        $model = new AnimalModel(); // instancia o objeto

        $model->id = $_POST["id"];
        $model->nome = $_POST["nome"];
        $model->tipo = $_POST["tipo"];
        $model->especie = $_POST["especie"];

        $model->save(); // salva o animal

        header("Location: /animal");
    }

    public static function form()
    {
        include "Model/AnimalModel.php";

        $model = new AnimalModel();

        if (isset($_GET['id'])) {
            $model = $model->getById((int)$_GET['id']);
        }
        include 'View/modulos/Animal/FormAnimal.php';

        // var_dump($model);
    }

    public static function delete()
    {
        //var_dump($_POST);
        //exit;
        include 'Model/AnimalModel.php'; // inclui a model para transportar o animal

        $model = new AnimalModel(); // instancia o objeto
        $model->delete((int) $_GET['id']); //deleta o animal

        header("Location: /animal");
    }
}
