<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Belajar\Mvc\App\Router;
use Belajar\Mvc\Controller\HomeController;
use Belajar\Mvc\Controller\ProductController;
use Belajar\Mvc\Controller\DataController;
use Belajar\Mvc\Middleware\AuthMiddleware;
use Belajar\Mvc\Controller\LoginController;

Router::get('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::get("GET", "/", HomeController::class, "index");
Router::get("GET", "/login", LoginController::class, "index");
Router::get("GET", "/data", DataController::class, "index", [AuthMiddleware::class]);
Router::run();
