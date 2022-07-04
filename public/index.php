<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;

$app = new Application();

$app->get('/', [SiteController::class, 'home']);

$app->get('/contact', [SiteController::class, 'contact']);

$app->post('/contact', [SiteController::class, 'handleContact']);

$app->run();