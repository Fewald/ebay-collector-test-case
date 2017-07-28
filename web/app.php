<?php
chdir(__DIR__ . "/..");

/** @var \Silex\Application $app */
$app = require_once("bootstrap.php");
$app->run();