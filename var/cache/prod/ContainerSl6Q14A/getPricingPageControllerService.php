<?php

namespace ContainerSl6Q14A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPricingPageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DefectsController' shared autowired service.
     *
     * @return \App\Controller\DefectsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DefectsController'] = $instance = new \App\Controller\PricingPageController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\DefectsController', $container));

        return $instance;
    }
}