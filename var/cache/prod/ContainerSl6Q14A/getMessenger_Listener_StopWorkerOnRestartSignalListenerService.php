<?php

namespace ContainerSl6Q14A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerOnRestartSignalListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($container->privates['cache.messenger.restart_workers_signal'] ?? $container->load('getCache_Messenger_RestartWorkersSignalService')), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
    }
}