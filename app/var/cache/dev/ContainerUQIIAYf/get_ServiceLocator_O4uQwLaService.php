<?php

namespace ContainerUQIIAYf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O4uQwLaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o4uQwLa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o4uQwLa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mail' => ['privates', 'App\\Service\\SendMailService', 'getSendMailServiceService', true],
            'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mail' => 'App\\Service\\SendMailService',
            'tokenGenerator' => '?',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
