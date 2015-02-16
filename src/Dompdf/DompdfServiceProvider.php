<?php

namespace Dompdf;

// disable DOMPDF's internal autoloader if you are using Composer
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once __DIR__.'/../../../../dompdf/dompdf/dompdf_config.inc.php';

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class DompdfServiceProvider
 * @package Dompdf
 * @author Bill'O <ateilhet@gmail.com>
 */
class DompdfServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(Application $app)
    {
        $app['dompdf'] = $app->share(function () use ($app) {
                return new \DOMPDF();
            });
    }

    /**
     * {@inheritDoc}
     */
    // @codeCoverageIgnoreStart
    public function boot(Application $app)
    {
    }
    // @codeCoverageIgnoreEnd
}
