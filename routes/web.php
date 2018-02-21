<?php

use App\Controllers\HomeController;

$app->get('/', HomeController::class . ':index')->setName('home');
$app->post('/', HomeController::class . ':post');
