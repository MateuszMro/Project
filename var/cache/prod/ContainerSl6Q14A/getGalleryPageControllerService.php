<?php

namespace ContainerSl6Q14A;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGalleryPageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\GalleryPageController' shared autowired service.
     *
     * @return \App\Controller\GalleryPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HomeControllers\\GalleryPageController'] = $instance = new \App\Controller\Home\GalleryPageController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\HomeControllers\\GalleryPageController', $container));

        return $instance;
    }
}