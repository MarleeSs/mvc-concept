<?php

namespace Belajar\Mvc\Controller;

use Belajar\Mvc\App\View;

class DataController
{
    public function index(): void
    {
        $model = [
            'title' => 'Data',
            'content' => 'Data Page'
        ];
        View::render('Data/index', $model);
    }
}