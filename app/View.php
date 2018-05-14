<?php

namespace app;

class View
{
    /**
     * Exibe uma view.
     * @param  string $viewName   Nome da view, que é o nome do arquivo em lib/views, sem o ".php"
     * @param  array  $customVars (opcional) Array com variáveis que serão usadas na view
     */
    public static function make($viewName, array $customVars = array())
    {
        // cria as variáveis do array $customVars
        extract($customVars);

        // inclui o template, que vai processar a view na variável $viewName
        require_once viewsPath() . 'template.php';
    }
}