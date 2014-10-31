HighchartsPHPServiceProvider
============================

Provides HighchartsPHP Service Provider to use with Silex microframework.

http://www.goncaloqueiros.net/highcharts.php

Requirements
------------

  - PHP 5.3+
  - Ghunti/HighchartsPHP;

Instalation
-----------

Package available on [Composer](https://packagist.org/packages/royopa/highchartsphp-service-provider). Autoloading with [composer](http://getcomposer.org/) is [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) compatible.

Usage
-----

To use the provider, register `HighchartsPHPServiceProvider`.

```php
<?php
    use Silex\Application;
    use Royopa\Silex\Provider\Ghunti\HighchartsPHP\HighchartsPHPServiceProvider;

    $app = new Application;

    $app->register(new HighchartsPHPServiceProvider());
```

The HighchartsPHP will now be accessible with `highchart` in the app container.

The HighchartOption will now be accessible with `highchart.option` in the app container.

The HighchartJsExpr will now be accessible with `highchart.jsexpr` in the app container.

```php

```

Enjoy!
------
