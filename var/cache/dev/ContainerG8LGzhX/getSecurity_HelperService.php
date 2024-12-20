<?php

namespace ContainerG8LGzhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_HelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security.php';

        return $container->privates['security.helper'] = new \Symfony\Bundle\SecurityBundle\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.authenticator.managers_locator' => ['privates', 'security.authenticator.managers_locator', 'getSecurity_Authenticator_ManagersLocatorService', true],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.user_checker_locator' => ['privates', 'security.user_checker_locator', 'getSecurity_UserCheckerLocatorService', true],
            'security.firewall.event_dispatcher_locator' => ['privates', 'security.firewall.event_dispatcher_locator', 'getSecurity_Firewall_EventDispatcherLocatorService', true],
            'security.csrf.token_manager' => ['privates', 'security.csrf.same_origin_token_manager', 'getSecurity_Csrf_SameOriginTokenManagerService', false],
        ], [
            'security.token_storage' => '?',
            'security.authorization_checker' => '?',
            'security.authenticator.managers_locator' => '?',
            'request_stack' => '?',
            'security.firewall.map' => '?',
            'security.user_checker_locator' => '?',
            'security.firewall.event_dispatcher_locator' => '?',
            'security.csrf.token_manager' => '?',
        ]), ['dev' => NULL, 'main' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Security\\LoginAuthenticator' => ['privates', 'debug.App\\Security\\LoginAuthenticator', 'getLoginAuthenticatorService', true],
            'security.authenticator.remember_me.main' => ['privates', 'debug.security.authenticator.remember_me.main', 'getDebug_Security_Authenticator_RememberMe_MainService', true],
        ], [
            'App\\Security\\LoginAuthenticator' => '?',
            'security.authenticator.remember_me.main' => '?',
        ])]);
    }
}