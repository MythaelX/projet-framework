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

        if (0 === strpos($pathinfo, '/admin')) {
            // ip
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ip');
                }

                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ip',  '_route' => 'ip',);
            }

            if (0 === strpos($pathinfo, '/admin/test')) {
                // test
                if ($pathinfo === '/admin/test') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::test',  '_route' => 'test',);
                }

                // test4
                if ($pathinfo === '/admin/test4') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::test4',  '_route' => 'test4',);
                }

                // test5
                if (0 === strpos($pathinfo, '/admin/test5/libelle') && preg_match('#^/admin/test5/libelle/(?P<vallibel>[^/]++)/value/(?P<valvalue>[^/]++)/nb/(?P<valnb>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test5')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::test5',));
                }

                // test6
                if (0 === strpos($pathinfo, '/admin/test6/libelle') && preg_match('#^/admin/test6/libelle/(?P<vallibel>[^/]++)/value/(?P<valvalue>[^/]++)/nb/(?P<valnb>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test6')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::test6',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/list')) {
                // list
                if ($pathinfo === '/admin/list') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\InternauteController::list',  '_route' => 'list',);
                }

                // detail
                if (preg_match('#^/admin/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'BackOfficeBundle\\Controller\\InternauteController::detail',));
                }

            }

            // internaute
            if ($pathinfo === '/admin/internaute') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\InternauteController::formulaire',  '_route' => 'internaute',);
            }

            // list2
            if ($pathinfo === '/admin/list2') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\InternauteController::list2',  '_route' => 'list2',);
            }

        }

        if (0 === strpos($pathinfo, '/fo')) {
            // fontoffice_default_index
            if (0 === strpos($pathinfo, '/fo/mesage') && preg_match('#^/fo/mesage/(?P<msg>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fontoffice_default_index')), array (  '_controller' => 'FontOfficeBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/fo/test')) {
                // fontoffice_default_indexactionn
                if (0 === strpos($pathinfo, '/fo/test1') && preg_match('#^/fo/test1/(?P<num>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fontoffice_default_indexactionn')), array (  '_controller' => 'FontOfficeBundle\\Controller\\DefaultController::indexActionN',));
                }

                // fontoffice_default_indexactiont
                if (0 === strpos($pathinfo, '/fo/test2') && preg_match('#^/fo/test2/(?P<text>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fontoffice_default_indexactiont')), array (  '_controller' => 'FontOfficeBundle\\Controller\\DefaultController::indexActionT',));
                }

            }

        }

        // homepage
        if ($pathinfo === '/datedujour') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
