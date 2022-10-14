<?php

$path = "/";

if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}
require __DIR__ . "/../app/views" . $path . ".php";