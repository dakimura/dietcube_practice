<?php
/**
 *
 */

namespace DietcubePractice;

use Dietcube\Application as DCApplication;
use DietcubePractice\Service\OmikujiService;
use DietcubePractice\Service\SampleService;
use Pimple\Container;

class Application extends DCApplication
{
    public function init(Container $container)
    {
        // do something before boot
    }

    public function config(Container $container)
    {
        // setup container or services here
        $container['service.sample'] = function () use ($container) {
            $sample_service = new SampleService();
            $sample_service->setLogger($container['logger']);

            return $sample_service;
        };

        $container['service.omikuji'] = function () use ($container) {
            $omikuji_service = new OmikujiService();
            $omikuji_service->setLogger($container['logger']);

            return $omikuji_service;
        };
    }


}
