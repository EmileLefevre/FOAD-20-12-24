<?php

namespace ContainerG8LGzhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivreControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VS.1o9e.App\Controller\LivreController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.VS.1o9e'] ?? $container->load('get_ServiceLocator_VS_1o9eService'));

        if (isset($container->privates['.service_locator.VS.1o9e.App\\Controller\\LivreController::edit()'])) {
            return $container->privates['.service_locator.VS.1o9e.App\\Controller\\LivreController::edit()'];
        }

        return $container->privates['.service_locator.VS.1o9e.App\\Controller\\LivreController::edit()'] = $a->withContext('App\\Controller\\LivreController::edit()', $container);
    }
}
