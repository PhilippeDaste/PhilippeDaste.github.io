<?php
namespace App\Controller;

class MainController extends CoreController {
    public function home() {
        // TODO : rendre le template home
        $this->render('main/home');
    }
}