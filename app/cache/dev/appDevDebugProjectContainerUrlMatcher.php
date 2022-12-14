<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

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

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // registerAction
        if ('/register' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_registerAction;
            } else {
                return $this->redirect($rawPathinfo.'/', 'registerAction');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ApplicationController::getRegisterView',  '_route' => 'registerAction',);
        }
        not_registerAction:

        if (0 === strpos($pathinfo, '/us')) {
            if (0 === strpos($pathinfo, '/user')) {
                // getIndexApplication
                if ('/user/index' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_getIndexApplication;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'getIndexApplication');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ApplicationController::getIndexApplicationView',  '_route' => 'getIndexApplication',);
                }
                not_getIndexApplication:

                // updateUserInfo
                if ('/user/update' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApplicationController::getUpdateView',  '_route' => 'updateUserInfo',);
                }

            }

            if (0 === strpos($pathinfo, '/usuario')) {
                if (0 === strpos($pathinfo, '/usuario/log')) {
                    if (0 === strpos($pathinfo, '/usuario/login')) {
                        // usuario_login
                        if ('/usuario/login' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
                        }

                        // usuario_login_check
                        if ('/usuario/login_check' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => 'usuario_login_check',);
                        }

                    }

                    // usuario_logout
                    if ('/usuario/logout' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'usuario_logout',);
                    }

                }

                // createNewUser
                if ('/usuario/newUser' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_createNewUser;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'createNewUser');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createNewUser',  '_route' => 'createNewUser',);
                }
                not_createNewUser:

                if (0 === strpos($pathinfo, '/usuario/u')) {
                    // updateInfo
                    if ('/usuario/updateUser' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_updateInfo;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'updateInfo');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::updateUser',  '_route' => 'updateInfo',);
                    }
                    not_updateInfo:

                    if (0 === strpos($pathinfo, '/usuario/user')) {
                        // deleteUser
                        if ('/usuario/user/delete' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::deleteUser',  '_route' => 'deleteUser',);
                        }

                        // validateUserEmail
                        if ('/usuario/user/validateEmail' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::existEmail',  '_route' => 'validateUserEmail',);
                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
