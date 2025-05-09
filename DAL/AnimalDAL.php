<?php

class AnimalDAL
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_animais";

        $this->conexao = new PDO($dsn, 'root', 'root'); //credenciais do DB
    }


    public function insert(AnimalModel $model)
    {
        $sql =
            "INSERT INTO animais(nome, tipo, especie)  
        VALUES (?, ?, ?)"; //string sql

        $pst = $this->conexao->prepare($sql);

        $pst->bindValue(1, $model->nome);
        $pst->bindValue(2, $model->tipo);
        $pst->bindValue(3, $model->especie);

        $pst->execute();
    }

    public function select()
    {
        $sql =
            "SELECT * FROM animais"; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->execute();

        return $pst->fetchAll(PDO::FETCH_CLASS); //Organizar
    }

    public function selectById(int $id)
    {
        include_once "Model/AnimalModel.php";

        $sql = " SELECT * FROM animais WHERE id= ? "; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->bindValue(1, $id);
        $pst->execute();

        return $pst->fetchObject("AnimalModel");
    }

    public function update(AnimalModel $model)
    {
        $sql =
            "UPDATE animais SET nome=?, tipo=?, especie=? WHERE id=? "; //string sql

        $pst = $this->conexao->prepare($sql);

        $pst->bindValue(1, $model->nome);
        $pst->bindValue(2, $model->tipo);
        $pst->bindValue(3, $model->especie);
        $pst->bindValue(4, $model->id);

        $pst->execute();

        return $pst->fetchAll(PDO::FETCH_CLASS); //Organizar
    }

    public function delete(int $id)
    {
        $sql =
            "DELETE FROM animais WHERE id = ?"; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
    }
}
