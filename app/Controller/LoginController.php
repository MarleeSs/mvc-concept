<?php

namespace Belajar\Mvc\Controller;

use Belajar\Mvc\App\View;

class LoginController
{
    public function index(): void
    {
        $model = [
            'title' => 'Login',
            'content' => 'Login Page'
        ];
        View::render('Login/index', $model);
    }
}