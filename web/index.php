<?php

ini_set('display_errors', 0);

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/config.php';

$app = (new \Communication\Application)->create($config);
$app->run();
