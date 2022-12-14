<?php

namespace Belajar\Mvc\Controller;

use Belajar\Mvc\App\View;

class HomeController
{
    public function index(): void
    {
        $model = [
            'title' => 'Home',
            'content' => 'Home Page'
        ];
        View::render('Home/index', $model);
    }
}