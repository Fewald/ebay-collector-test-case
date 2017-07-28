<?php
chdir(__DIR__ . "/ebay-collector-test-case");

/** @var \Silex\Application $app */
$app = require_once("bootstrap.php");
$app->run();