<?php

$config = require __DIR__ . '/config.php';

$config['debug'] = true;
$config['monolog.level'] = \Psr\Log\LogLevel::DEBUG;

return $config;
