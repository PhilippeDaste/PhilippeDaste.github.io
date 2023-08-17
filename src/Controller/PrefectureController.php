<?php

namespace App\Controller;

class PrefectureController extends CoreController
{
    public function index()
    {
        $this->render('prefecture/index');
    }

    public function show($name)
    {
        $this->render('prefecture/show', [
            'prefectureName' => $name
        ]);
    }
}
