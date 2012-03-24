<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_assetic_cdd691f' => true,
       '_assetic_cdd691f_0' => true,
       '_assetic_cdd691f_1' => true,
       '_assetic_cdd691f_2' => true,
       '_assetic_cdd691f_3' => true,
       '_assetic_98c53df' => true,
       '_assetic_98c53df_0' => true,
       '_assetic_98c53df_1' => true,
       '_assetic_98c53df_2' => true,
       '_assetic_98c53df_3' => true,
       '_assetic_98c53df_4' => true,
       '_assetic_98c53df_5' => true,
       '_assetic_98c53df_6' => true,
       '_assetic_98c53df_7' => true,
       '_assetic_98c53df_8' => true,
       '_assetic_98c53df_9' => true,
       '_assetic_98c53df_10' => true,
       '_assetic_98c53df_11' => true,
       '_assetic_98c53df_12' => true,
       '_assetic_98c53df_13' => true,
       '_assetic_98c53df_14' => true,
       '_assetic_98c53df_15' => true,
       '_assetic_98c53df_16' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'FolinusBaseBundle_homepage' => true,
       'FolinusBlogBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/symfony',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_assetic_cdd691fRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/cdd691f.css',  ),));
    }

    private function get_assetic_cdd691f_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/cdd691f_part_1_bootstrap-responsive_1.css',  ),));
    }

    private function get_assetic_cdd691f_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/cdd691f_part_1_bootstrap_2.css',  ),));
    }

    private function get_assetic_cdd691f_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/cdd691f_part_1_docs_3.css',  ),));
    }

    private function get_assetic_cdd691f_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'cdd691f',  'pos' => 3,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/cdd691f_part_1_prettify_4.css',  ),));
    }

    private function get_assetic_98c53dfRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df.js',  ),));
    }

    private function get_assetic_98c53df_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_README_1.js',  ),));
    }

    private function get_assetic_98c53df_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_application_2.js',  ),));
    }

    private function get_assetic_98c53df_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-alert_3.js',  ),));
    }

    private function get_assetic_98c53df_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-button_4.js',  ),));
    }

    private function get_assetic_98c53df_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 4,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-carousel_5.js',  ),));
    }

    private function get_assetic_98c53df_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 5,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-collapse_6.js',  ),));
    }

    private function get_assetic_98c53df_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 6,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-dropdown_7.js',  ),));
    }

    private function get_assetic_98c53df_7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 7,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-modal_8.js',  ),));
    }

    private function get_assetic_98c53df_8RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 8,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-popover_9.js',  ),));
    }

    private function get_assetic_98c53df_9RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 9,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-scrollspy_10.js',  ),));
    }

    private function get_assetic_98c53df_10RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 10,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-tab_11.js',  ),));
    }

    private function get_assetic_98c53df_11RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 11,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-tooltip_12.js',  ),));
    }

    private function get_assetic_98c53df_12RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 12,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-transition_13.js',  ),));
    }

    private function get_assetic_98c53df_13RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 13,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_bootstrap-typeahead_14.js',  ),));
    }

    private function get_assetic_98c53df_14RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 14,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_jquery_15.js',  ),));
    }

    private function get_assetic_98c53df_15RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 15,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_prettify_16.js',  ),));
    }

    private function get_assetic_98c53df_16RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '98c53df',  'pos' => 16,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/98c53df_part_1_prettify_17.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getFolinusBaseBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Folinus\\Bundle\\BaseBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getFolinusBlogBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Folinus\\Bundle\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }
}
