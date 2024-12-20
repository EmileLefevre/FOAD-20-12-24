<?php

namespace ContainerG8LGzhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DSafKdiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DSafKdi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DSafKdi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\CategoryController::index()', 'getCategoryControllerindexService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\CategoryController::new()', 'getCategoryControllernewService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.ZAUGEyP.App\\Controller\\CategoryController::show()', 'getCategoryControllershowService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.gADJ5td.App\\Controller\\CategoryController::edit()', 'getCategoryControllereditService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.gADJ5td.App\\Controller\\CategoryController::delete()', 'getCategoryControllerdeleteService', true],
            'App\\Controller\\LivreController::index' => ['privates', '.service_locator.wIBhm9E.App\\Controller\\LivreController::index()', 'getLivreControllerindexService', true],
            'App\\Controller\\LivreController::new' => ['privates', '.service_locator.d9J2zYi.App\\Controller\\LivreController::new()', 'getLivreControllernewService', true],
            'App\\Controller\\LivreController::show' => ['privates', '.service_locator.21cI76b.App\\Controller\\LivreController::show()', 'getLivreControllershowService', true],
            'App\\Controller\\LivreController::edit' => ['privates', '.service_locator.VS.1o9e.App\\Controller\\LivreController::edit()', 'getLivreControllereditService', true],
            'App\\Controller\\LivreController::delete' => ['privates', '.service_locator.VS.1o9e.App\\Controller\\LivreController::delete()', 'getLivreControllerdeleteService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.tEL1pRK.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.MTCWnA5.App\\Controller\\CategoryController::index()', 'getCategoryControllerindexService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\CategoryController::new()', 'getCategoryControllernewService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.ZAUGEyP.App\\Controller\\CategoryController::show()', 'getCategoryControllershowService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.gADJ5td.App\\Controller\\CategoryController::edit()', 'getCategoryControllereditService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.gADJ5td.App\\Controller\\CategoryController::delete()', 'getCategoryControllerdeleteService', true],
            'App\\Controller\\LivreController:index' => ['privates', '.service_locator.wIBhm9E.App\\Controller\\LivreController::index()', 'getLivreControllerindexService', true],
            'App\\Controller\\LivreController:new' => ['privates', '.service_locator.d9J2zYi.App\\Controller\\LivreController::new()', 'getLivreControllernewService', true],
            'App\\Controller\\LivreController:show' => ['privates', '.service_locator.21cI76b.App\\Controller\\LivreController::show()', 'getLivreControllershowService', true],
            'App\\Controller\\LivreController:edit' => ['privates', '.service_locator.VS.1o9e.App\\Controller\\LivreController::edit()', 'getLivreControllereditService', true],
            'App\\Controller\\LivreController:delete' => ['privates', '.service_locator.VS.1o9e.App\\Controller\\LivreController::delete()', 'getLivreControllerdeleteService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.tEL1pRK.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\LivreController::index' => '?',
            'App\\Controller\\LivreController::new' => '?',
            'App\\Controller\\LivreController::show' => '?',
            'App\\Controller\\LivreController::edit' => '?',
            'App\\Controller\\LivreController::delete' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\LivreController:index' => '?',
            'App\\Controller\\LivreController:new' => '?',
            'App\\Controller\\LivreController:show' => '?',
            'App\\Controller\\LivreController:edit' => '?',
            'App\\Controller\\LivreController:delete' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:delete' => '?',
        ]);
    }
}
