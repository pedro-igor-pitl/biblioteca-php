<?php

namespace App\DAO;

use App\Model\Aluno;

class AlunoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    public function save(Aluno $model): Aluno
    {
        return ($model->Id == null) ? $this->insert($model) : $this->update($model);
    }

    public function insert(Aluno $model): Aluno
    {
        $sql = "INSERT INTO  aluno (Nome, RA, Curso) VALUES (?, ?, ?)";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->execute();

        $model->Id = parent::$conexao->lastInsertId();

        return $model;
    }

    public function update(Aluno $model): Aluno
    {
        $sql = "UPDATE aluno SET Nome=?, RA=?, Curso=? WHERE Id=?";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->bindValue(4, $model->Id);
        $stmt->execute();

        return $model;
    }

    public function selectById(int $Id): ?Aluno
    {
        $sql = "SELECT * FROM aluno WHERE Id=?";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\Aluno");
    }

    public function select(): array
    {
        $sql = "SELECT * FROM aluno";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Aluno");
    }

    public function delete(int $Id): bool
    {
        $sql = "DELETE FROM aluno WHERE Id=?";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        return $stmt->execute();
    }
}
