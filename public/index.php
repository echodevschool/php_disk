<?php
session_start();
require_once 'db.php';
require_once '../vendor/autoload.php';

if ($_SERVER['REQUEST_URI'] === '/') {
    $action = new \App\Controller\HomeController();
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
    $action = new \App\Controller\LoginController();
} elseif ($_SERVER['REQUEST_URI'] === '/register') {
    $action = new \App\Controller\RegisterController();
}  elseif ($_SERVER['REQUEST_URI'] === '/lk') {
    $action = new \App\Controller\UserController();
} else {
    Header('', true, 404);
    die();
}

echo $action();