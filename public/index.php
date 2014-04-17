<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/config.php';

$app = new \Slim\Slim([
    'templates.path' => VIEW_DIR,
    'debug' => DEBUG,
    ]);

$app->get('/', function () use ($app) {
    $app->render('index.html');
});

$app->run();
