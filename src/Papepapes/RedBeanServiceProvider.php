<?php

namespace Papepapes;

use Silex\Application;
use Silex\ServiceProviderInterface;
use RedBean_Facade as R;

/**
 * A RedBean ORM service provider for Silex
 *
 * @author Mamadou GUEYE <papepapes@gmail.com>
 * @link http://silex.sensiolabs.org/doc/providers.html#creating-a-provider Creating a provider
 */
class RedBeanServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        
    }

    public function boot(Application $app)
    {
    	$dsn = $app['rb.database.dsn'] ? $app['rb.database.dsn'] : '';
    	$db_user = $app['rb.database.user'] ? $app['rb.database.user'] : '';
    	$db_password = $app['rb.database.password'] ? $app['rb.database.password'] : '';
        
        if($dsn === '')
                R::setup();
            else
                R::setup($dsn, $db_user, $db_password);

        $app['rb'] = $app->protect(function(){
        	return new R();
        });
    }
}
