<?php

namespace Belajar\Mvc\App;

class View
{

    public static function render(string $view, array $model = []): void
    {
        extract($model);
        require __DIR__ . "/../View/$view.php";
    }

}