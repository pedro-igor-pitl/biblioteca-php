<?php

namespace App\Model;

use App\DAO\AlunoDAO;

final class Aluno
{
    public $Id;
    public $Nome;
    public $RA;
    public $Curso;

    function save(): Aluno
    {
        return (new AlunoDAO())->save($this);
    }

    function getById(int $Id): ?Aluno
    {
        return (new AlunoDAO())->selectById($Id);
    }

    function getAllRows(): array
    {
        return (new AlunoDAO())->select();
    }

    function delete(int $Id): bool
    {
        return (new AlunoDAO())->delete($Id);
    }
}
