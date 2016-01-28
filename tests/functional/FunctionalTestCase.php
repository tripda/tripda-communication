<?php

namespace Test;

use Silex\WebTestCase;

class FunctionalTestCase extends WebTestCase
{
    public function createApplication()
    {
        $config = $this->getConfig();

        $app = (new \Communication\Application)->create($config);

        $app['exception_handler']->disable();

        return $app;
    }

    private function getConfig()
    {
        return require __DIR__ . '/../../config/config.test.php';
    }
}
