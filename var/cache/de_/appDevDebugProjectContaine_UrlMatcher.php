<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContaine_UrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContaine_UrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'MarketingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_login
            if ('/user/login' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_login',);
            }

            // user_logout
            if ('/user/logout' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'user_logout',);
            }

            // user_validation
            if ('/user/validate' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::validationAction',  '_route' => 'user_validation',);
            }

            // user_delete
            if ('/user/delete' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::deleteAction',  '_route' => 'user_delete',);
            }

            // user_register
            if ('/user/register' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
            }

            // user_profil
            if ('/user/profil' === $pathinfo) {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profil',);
            }

        }

        // api_user_all
        if ('/api/user/all' === $pathinfo) {
            return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::getAllAction',  '_route' => 'api_user_all',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/marketing')) {
                // default_index
                if ('/marketing' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'default_index');
                    }

                    return array (  '_controller' => 'MarketingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default_index',);
                }

                if (0 === strpos($pathinfo, '/marketing/modelnewsletter')) {
                    // modelnewsletter_index
                    if ('/marketing/modelnewsletter' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'modelnewsletter_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::indexAction',  '_route' => 'modelnewsletter_index',);
                    }

                    // modelnewsletter_new
                    if ('/marketing/modelnewsletter/new' === $pathinfo) {
                        return array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::newAction',  '_route' => 'modelnewsletter_new',);
                    }

                    // modelnewsletter_show
                    if (preg_match('#^/marketing/modelnewsletter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelnewsletter_show')), array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::showAction',));
                    }

                    // modelnewsletter_edit
                    if (preg_match('#^/marketing/modelnewsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelnewsletter_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::editAction',));
                    }

                    // modelnewsletter_delete
                    if (preg_match('#^/marketing/modelnewsletter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelnewsletter_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/marketing/newsletter')) {
                    if (0 === strpos($pathinfo, '/marketing/newsletterblock')) {
                        // newsletterblock_index
                        if ('/marketing/newsletterblock' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterblock_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::indexAction',  '_route' => 'newsletterblock_index',);
                        }

                        // newsletterblock_new
                        if ('/marketing/newsletterblock/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::newAction',  '_route' => 'newsletterblock_new',);
                        }

                        // newsletterblock_show
                        if (preg_match('#^/marketing/newsletterblock/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblock_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::showAction',));
                        }

                        // newsletterblock_edit
                        if (preg_match('#^/marketing/newsletterblock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblock_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::editAction',));
                        }

                        // newsletterblock_delete
                        if (preg_match('#^/marketing/newsletterblock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblock_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::deleteAction',));
                        }

                        if (0 === strpos($pathinfo, '/marketing/newsletterblocktype')) {
                            // newsletterblocktype_index
                            if ('/marketing/newsletterblocktype' === $trimmedPathinfo) {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newsletterblocktype_index');
                                }

                                return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::indexAction',  '_route' => 'newsletterblocktype_index',);
                            }

                            // newsletterblocktype_new
                            if ('/marketing/newsletterblocktype/new' === $pathinfo) {
                                return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::newAction',  '_route' => 'newsletterblocktype_new',);
                            }

                            // newsletterblocktype_show
                            if (preg_match('#^/marketing/newsletterblocktype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblocktype_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::showAction',));
                            }

                            // newsletterblocktype_edit
                            if (preg_match('#^/marketing/newsletterblocktype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblocktype_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::editAction',));
                            }

                            // newsletterblocktype_delete
                            if (preg_match('#^/marketing/newsletterblocktype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterblocktype_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::deleteAction',));
                            }

                        }

                    }

                    // newsletter_index
                    if ('/marketing/newsletter' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newsletter_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'newsletter_index',);
                    }

                    // newsletter_new
                    if ('/marketing/newsletter/new' === $pathinfo) {
                        return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::newAction',  '_route' => 'newsletter_new',);
                    }

                    // newsletter_show
                    if (preg_match('#^/marketing/newsletter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::showAction',));
                    }

                    // newsletter_edit
                    if (preg_match('#^/marketing/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::editAction',));
                    }

                    // newsletter_delete
                    if (preg_match('#^/marketing/newsletter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::deleteAction',));
                    }

                    // newsletter_download
                    if (preg_match('#^/marketing/newsletter/(?P<id>[^/]++)/(?P<shop>[^/]++)/download$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_download')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::downloadAction',));
                    }

                    if (0 === strpos($pathinfo, '/marketing/newsletterheader')) {
                        // newsletterheader_index
                        if ('/marketing/newsletterheader' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterheader_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::indexAction',  '_route' => 'newsletterheader_index',);
                        }

                        // newsletterheader_new
                        if ('/marketing/newsletterheader/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::newAction',  '_route' => 'newsletterheader_new',);
                        }

                        // newsletterheader_show
                        if (preg_match('#^/marketing/newsletterheader/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterheader_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::showAction',));
                        }

                        // newsletterheader_edit
                        if (preg_match('#^/marketing/newsletterheader/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterheader_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::editAction',));
                        }

                        // newsletterheader_delete
                        if (preg_match('#^/marketing/newsletterheader/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterheader_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/marketing/newslettermenu')) {
                        // newslettermenu_index
                        if ('/marketing/newslettermenu' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newslettermenu_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::indexAction',  '_route' => 'newslettermenu_index',);
                        }

                        // newslettermenu_new
                        if ('/marketing/newslettermenu/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::newAction',  '_route' => 'newslettermenu_new',);
                        }

                        // newslettermenu_show
                        if (preg_match('#^/marketing/newslettermenu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newslettermenu_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::showAction',));
                        }

                        // newslettermenu_edit
                        if (preg_match('#^/marketing/newslettermenu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newslettermenu_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::editAction',));
                        }

                        // newslettermenu_delete
                        if (preg_match('#^/marketing/newslettermenu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newslettermenu_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/marketing/newsletterproduct')) {
                        // newsletterproduct_index
                        if ('/marketing/newsletterproduct' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterproduct_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::indexAction',  '_route' => 'newsletterproduct_index',);
                        }

                        // newsletterproduct_new
                        if ('/marketing/newsletterproduct/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::newAction',  '_route' => 'newsletterproduct_new',);
                        }

                        // newsletterproduct_show
                        if (preg_match('#^/marketing/newsletterproduct/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterproduct_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::showAction',));
                        }

                        // newsletterproduct_edit
                        if (preg_match('#^/marketing/newsletterproduct/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterproduct_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::editAction',));
                        }

                        // newsletterproduct_delete
                        if (preg_match('#^/marketing/newsletterproduct/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterproduct_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/marketing/newsletterprovider')) {
                        // newsletterprovider_index
                        if ('/marketing/newsletterprovider' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterprovider_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::indexAction',  '_route' => 'newsletterprovider_index',);
                        }

                        // newsletterprovider_new
                        if ('/marketing/newsletterprovider/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::newAction',  '_route' => 'newsletterprovider_new',);
                        }

                        // newsletterprovider_show
                        if (preg_match('#^/marketing/newsletterprovider/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterprovider_show')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::showAction',));
                        }

                        // newsletterprovider_edit
                        if (preg_match('#^/marketing/newsletterprovider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterprovider_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::editAction',));
                        }

                        // newsletterprovider_delete
                        if (preg_match('#^/marketing/newsletterprovider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletterprovider_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::deleteAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/marketing/provider')) {
                    // provider_index
                    if ('/marketing/provider' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'provider_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::indexAction',  '_route' => 'provider_index',);
                    }

                    // provider_new
                    if ('/marketing/provider/new' === $pathinfo) {
                        return array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::newAction',  '_route' => 'provider_new',);
                    }

                    // provider_show
                    if (preg_match('#^/marketing/provider/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_show')), array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::showAction',));
                    }

                    // provider_edit
                    if (preg_match('#^/marketing/provider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::editAction',));
                    }

                    // provider_delete
                    if (preg_match('#^/marketing/provider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/marketing/shop')) {
                    if (0 === strpos($pathinfo, '/marketing/shopconfiguration')) {
                        // shopconfiguration_index
                        if ('/marketing/shopconfiguration' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'shopconfiguration_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::indexAction',  '_route' => 'shopconfiguration_index',);
                        }

                        // shopconfiguration_new
                        if ('/marketing/shopconfiguration/new' === $pathinfo) {
                            return array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::newAction',  '_route' => 'shopconfiguration_new',);
                        }

                        // shopconfiguration_show
                        if (preg_match('#^/marketing/shopconfiguration/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'shopconfiguration_show')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::showAction',));
                        }

                        // shopconfiguration_edit
                        if (preg_match('#^/marketing/shopconfiguration/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'shopconfiguration_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::editAction',));
                        }

                        // shopconfiguration_delete
                        if (preg_match('#^/marketing/shopconfiguration/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'shopconfiguration_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::deleteAction',));
                        }

                    }

                    // shop_index
                    if ('/marketing/shop' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shop_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::indexAction',  '_route' => 'shop_index',);
                    }

                    // shop_new
                    if ('/marketing/shop/new' === $pathinfo) {
                        return array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::newAction',  '_route' => 'shop_new',);
                    }

                    // shop_show
                    if (preg_match('#^/marketing/shop/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_show')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::showAction',));
                    }

                    // shop_edit
                    if (preg_match('#^/marketing/shop/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_edit')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::editAction',));
                    }

                    // shop_delete
                    if (preg_match('#^/marketing/shop/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shop_delete')), array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::deleteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/mail_signature')) {
                // image_fin_commande_index
                if ('/mail_signature/image-commande' === $pathinfo) {
                    return array (  '_controller' => 'MailSignatureBundle\\Controller\\ImageCommandeController::indexAction',  '_route' => 'image_fin_commande_index',);
                }

                // mail_signature_index
                if ('/mail_signature' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mail_signature_index');
                    }

                    return array (  '_controller' => 'MailSignatureBundle\\Controller\\MailSignatureController::indexAction',  '_route' => 'mail_signature_index',);
                }

            }

            elseif (0 === strpos($pathinfo, '/moderate_review')) {
                // moderate_review_index
                if ('/moderate_review' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'moderate_review_index');
                    }

                    return array (  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::indexAction',  '_route' => 'moderate_review_index',);
                }

                // moderate_review_order
                if ('/moderate_review/order' === $pathinfo) {
                    return array (  '_format' => 'json',  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::findOrderAction',  '_route' => 'moderate_review_order',);
                }

                // moderate_review_delete
                if ('/moderate_review/deleteReview' === $pathinfo) {
                    return array (  '_format' => 'json',  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::deleteReview',  '_route' => 'moderate_review_delete',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/picture_crawler/search')) {
            // picture_crawler_index
            if ('/picture_crawler/search' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'picture_crawler_index');
                }

                return array (  '_controller' => 'PictureCrawlerBundle\\Controller\\SearchController::indexAction',  '_route' => 'picture_crawler_index',);
            }

            // picture_crawler_ajax
            if ('/picture_crawler/search/submit' === $pathinfo) {
                return array (  '_controller' => 'PictureCrawlerBundle\\Controller\\SearchController::routeAction',  '_route' => 'picture_crawler_ajax',);
            }

        }

        elseif (0 === strpos($pathinfo, '/faulty')) {
            if (0 === strpos($pathinfo, '/faulty/faulty')) {
                // faulty_download
                if ('/faulty/faulty/download' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_download;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::csvAction',  '_route' => 'faulty_download',);
                }
                not_faulty_download:

                // faulty_index
                if ('/faulty/faulty' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'faulty_index');
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::indexAction',  '_route' => 'faulty_index',);
                }
                not_faulty_index:

                // faulty_new
                if ('/faulty/faulty/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_faulty_new;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::newAction',  '_route' => 'faulty_new',);
                }
                not_faulty_new:

                // faulty_show
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_show')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::showAction',));
                }
                not_faulty_show:

                // faulty_edit
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_faulty_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_edit')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::editAction',));
                }
                not_faulty_edit:

                // faulty_delete_bybutton
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_delete_bybutton')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::delete_bybuttonAction',));
                }

                // faulty_delete
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_faulty_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_delete')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::deleteAction',));
                }
                not_faulty_delete:

                if (0 === strpos($pathinfo, '/faulty/faultymail')) {
                    // faultymail_index
                    if ('/faulty/faultymail' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_faultymail_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'faultymail_index');
                        }

                        return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::indexAction',  '_route' => 'faultymail_index',);
                    }
                    not_faultymail_index:

                    // faultymail_new
                    if ('/faulty/faultymail/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_faultymail_new;
                        }

                        return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::newAction',  '_route' => 'faultymail_new',);
                    }
                    not_faultymail_new:

                    // faultymail_show
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_faultymail_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_show')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::showAction',));
                    }
                    not_faultymail_show:

                    // faultymail_edit
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_faultymail_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_edit')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::editAction',));
                    }
                    not_faultymail_edit:

                    // faultymail_delete
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_faultymail_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_delete')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::deleteAction',));
                    }
                    not_faultymail_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/faulty/prestashop')) {
                // faulty_prestashop_search_product
                if (preg_match('#^/faulty/prestashop/(?P<search>[^/]++)/product/search$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_prestashop_search_product')), array (  '_controller' => 'FaultyProductBundle\\Controller\\PrestashopController::searchProductAction',));
                }

                // faulty_prestashop_product
                if (preg_match('#^/faulty/prestashop/(?P<id>[^/]++)/product$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_prestashop_product')), array (  '_controller' => 'FaultyProductBundle\\Controller\\PrestashopController::indexAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/faulty/supplier')) {
                // faulty_supplier_declare
                if (0 === strpos($pathinfo, '/faulty/supplier/declare') && preg_match('#^/faulty/supplier/declare/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_supplier_declare;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_supplier_declare')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::newAction',));
                }
                not_faulty_supplier_declare:

                // faulty_supplier_camalo
                if ('/faulty/supplier/camalo' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_supplier_camalo;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::showCamaloAction',  '_route' => 'faulty_supplier_camalo',);
                }
                not_faulty_supplier_camalo:

                // faulty_status_supplier
                if (preg_match('#^/faulty/supplier/(?P<supplier>[^/]++)/from/(?P<from>[^/]++)/to/(?P<to>[^/]++)/return/(?P<return>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_status_supplier;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_status_supplier')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::changeFaultyStatusBySupplierAction',));
                }
                not_faulty_status_supplier:

                // faulty_status_faulty
                if (0 === strpos($pathinfo, '/faulty/supplier/id') && preg_match('#^/faulty/supplier/id/(?P<faulty>[^/]++)/to/(?P<to>[^/]++)/return/(?P<return>[^/]++)/supplier/(?P<supplier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_faulty_status_faulty;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_status_faulty')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::changeOneFaultyStatusBySupplierAction',));
                }
                not_faulty_status_faulty:

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/shop')) {
                // carousel_index
                if ('/shop/carousel' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'carousel_index');
                    }

                    return array (  '_controller' => 'ShopBundle\\Controller\\CarouselController::indexAction',  '_route' => 'carousel_index',);
                }

                if (0 === strpos($pathinfo, '/shop/carousel_')) {
                    if (0 === strpos($pathinfo, '/shop/carousel_picture')) {
                        // carousel_picture_index
                        if ('/shop/carousel_picture' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'carousel_picture_index');
                            }

                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::indexAction',  '_route' => 'carousel_picture_index',);
                        }

                        // carousel_picture_new
                        if ('/shop/carousel_picture/new' === $pathinfo) {
                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::newAction',  '_route' => 'carousel_picture_new',);
                        }

                        // carousel_picture_show
                        if (preg_match('#^/shop/carousel_picture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_picture_show')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::showAction',));
                        }

                        // carousel_picture_edit
                        if (preg_match('#^/shop/carousel_picture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_picture_edit')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::editAction',));
                        }

                        // carousel_picture_delete
                        if (preg_match('#^/shop/carousel_picture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_picture_delete')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/shop/carousel_product')) {
                        // carousel_product_index
                        if ('/shop/carousel_product' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'carousel_product_index');
                            }

                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::indexAction',  '_route' => 'carousel_product_index',);
                        }

                        // carousel_product_new
                        if ('/shop/carousel_product/new' === $pathinfo) {
                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::newAction',  '_route' => 'carousel_product_new',);
                        }

                        // carousel_product_show
                        if (preg_match('#^/shop/carousel_product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_product_show')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::showAction',));
                        }

                        // carousel_product_edit
                        if (preg_match('#^/shop/carousel_product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_product_edit')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::editAction',));
                        }

                        // carousel_product_delete
                        if (preg_match('#^/shop/carousel_product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_product_delete')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::deleteAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/shop/carousel_video')) {
                        // carousel_video_index
                        if ('/shop/carousel_video' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'carousel_video_index');
                            }

                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::indexAction',  '_route' => 'carousel_video_index',);
                        }

                        // carousel_video_new
                        if ('/shop/carousel_video/new' === $pathinfo) {
                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::newAction',  '_route' => 'carousel_video_new',);
                        }

                        // carousel_video_show
                        if (preg_match('#^/shop/carousel_video/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_video_show')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::showAction',));
                        }

                        // carousel_video_edit
                        if (preg_match('#^/shop/carousel_video/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_video_edit')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::editAction',));
                        }

                        // carousel_video_delete
                        if (preg_match('#^/shop/carousel_video/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_video_delete')), array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::deleteAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/shop/prestashop')) {
                    // prestashop_search_product
                    if (preg_match('#^/shop/prestashop/(?P<search>[^/]++)/product/search$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestashop_search_product')), array (  '_controller' => 'ShopBundle\\Controller\\PrestashopController::searchProductAction',));
                    }

                    // prestashop_product
                    if (preg_match('#^/shop/prestashop/(?P<id>[^/]++)/product$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestashop_product')), array (  '_controller' => 'ShopBundle\\Controller\\PrestashopController::indexAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/shop/shopconfiguration')) {
                    // carousel_shopconfiguration_index
                    if ('/shop/shopconfiguration' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_carousel_shopconfiguration_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'carousel_shopconfiguration_index');
                        }

                        return array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::indexAction',  '_route' => 'carousel_shopconfiguration_index',);
                    }
                    not_carousel_shopconfiguration_index:

                    // carousel_shopconfiguration_new
                    if ('/shop/shopconfiguration/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carousel_shopconfiguration_new;
                        }

                        return array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::newAction',  '_route' => 'carousel_shopconfiguration_new',);
                    }
                    not_carousel_shopconfiguration_new:

                    // carousel_shopconfiguration_show
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_carousel_shopconfiguration_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_show')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::showAction',));
                    }
                    not_carousel_shopconfiguration_show:

                    // carousel_shopconfiguration_edit
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carousel_shopconfiguration_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_edit')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::editAction',));
                    }
                    not_carousel_shopconfiguration_edit:

                    // carousel_shopconfiguration_delete
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_carousel_shopconfiguration_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_delete')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::deleteAction',));
                    }
                    not_carousel_shopconfiguration_delete:

                }

                elseif (0 === strpos($pathinfo, '/shop/showing')) {
                    // showing_index
                    if (0 === strpos($pathinfo, '/shop/showing/show') && preg_match('#^/shop/showing/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'showing_index')), array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::indexAction',));
                    }

                    // showing_list
                    if ('/shop/showing/list' === $pathinfo) {
                        return array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::listAction',  '_route' => 'showing_list',);
                    }

                    // showing_api_blog
                    if ('/shop/showing/api/blog' === $pathinfo) {
                        return array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::apiFeedBlog',  '_route' => 'showing_api_blog',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/service_client')) {
                // cm_serviceclient_api_getsolutionmail
                if (0 === strpos($pathinfo, '/service_client/solution_mail') && preg_match('#^/service_client/solution_mail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cm_serviceclient_api_getsolutionmail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cm_serviceclient_api_getsolutionmail')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getSolutionMailAction',));
                }
                not_cm_serviceclient_api_getsolutionmail:

                if (0 === strpos($pathinfo, '/service_client/branch')) {
                    if (0 === strpos($pathinfo, '/service_client/branche')) {
                        // cm_serviceclient_api_getbranch
                        if (preg_match('#^/service_client/branche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_cm_serviceclient_api_getbranch;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cm_serviceclient_api_getbranch')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBranchAction',));
                        }
                        not_cm_serviceclient_api_getbranch:

                        // cm_serviceclient_api_getbranchparent
                        if ('/service_client/branche_parent' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_cm_serviceclient_api_getbranchparent;
                            }

                            return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBranchParentAction',  '_route' => 'cm_serviceclient_api_getbranchparent',);
                        }
                        not_cm_serviceclient_api_getbranchparent:

                        // cm_serviceclient_api_getbranchebynom
                        if (0 === strpos($pathinfo, '/service_client/branche_nom') && preg_match('#^/service_client/branche_nom/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_cm_serviceclient_api_getbranchebynom;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cm_serviceclient_api_getbranchebynom')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBrancheByNomAction',));
                        }
                        not_cm_serviceclient_api_getbranchebynom:

                    }

                    // branch_index
                    if ('/service_client/branch' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'branch_index');
                        }

                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\BranchController::indexAction',  '_route' => 'branch_index',);
                    }

                    // branch_new
                    if ('/service_client/branch/new' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\BranchController::newAction',  '_route' => 'branch_new',);
                    }

                    // branch_show
                    if ('/service_client/branch/show' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\BranchController::showAction',  '_route' => 'branch_show',);
                    }

                    // branch_edit
                    if (preg_match('#^/service_client/branch/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'branch_edit')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\BranchController::editAction',));
                    }

                    // branch_delete
                    if (preg_match('#^/service_client/branch/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'branch_delete')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\BranchController::deleteAction',));
                    }

                }

                // cm_serviceclient_api_getrecherche
                if (0 === strpos($pathinfo, '/service_client/recherche') && preg_match('#^/service_client/recherche/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cm_serviceclient_api_getrecherche;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cm_serviceclient_api_getrecherche')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getRechercheAction',));
                }
                not_cm_serviceclient_api_getrecherche:

                // cm_serviceclient_default_index
                if ('/service_client' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cm_serviceclient_default_index');
                    }

                    return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cm_serviceclient_default_index',);
                }

                if (0 === strpos($pathinfo, '/service_client/mail')) {
                    // mail_index
                    if ('/service_client/mail' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'mail_index');
                        }

                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\MailController::indexAction',  '_route' => 'mail_index',);
                    }

                    // mail_new
                    if ('/service_client/mail/new' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\MailController::newAction',  '_route' => 'mail_new',);
                    }

                    // mail_show
                    if ('/service_client/mail/show' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\MailController::showAction',  '_route' => 'mail_show',);
                    }

                    // mail_edit
                    if (preg_match('#^/service_client/mail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_edit')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\MailController::editAction',));
                    }

                    // mail_delete
                    if (preg_match('#^/service_client/mail/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_delete')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\MailController::deleteAction',));
                    }

                }

                // service_index
                if ('/service_client/service' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'service_index');
                    }

                    return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service_index',);
                }

                if (0 === strpos($pathinfo, '/service_client/solution')) {
                    // solution_index
                    if ('/service_client/solution' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'solution_index');
                        }

                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\SolutionController::indexAction',  '_route' => 'solution_index',);
                    }

                    // solution_new
                    if ('/service_client/solution/new' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\SolutionController::newAction',  '_route' => 'solution_new',);
                    }

                    // solution_show
                    if ('/service_client/solution/show' === $pathinfo) {
                        return array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\SolutionController::showAction',  '_route' => 'solution_show',);
                    }

                    // solution_edit
                    if (preg_match('#^/service_client/solution/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_edit')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\SolutionController::editAction',));
                    }

                    // solution_delete
                    if (preg_match('#^/service_client/solution/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_delete')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\SolutionController::deleteAction',));
                    }

                }

            }

            // get_solution_mail
            if (0 === strpos($pathinfo, '/solution_mail') && preg_match('#^/solution_mail/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_solution_mail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_solution_mail')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getSolutionMailAction',  '_format' => NULL,));
            }
            not_get_solution_mail:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/branche')) {
            // get_branches
            if (0 === strpos($pathinfo, '/branches') && preg_match('#^/branches(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_branches;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_branches')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBranchesAction',  '_format' => NULL,));
            }
            not_get_branches:

            // get_branch
            if (preg_match('#^/branche/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_branch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_branch')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBranchAction',  '_format' => NULL,));
            }
            not_get_branch:

            // get_branch_parent
            if (0 === strpos($pathinfo, '/branche_parent') && preg_match('#^/branche_parent(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_branch_parent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_branch_parent')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBranchParentAction',  '_format' => NULL,));
            }
            not_get_branch_parent:

            // get_branche_by_nom
            if (0 === strpos($pathinfo, '/branche_nom') && preg_match('#^/branche_nom/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_branche_by_nom;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_branche_by_nom')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getBrancheByNomAction',  '_format' => NULL,));
            }
            not_get_branche_by_nom:

        }

        // get_recherche
        if (0 === strpos($pathinfo, '/recherche') && preg_match('#^/recherche/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_get_recherche;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_recherche')), array (  '_controller' => 'CM\\ServiceClientBundle\\Controller\\ApiController::getRechercheAction',  '_format' => NULL,));
        }
        not_get_recherche:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
