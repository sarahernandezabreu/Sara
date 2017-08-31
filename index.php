<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return 'Sara Hernandez Abreu 415150903 ';
});

$app->run();