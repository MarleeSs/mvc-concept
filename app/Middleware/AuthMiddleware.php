<?php

namespace Belajar\Mvc\Middleware;

class AuthMiddleware implements Middleware
{

    function before(): void
    {
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: /login");
            exit();
        }
    }
}