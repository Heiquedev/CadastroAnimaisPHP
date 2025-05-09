<?php

class AnimalModel
{
    public $id, $nome, $tipo, $especie, $rows;

    public function getAllRows()
    {
        include "DAL/AnimalDAL.php"; // conexao com a DAO

        $dal = new AnimalDAL();
        $this->rows = $dal->select();
    }

    public function save()
    {
        include "DAL/AnimalDAL.php"; // conexao com a DAO

        $dal = new AnimalDAL();

        if (empty($this->id)) {
            $dal->insert($this);
        } else {
            $dal->update($this);
        }
    }

    public function getById(int $id)
    {
        include "DAL/AnimalDAL.php";

        $dal = new AnimalDAL();
        $obj = $dal->selectById($id);

        return ($obj) ? $obj : new AnimalModel();

        /*if ($obj) {
                    return $obj;
            } else {
                    return new AnimalModel();
            }*/

        return $dal->selectById($id);
    }

    public function delete(int $id)
    {
        include "DAL/AnimalDAL.php"; // conexao com a DAO
        $dao = new AnimalDAL();
        $dao->delete($id);
    }
}
