<?php
require_once 'vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\MonologServiceProvider());
$app->register(new Igorw\Silex\ConfigServiceProvider(getcwd() . "/config/config.yml"));
$app->register(new ProductFeedModule\ProductFeedServiceProvider());

return $app;