<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if ($pathinfo === '/symfony') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_cdd691f
        if ($pathinfo === '/css/cdd691f.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_cdd691f',);
        }

        // _assetic_cdd691f_0
        if ($pathinfo === '/css/cdd691f_part_1_bootstrap-responsive_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_cdd691f_0',);
        }

        // _assetic_cdd691f_1
        if ($pathinfo === '/css/cdd691f_part_1_bootstrap_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_cdd691f_1',);
        }

        // _assetic_cdd691f_2
        if ($pathinfo === '/css/cdd691f_part_1_docs_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_cdd691f_2',);
        }

        // _assetic_cdd691f_3
        if ($pathinfo === '/css/cdd691f_part_1_prettify_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_cdd691f_3',);
        }

        // _assetic_98c53df
        if ($pathinfo === '/js/98c53df.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_98c53df',);
        }

        // _assetic_98c53df_0
        if ($pathinfo === '/js/98c53df_part_1_README_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_98c53df_0',);
        }

        // _assetic_98c53df_1
        if ($pathinfo === '/js/98c53df_part_1_application_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_98c53df_1',);
        }

        // _assetic_98c53df_2
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-alert_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_98c53df_2',);
        }

        // _assetic_98c53df_3
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-button_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_98c53df_3',);
        }

        // _assetic_98c53df_4
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-carousel_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_98c53df_4',);
        }

        // _assetic_98c53df_5
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-collapse_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_98c53df_5',);
        }

        // _assetic_98c53df_6
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-dropdown_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_98c53df_6',);
        }

        // _assetic_98c53df_7
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-modal_8.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_98c53df_7',);
        }

        // _assetic_98c53df_8
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-popover_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_98c53df_8',);
        }

        // _assetic_98c53df_9
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-scrollspy_10.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_98c53df_9',);
        }

        // _assetic_98c53df_10
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-tab_11.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_98c53df_10',);
        }

        // _assetic_98c53df_11
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-tooltip_12.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_98c53df_11',);
        }

        // _assetic_98c53df_12
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-transition_13.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_98c53df_12',);
        }

        // _assetic_98c53df_13
        if ($pathinfo === '/js/98c53df_part_1_bootstrap-typeahead_14.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_98c53df_13',);
        }

        // _assetic_98c53df_14
        if ($pathinfo === '/js/98c53df_part_1_jquery_15.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_98c53df_14',);
        }

        // _assetic_98c53df_15
        if ($pathinfo === '/js/98c53df_part_1_prettify_16.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_98c53df_15',);
        }

        // _assetic_98c53df_16
        if ($pathinfo === '/js/98c53df_part_1_prettify_17.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_98c53df_16',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // FolinusBaseBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'FolinusBaseBundle_homepage');
            }
            return array (  '_controller' => 'Folinus\\Bundle\\BaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'FolinusBaseBundle_homepage',);
        }

        // FolinusBlogBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Folinus\\Bundle\\BlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'FolinusBlogBundle_homepage'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
