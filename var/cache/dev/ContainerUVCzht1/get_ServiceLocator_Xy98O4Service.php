<?php

namespace ContainerUVCzht1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xy98O4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xy98O4_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xy98O4_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie_id' => ['privates', '.errored..service_locator.xy98O4_.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.xy98O4_": it needs an instance of "App\\Entity\\Categorie" but this type has been excluded in "config/services.yaml".'],
        ], [
            'categorie_id' => 'App\\Entity\\Categorie',
        ]);
    }
}
