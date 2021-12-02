<?php

namespace ContainerY4iEBoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_MimeBodyRendererService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.mime_body_renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Mime\BodyRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Mime/BodyRenderer.php';

        return $container->privates['twig.mime_body_renderer'] = new \Symfony\Bridge\Twig\Mime\BodyRenderer(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
