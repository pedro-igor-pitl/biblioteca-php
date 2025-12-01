<?php

use App\Controller\{
    AlunoController,
    InicialController
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        InicialController::index();
        break;

    case '/aluno':
        AlunoController::listar();
        break;

    case '/aluno/cadastro':
        AlunoController::cadastro();
        break;

    case '/aluno/delete':
        AlunoController::delete();
        break;
}
