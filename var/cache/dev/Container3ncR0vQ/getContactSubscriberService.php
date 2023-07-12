<?php

namespace Container3ncR0vQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\ContactSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ContactSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/ContactSubscriber.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\EventSubscriber\\ContactSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\ContactSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\ContactSubscriber'] = new \App\EventSubscriber\ContactSubscriber($a);
    }
}
