<?php

namespace ContainerSl6Q14A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePasswordFormService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ChangePasswordForm' shared autowired service.
     *
     * @return \App\Form\ChangePasswordForm
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ChangePasswordForm'] = new \App\Form\ChangePasswordForm();
    }
}