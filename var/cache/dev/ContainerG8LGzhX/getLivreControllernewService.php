<?php

namespace ContainerG8LGzhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivreControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d9J2zYi.App\Controller\LivreController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d9J2zYi.App\\Controller\\LivreController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.d9J2zYi.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.d9J2zYi": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create an instantiable class that implements this interface?'],
        ], [
            'entityManager' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]))->withContext('App\\Controller\\LivreController::new()', $container);
    }
}