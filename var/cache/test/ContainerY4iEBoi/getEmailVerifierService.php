<?php

namespace ContainerY4iEBoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailVerifierService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Security\EmailVerifier' shared autowired service.
     *
     * @return \App\Security\EmailVerifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Security/EmailVerifier.php';

        return $container->privates['App\\Security\\EmailVerifier'] = new \App\Security\EmailVerifier(($container->privates['symfonycasts.verify_email.helper'] ?? $container->load('getSymfonycasts_VerifyEmail_HelperService')), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
