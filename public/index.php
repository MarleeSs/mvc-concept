<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Belajar\Mvc\App\Router;
use Belajar\Mvc\Controller\HomeController;

Router::get("GET", "/", HomeController::class, "index");
Router::get("GET", "/hello", HomeController::class, "hello");
Router::get("GET", "/world", HomeController::class, "world");
Router::run();