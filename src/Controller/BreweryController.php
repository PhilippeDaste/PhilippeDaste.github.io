<?php
namespace App\Controller;

class BreweryController extends CoreController
{
    public function index()
    {
        $this->render('brewery/index', [
            'pageTitle' => 'Adresses des brasseries',
        ]);
    }
}
