<?php

namespace Container8dSN1N9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.authenticator.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AuthenticatorManagerListener.php';

        return $container->privates['security.firewall.authenticator.main'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(($container->privates['security.authenticator.manager.main'] ?? $container->load('getSecurity_Authenticator_Manager_MainService')));
    }
}