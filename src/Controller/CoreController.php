<?php

namespace App\Controller;

class CoreController {
    public function render(string $viewName, array $viewData = []) {

        /*
        Avant extract, on a un tableau :
        $viewData = [
            'articlesList' => $articlesList,
            'baseUri' => $_SERVER['BASE_URI']
        ]
        */
        extract($viewData);
        /*
        Après extract, on a des variables qui ont été sorties du tableau :

        $articlesList = $articlesList;
        $baseUri = $_SERVER['BASE_URI']

        => il faudra donc appeler les variables de $viewData ainsi : $articlesList, ou $baseUri, et pas $viewData['articlesList'] etc...
        */

        require_once __DIR__.'/../templates/layout/header.tpl.php';
        require_once __DIR__."/../templates/$viewName.tpl.php";
        require_once __DIR__.'/../templates/layout/footer.tpl.php';
    }
}