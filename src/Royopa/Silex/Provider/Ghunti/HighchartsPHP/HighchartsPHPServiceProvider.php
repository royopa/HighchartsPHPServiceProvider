<?php

/*
 * This file is a service provider for the Silex framework of the Respect/Validation Project.
 *
 * @author Rodrigo Prado de Jesus <royopa@gmail.com>
 *
 */

namespace Royopa\Silex\Provider\Ghunti\HighchartsPHP;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartOption;
use Ghunti\HighchartsPHP\HighchartJsExpr;

/**
 * HighchartsPHPServiceProvider
 */
class HighchartsPHPServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Application $app)
    {
        $app['highchart'] = $app->share(function ($app) {
            return new Highchart();
        });

        $app['highchart.option'] = $app->share(function ($app) {
            return new HighchartOption();
        });

        $app['highchart.jsexpr'] = $app->share(function ($app) {
            return new HighchartJsExpr();
        });
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    public function boot(Application $app)
    {
    }
}
