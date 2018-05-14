<?php
//inclui o autoloader do Composer
require 'vendor/autoload.php';

//inclui o arquivo de inicialização
require 'init.php';

//instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento)
$app = new \Slim\App([ 'settings' => [
'displayErrorDetails' => true
    ]
]);

// página inicial
// listagem de usuários
$app->get('/', function ()
{
    echo 'listar';
});


// adição de usuário
// exibe o formulário de cadastro
$app->get('/add', function ()
{
    echo 'adicionar';
});

// processa o formulário de cadastro
$app->post('/add', function ()
{
    echo 'adicionar';
});


// edição de usuário
// exibe o formulário de edição
$app->get('/edit/{id}', function ($request)
{
    echo 'editar';
});

// processa o formulário de edição
$app->post('/edit', function ()
{
    echo 'editar';
});

// remove um usuário
$app->get('/remove/{id}', function ($request)
{
    echo 'remover';
});

$app->run();