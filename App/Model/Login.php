<?php

namespace App\Model;

use App\DAO\LoginDAO;

final class Login
{
    public $Email;
    public $Senha;
    public $Id;
    public $Nome;

    public function logar(): ?Login
    {
        $model = new LoginDAO();
        return $model->autenticar($this);
    }
}
