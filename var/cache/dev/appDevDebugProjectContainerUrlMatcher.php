<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'MarketingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/log')) {
                // user_login
                if ($pathinfo === '/user/login') {
                    return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_login',);
                }

                // user_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'user_logout',);
                }

            }

            // user_validation
            if ($pathinfo === '/user/validate') {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::validationAction',  '_route' => 'user_validation',);
            }

            // user_delete
            if ($pathinfo === '/user/delete') {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\SecurityController::deleteAction',  '_route' => 'user_delete',);
            }

            // user_register
            if ($pathinfo === '/user/register') {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
            }

            // user_profil
            if ($pathinfo === '/user/profil') {
                return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profil',);
            }

        }

        // api_user_all
        if ($pathinfo === '/api/user/all') {
            return array (  '_controller' => 'Unicorn\\Bundle\\UserBundle\\Controller\\UserController::getAllAction',  '_route' => 'api_user_all',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/marketing')) {
                // default_index
                if (rtrim($pathinfo, '/') === '/marketing') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'default_index');
                    }

                    return array (  '_controller' => 'MarketingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default_index',);
                }

                if (0 === strpos($pathinfo, '/marketing/modelnewsletter')) {
                    // modelnewsletter_index
                    if (rtrim($pathinfo, '/') === '/marketing/modelnewsletter') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'modelnewsletter_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ModelNewsletterController::indexAction',  '_route' => 'modelnewsletter_index',);
                    }

                    // modelnewsletter_new
                    if ($pathinfo === '/marketing/modelnewsletter/new') {
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

                if (0 === strpos($pathinfo, '/marketing/newsletter')) {
                    if (0 === strpos($pathinfo, '/marketing/newsletterblock')) {
                        // newsletterblock_index
                        if (rtrim($pathinfo, '/') === '/marketing/newsletterblock') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterblock_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockController::indexAction',  '_route' => 'newsletterblock_index',);
                        }

                        // newsletterblock_new
                        if ($pathinfo === '/marketing/newsletterblock/new') {
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
                            if (rtrim($pathinfo, '/') === '/marketing/newsletterblocktype') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newsletterblocktype_index');
                                }

                                return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterBlockTypeController::indexAction',  '_route' => 'newsletterblocktype_index',);
                            }

                            // newsletterblocktype_new
                            if ($pathinfo === '/marketing/newsletterblocktype/new') {
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
                    if (rtrim($pathinfo, '/') === '/marketing/newsletter') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newsletter_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'newsletter_index',);
                    }

                    // newsletter_new
                    if ($pathinfo === '/marketing/newsletter/new') {
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
                        if (rtrim($pathinfo, '/') === '/marketing/newsletterheader') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newsletterheader_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterHeaderController::indexAction',  '_route' => 'newsletterheader_index',);
                        }

                        // newsletterheader_new
                        if ($pathinfo === '/marketing/newsletterheader/new') {
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

                    if (0 === strpos($pathinfo, '/marketing/newslettermenu')) {
                        // newslettermenu_index
                        if (rtrim($pathinfo, '/') === '/marketing/newslettermenu') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'newslettermenu_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterMenuController::indexAction',  '_route' => 'newslettermenu_index',);
                        }

                        // newslettermenu_new
                        if ($pathinfo === '/marketing/newslettermenu/new') {
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

                    if (0 === strpos($pathinfo, '/marketing/newsletterpro')) {
                        if (0 === strpos($pathinfo, '/marketing/newsletterproduct')) {
                            // newsletterproduct_index
                            if (rtrim($pathinfo, '/') === '/marketing/newsletterproduct') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newsletterproduct_index');
                                }

                                return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProductController::indexAction',  '_route' => 'newsletterproduct_index',);
                            }

                            // newsletterproduct_new
                            if ($pathinfo === '/marketing/newsletterproduct/new') {
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

                        if (0 === strpos($pathinfo, '/marketing/newsletterprovider')) {
                            // newsletterprovider_index
                            if (rtrim($pathinfo, '/') === '/marketing/newsletterprovider') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newsletterprovider_index');
                                }

                                return array (  '_controller' => 'MarketingBundle\\Controller\\NewsletterProviderController::indexAction',  '_route' => 'newsletterprovider_index',);
                            }

                            // newsletterprovider_new
                            if ($pathinfo === '/marketing/newsletterprovider/new') {
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

                }

                if (0 === strpos($pathinfo, '/marketing/provider')) {
                    // provider_index
                    if (rtrim($pathinfo, '/') === '/marketing/provider') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'provider_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ProviderController::indexAction',  '_route' => 'provider_index',);
                    }

                    // provider_new
                    if ($pathinfo === '/marketing/provider/new') {
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

                if (0 === strpos($pathinfo, '/marketing/shop')) {
                    if (0 === strpos($pathinfo, '/marketing/shopconfiguration')) {
                        // shopconfiguration_index
                        if (rtrim($pathinfo, '/') === '/marketing/shopconfiguration') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'shopconfiguration_index');
                            }

                            return array (  '_controller' => 'MarketingBundle\\Controller\\ShopConfigurationController::indexAction',  '_route' => 'shopconfiguration_index',);
                        }

                        // shopconfiguration_new
                        if ($pathinfo === '/marketing/shopconfiguration/new') {
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
                    if (rtrim($pathinfo, '/') === '/marketing/shop') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shop_index');
                        }

                        return array (  '_controller' => 'MarketingBundle\\Controller\\ShopController::indexAction',  '_route' => 'shop_index',);
                    }

                    // shop_new
                    if ($pathinfo === '/marketing/shop/new') {
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

            if (0 === strpos($pathinfo, '/moderate_review')) {
                // moderate_review_index
                if (rtrim($pathinfo, '/') === '/moderate_review') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'moderate_review_index');
                    }

                    return array (  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::indexAction',  '_route' => 'moderate_review_index',);
                }

                // moderate_review_order
                if ($pathinfo === '/moderate_review/order') {
                    return array (  '_format' => 'json',  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::findOrderAction',  '_route' => 'moderate_review_order',);
                }

                // moderate_review_delete
                if ($pathinfo === '/moderate_review/deleteReview') {
                    return array (  '_format' => 'json',  '_controller' => 'ModerateReviewBundle\\Controller\\DefaultController::deleteReview',  '_route' => 'moderate_review_delete',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/picture_crawler/search')) {
            // picture_crawler_index
            if (rtrim($pathinfo, '/') === '/picture_crawler/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'picture_crawler_index');
                }

                return array (  '_controller' => 'PictureCrawlerBundle\\Controller\\SearchController::indexAction',  '_route' => 'picture_crawler_index',);
            }

            // picture_crawler_ajax
            if ($pathinfo === '/picture_crawler/search/submit') {
                return array (  '_controller' => 'PictureCrawlerBundle\\Controller\\SearchController::routeAction',  '_route' => 'picture_crawler_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/faulty')) {
            if (0 === strpos($pathinfo, '/faulty/faulty')) {
                // faulty_download
                if ($pathinfo === '/faulty/faulty/download') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_download;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::csvAction',  '_route' => 'faulty_download',);
                }
                not_faulty_download:

                // faulty_index
                if (rtrim($pathinfo, '/') === '/faulty/faulty') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'faulty_index');
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::indexAction',  '_route' => 'faulty_index',);
                }
                not_faulty_index:

                // faulty_new
                if ($pathinfo === '/faulty/faulty/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_faulty_new;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::newAction',  '_route' => 'faulty_new',);
                }
                not_faulty_new:

                // faulty_show
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_show')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::showAction',));
                }
                not_faulty_show:

                // faulty_edit
                if (preg_match('#^/faulty/faulty/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_faulty_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_delete')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyController::deleteAction',));
                }
                not_faulty_delete:

                if (0 === strpos($pathinfo, '/faulty/faultymail')) {
                    // faultymail_index
                    if (rtrim($pathinfo, '/') === '/faulty/faultymail') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_faultymail_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'faultymail_index');
                        }

                        return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::indexAction',  '_route' => 'faultymail_index',);
                    }
                    not_faultymail_index:

                    // faultymail_new
                    if ($pathinfo === '/faulty/faultymail/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_faultymail_new;
                        }

                        return array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::newAction',  '_route' => 'faultymail_new',);
                    }
                    not_faultymail_new:

                    // faultymail_show
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_faultymail_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_show')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::showAction',));
                    }
                    not_faultymail_show:

                    // faultymail_edit
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_faultymail_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_edit')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::editAction',));
                    }
                    not_faultymail_edit:

                    // faultymail_delete
                    if (preg_match('#^/faulty/faultymail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_faultymail_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'faultymail_delete')), array (  '_controller' => 'FaultyProductBundle\\Controller\\FaultyMailController::deleteAction',));
                    }
                    not_faultymail_delete:

                }

            }

            if (0 === strpos($pathinfo, '/faulty/prestashop')) {
                // faulty_prestashop_search_product
                if (preg_match('#^/faulty/prestashop/(?P<search>[^/]++)/product/search$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_prestashop_search_product')), array (  '_controller' => 'FaultyProductBundle\\Controller\\PrestashopController::searchProductAction',));
                }

                // faulty_prestashop_product
                if (preg_match('#^/faulty/prestashop/(?P<id>[^/]++)/product$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_prestashop_product')), array (  '_controller' => 'FaultyProductBundle\\Controller\\PrestashopController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/faulty/supplier')) {
                // faulty_supplier_declare
                if (0 === strpos($pathinfo, '/faulty/supplier/declare') && preg_match('#^/faulty/supplier/declare/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_supplier_declare;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_supplier_declare')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::newAction',));
                }
                not_faulty_supplier_declare:

                // faulty_supplier_camalo
                if ($pathinfo === '/faulty/supplier/camalo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_supplier_camalo;
                    }

                    return array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::showCamaloAction',  '_route' => 'faulty_supplier_camalo',);
                }
                not_faulty_supplier_camalo:

                // faulty_status_supplier
                if (preg_match('#^/faulty/supplier/(?P<supplier>[^/]++)/from/(?P<from>[^/]++)/to/(?P<to>[^/]++)/return/(?P<return>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_status_supplier;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_status_supplier')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::changeFaultyStatusBySupplierAction',));
                }
                not_faulty_status_supplier:

                // faulty_status_faulty
                if (0 === strpos($pathinfo, '/faulty/supplier/id') && preg_match('#^/faulty/supplier/id/(?P<faulty>[^/]++)/to/(?P<to>[^/]++)/return/(?P<return>[^/]++)/supplier/(?P<supplier>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_faulty_status_faulty;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faulty_status_faulty')), array (  '_controller' => 'FaultyProductBundle\\Controller\\SupplierController::changeOneFaultyStatusBySupplierAction',));
                }
                not_faulty_status_faulty:

            }

        }

        if (0 === strpos($pathinfo, '/shop')) {
            if (0 === strpos($pathinfo, '/shop/carousel')) {
                // carousel_index
                if (rtrim($pathinfo, '/') === '/shop/carousel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'carousel_index');
                    }

                    return array (  '_controller' => 'ShopBundle\\Controller\\CarouselController::indexAction',  '_route' => 'carousel_index',);
                }

                if (0 === strpos($pathinfo, '/shop/carousel_')) {
                    if (0 === strpos($pathinfo, '/shop/carousel_p')) {
                        if (0 === strpos($pathinfo, '/shop/carousel_picture')) {
                            // carousel_picture_index
                            if (rtrim($pathinfo, '/') === '/shop/carousel_picture') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'carousel_picture_index');
                                }

                                return array (  '_controller' => 'ShopBundle\\Controller\\CarouselPictureController::indexAction',  '_route' => 'carousel_picture_index',);
                            }

                            // carousel_picture_new
                            if ($pathinfo === '/shop/carousel_picture/new') {
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

                        if (0 === strpos($pathinfo, '/shop/carousel_product')) {
                            // carousel_product_index
                            if (rtrim($pathinfo, '/') === '/shop/carousel_product') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'carousel_product_index');
                                }

                                return array (  '_controller' => 'ShopBundle\\Controller\\CarouselProductController::indexAction',  '_route' => 'carousel_product_index',);
                            }

                            // carousel_product_new
                            if ($pathinfo === '/shop/carousel_product/new') {
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

                    }

                    if (0 === strpos($pathinfo, '/shop/carousel_video')) {
                        // carousel_video_index
                        if (rtrim($pathinfo, '/') === '/shop/carousel_video') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'carousel_video_index');
                            }

                            return array (  '_controller' => 'ShopBundle\\Controller\\CarouselVideoController::indexAction',  '_route' => 'carousel_video_index',);
                        }

                        // carousel_video_new
                        if ($pathinfo === '/shop/carousel_video/new') {
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

            }

            if (0 === strpos($pathinfo, '/shop/prestashop')) {
                // prestashop_search_product
                if (preg_match('#^/shop/prestashop/(?P<search>[^/]++)/product/search$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestashop_search_product')), array (  '_controller' => 'ShopBundle\\Controller\\PrestashopController::searchProductAction',));
                }

                // prestashop_product
                if (preg_match('#^/shop/prestashop/(?P<id>[^/]++)/product$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestashop_product')), array (  '_controller' => 'ShopBundle\\Controller\\PrestashopController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/shop/sho')) {
                if (0 === strpos($pathinfo, '/shop/shopconfiguration')) {
                    // carousel_shopconfiguration_index
                    if (rtrim($pathinfo, '/') === '/shop/shopconfiguration') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_carousel_shopconfiguration_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'carousel_shopconfiguration_index');
                        }

                        return array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::indexAction',  '_route' => 'carousel_shopconfiguration_index',);
                    }
                    not_carousel_shopconfiguration_index:

                    // carousel_shopconfiguration_new
                    if ($pathinfo === '/shop/shopconfiguration/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_carousel_shopconfiguration_new;
                        }

                        return array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::newAction',  '_route' => 'carousel_shopconfiguration_new',);
                    }
                    not_carousel_shopconfiguration_new:

                    // carousel_shopconfiguration_show
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_carousel_shopconfiguration_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_show')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::showAction',));
                    }
                    not_carousel_shopconfiguration_show:

                    // carousel_shopconfiguration_edit
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_carousel_shopconfiguration_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_edit')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::editAction',));
                    }
                    not_carousel_shopconfiguration_edit:

                    // carousel_shopconfiguration_delete
                    if (preg_match('#^/shop/shopconfiguration/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_carousel_shopconfiguration_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carousel_shopconfiguration_delete')), array (  '_controller' => 'ShopBundle\\Controller\\ShopConfigurationController::deleteAction',));
                    }
                    not_carousel_shopconfiguration_delete:

                }

                if (0 === strpos($pathinfo, '/shop/showing')) {
                    // showing_index
                    if (0 === strpos($pathinfo, '/shop/showing/show') && preg_match('#^/shop/showing/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'showing_index')), array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::indexAction',));
                    }

                    // showing_list
                    if ($pathinfo === '/shop/showing/list') {
                        return array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::listAction',  '_route' => 'showing_list',);
                    }

                    // showing_api_blog
                    if ($pathinfo === '/shop/showing/api/blog') {
                        return array (  '_controller' => 'ShopBundle\\Controller\\ShowingController::apiFeedBlog',  '_route' => 'showing_api_blog',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/mail_signature')) {
            // image_fin_commande_index
            if ($pathinfo === '/mail_signature/image-commande') {
                return array (  '_controller' => 'MailSignatureBundle\\Controller\\ImageCommandeController::indexAction',  '_route' => 'image_fin_commande_index',);
            }

            // mail_signature_index
            if (rtrim($pathinfo, '/') === '/mail_signature') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mail_signature_index');
                }

                return array (  '_controller' => 'MailSignatureBundle\\Controller\\MailSignatureController::indexAction',  '_route' => 'mail_signature_index',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
