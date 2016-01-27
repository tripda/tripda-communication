<?php

return $config = [
    'debug' => false,
    'monolog.name' => 'communication',
    'monolog.level' => \Psr\Log\LogLevel::ERROR,
    'monolog.logfile' => __DIR__ . '/../log/communication.log',
];
