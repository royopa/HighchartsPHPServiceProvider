<?php

/*
 * This file is a service provider for the Silex framework of the Respect/Validation Project.
 *
 * @author Rodrigo Prado de Jesus <royopa@gmail.com>
 *
 */

namespace Royopa\Silex\Provider\Ghunti\HighchartsPHP;

use Silex\Application;

/**
 * HighchartsPHPServiceProviderTest
 */
class HighchartsPHPServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Application();
        $app->register(new HighchartsPHPServiceProvider());
        //$this->assertInstanceOf('Respect\Validation\Validator', $app['respect.validator']);
    }
}
