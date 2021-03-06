<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerDhk7NBO/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerDhk7NBO/getSessionService.php';
require __DIR__.'/ContainerDhk7NBO/getServicesResetterService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerDhk7NBO/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerDhk7NBO/getSecrets_VaultService.php';
require __DIR__.'/ContainerDhk7NBO/getRouting_LoaderService.php';
require __DIR__.'/ContainerDhk7NBO/getErrorControllerService.php';
require __DIR__.'/ContainerDhk7NBO/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerDhk7NBO/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerDhk7NBO/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerDhk7NBO/getDebug_Security_Access_DecisionManagerService.php';
require __DIR__.'/ContainerDhk7NBO/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerDhk7NBO/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerDhk7NBO/getCache_SystemClearerService.php';
require __DIR__.'/ContainerDhk7NBO/getCache_SystemService.php';
require __DIR__.'/ContainerDhk7NBO/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerDhk7NBO/getCache_AppClearerService.php';
require __DIR__.'/ContainerDhk7NBO/getCache_AppService.php';
require __DIR__.'/ContainerDhk7NBO/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerDhk7NBO/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerDhk7NBO/getTemplateControllerService.php';
require __DIR__.'/ContainerDhk7NBO/getRedirectControllerService.php';
require __DIR__.'/ContainerDhk7NBO/getFizzBuzzService.php';
require __DIR__.'/ContainerDhk7NBO/getFibonacciService.php';
require __DIR__.'/ContainerDhk7NBO/getTestTwoControllerService.php';
require __DIR__.'/ContainerDhk7NBO/getTestThreeControllerService.php';
require __DIR__.'/ContainerDhk7NBO/getTestOneControllerService.php';
require __DIR__.'/ContainerDhk7NBO/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerDhk7NBO/get_ServiceLocator_CODfIm4Service.php';
require __DIR__.'/ContainerDhk7NBO/get_ServiceLocator_W9y3dzmService.php';
require __DIR__.'/ContainerDhk7NBO/get_ServiceLocator_NCeb8htService.php';
require __DIR__.'/ContainerDhk7NBO/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerDhk7NBO/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerDhk7NBO/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerDhk7NBO/get_Container_Private_Security_AuthorizationCheckerService.php';
require __DIR__.'/ContainerDhk7NBO/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerDhk7NBO/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\TestOneController';
$classes[] = 'App\Controller\TestThreeController';
$classes[] = 'App\Controller\TestTwoController';
$classes[] = 'App\Security\Fibonacci';
$classes[] = 'App\Security\FizzBuzz';
$classes[] = 'App\Security\UserProvider';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Authentication\NoopAuthenticationManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
Preloader::preload($classes);
