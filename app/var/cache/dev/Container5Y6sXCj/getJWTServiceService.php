<?php

namespace Container5Y6sXCj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWTServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\JWTService' shared autowired service.
     *
     * @return \App\Service\JWTService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/JWTService.php';

        return $container->privates['App\\Service\\JWTService'] = new \App\Service\JWTService();
    }
}
