<?php

namespace Communication;

use Silex\Provider\MonologServiceProvider;

class Application
{
    public function create(array $config)
    {
        $application = new \Silex\Application($config);

        $this->registerProviders($application);
        $this->registerRoutes($application);

        return $application;
    }

    private function registerProviders(\Silex\Application $application)
    {
        $application->register(new MonologServiceProvider(), [
            'monolog.name' => $application['monolog.name']
        ]);
    }

    private function registerRoutes(\Silex\Application $application)
    {
        $application->post('/sms', 'Communication\Producer\Controller\SmsController::saveMessage');
    }
}
