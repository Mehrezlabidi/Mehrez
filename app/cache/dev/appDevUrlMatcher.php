<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/3121c8a')) {
            // _assetic_3121c8a
            if ($pathinfo === '/css/3121c8a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3121c8a',);
            }

            if (0 === strpos($pathinfo, '/css/3121c8a_part_1_')) {
                // _assetic_3121c8a_0
                if ($pathinfo === '/css/3121c8a_part_1_animate_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3121c8a_0',);
                }

                // _assetic_3121c8a_1
                if ($pathinfo === '/css/3121c8a_part_1_cssmail_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3121c8a_1',);
                }

                // _assetic_3121c8a_2
                if ($pathinfo === '/css/3121c8a_part_1_datePicker_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3121c8a_2',);
                }

                if (0 === strpos($pathinfo, '/css/3121c8a_part_1_menu')) {
                    // _assetic_3121c8a_3
                    if ($pathinfo === '/css/3121c8a_part_1_menuhorizontal_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3121c8a_3',);
                    }

                    // _assetic_3121c8a_4
                    if ($pathinfo === '/css/3121c8a_part_1_menuvertical_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_3121c8a_4',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/3121c8a_part_1_pro_dropline_')) {
                    // _assetic_3121c8a_5
                    if ($pathinfo === '/css/3121c8a_part_1_pro_dropline_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_3121c8a_5',);
                    }

                    // _assetic_3121c8a_6
                    if ($pathinfo === '/css/3121c8a_part_1_pro_dropline_ie_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_3121c8a_6',);
                    }

                }

                // _assetic_3121c8a_7
                if ($pathinfo === '/css/3121c8a_part_1_reset_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_3121c8a_7',);
                }

                if (0 === strpos($pathinfo, '/css/3121c8a_part_1_s')) {
                    // _assetic_3121c8a_8
                    if ($pathinfo === '/css/3121c8a_part_1_screen_9.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_3121c8a_8',);
                    }

                    // _assetic_3121c8a_9
                    if ($pathinfo === '/css/3121c8a_part_1_show_10.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_3121c8a_9',);
                    }

                    if (0 === strpos($pathinfo, '/css/3121c8a_part_1_style')) {
                        // _assetic_3121c8a_10
                        if ($pathinfo === '/css/3121c8a_part_1_style_11.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_3121c8a_10',);
                        }

                        // _assetic_3121c8a_11
                        if ($pathinfo === '/css/3121c8a_part_1_styleHorizontal_12.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_3121c8a_11',);
                        }

                        if (0 === strpos($pathinfo, '/css/3121c8a_part_1_stylem')) {
                            // _assetic_3121c8a_12
                            if ($pathinfo === '/css/3121c8a_part_1_stylemail_13.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_3121c8a_12',);
                            }

                            // _assetic_3121c8a_13
                            if ($pathinfo === '/css/3121c8a_part_1_stylemenu_14.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_3121c8a_13',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/css/3121c8a_part_1_styles')) {
                            // _assetic_3121c8a_14
                            if ($pathinfo === '/css/3121c8a_part_1_styles_15.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 14,  '_format' => 'css',  '_route' => '_assetic_3121c8a_14',);
                            }

                            // _assetic_3121c8a_15
                            if ($pathinfo === '/css/3121c8a_part_1_stylesheet_16.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '3121c8a',  'pos' => 15,  '_format' => 'css',  '_route' => '_assetic_3121c8a_15',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/26ecf80')) {
            // _assetic_26ecf80
            if ($pathinfo === '/js/26ecf80.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_26ecf80',);
            }

            if (0 === strpos($pathinfo, '/js/26ecf80_part_1_')) {
                // _assetic_26ecf80_0
                if ($pathinfo === '/js/26ecf80_part_1_Bilbo_400.font_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_26ecf80_0',);
                }

                if (0 === strpos($pathinfo, '/js/26ecf80_part_1_PIE_')) {
                    // _assetic_26ecf80_1
                    if ($pathinfo === '/js/26ecf80_part_1_PIE_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_26ecf80_1',);
                    }

                    // _assetic_26ecf80_2
                    if ($pathinfo === '/js/26ecf80_part_1_PIE_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_26ecf80_2',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/26ecf80_part_1_cufon-')) {
                    // _assetic_26ecf80_3
                    if ($pathinfo === '/js/26ecf80_part_1_cufon-replace_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_26ecf80_3',);
                    }

                    // _assetic_26ecf80_4
                    if ($pathinfo === '/js/26ecf80_part_1_cufon-yui_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_26ecf80_4',);
                    }

                }

                // _assetic_26ecf80_5
                if ($pathinfo === '/js/26ecf80_part_1_html5_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_26ecf80_5',);
                }

                // _assetic_26ecf80_6
                if ($pathinfo === '/js/26ecf80_part_1_init_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_26ecf80_6',);
                }

                if (0 === strpos($pathinfo, '/js/26ecf80_part_1_jquery')) {
                    // _assetic_26ecf80_7
                    if ($pathinfo === '/js/26ecf80_part_1_jquery-1.7.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_26ecf80_7',);
                    }

                    if (0 === strpos($pathinfo, '/js/26ecf80_part_1_jquery.')) {
                        // _assetic_26ecf80_8
                        if ($pathinfo === '/js/26ecf80_part_1_jquery.dropotron.min_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_26ecf80_8',);
                        }

                        // _assetic_26ecf80_9
                        if ($pathinfo === '/js/26ecf80_part_1_jquery.easing.1.3_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_26ecf80_9',);
                        }

                        // _assetic_26ecf80_10
                        if ($pathinfo === '/js/26ecf80_part_1_jquery.min_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_26ecf80_10',);
                        }

                        // _assetic_26ecf80_11
                        if ($pathinfo === '/js/26ecf80_part_1_jquery.uniform.min_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_26ecf80_11',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/26ecf80_part_1_skel')) {
                    // _assetic_26ecf80_12
                    if ($pathinfo === '/js/26ecf80_part_1_skel-layers.min_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_26ecf80_12',);
                    }

                    // _assetic_26ecf80_13
                    if ($pathinfo === '/js/26ecf80_part_1_skel.min_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_26ecf80_13',);
                    }

                }

                // _assetic_26ecf80_14
                if ($pathinfo === '/js/26ecf80_part_1_tms-0.4.1_15.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ecf80',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_26ecf80_14',);
                }

            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // my_app_rubrique_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_rubrique_homepage')), array (  '_controller' => 'MyApp\\RubriqueBundle\\Controller\\DefaultController::indexAction',));
        }

        // my_app_esprit_top
        if ($pathinfo === '/index.php') {
            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::topAction',  '_route' => 'my_app_esprit_top',);
        }

        // my_app_esprit_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_app_esprit_homepage');
            }

            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_esprit_homepage',);
        }

        // my_app_esprit_administration
        if ($pathinfo === '/administration') {
            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\DefaultController::administrationAction',  '_route' => 'my_app_esprit_administration',);
        }

        if (0 === strpos($pathinfo, '/menu')) {
            // my_app_esprit_menu_new
            if ($pathinfo === '/menu/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::sendAction',  '_route' => 'my_app_esprit_menu_new',);
            }

            // my_app_esprit_menu_show
            if ($pathinfo === '/menu/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_menu_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::showAction',  '_route' => 'my_app_esprit_menu_show',);
            }
            not_my_app_esprit_menu_show:

            // my_app_esprit_menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_menu_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::deleteAction',));
            }

            // my_app_esprit_menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_menu_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/article')) {
                // my_app_esprit_article_new
                if ($pathinfo === '/article/new') {
                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::sendAction',  '_route' => 'my_app_esprit_article_new',);
                }

                // my_app_esprit_article_show
                if ($pathinfo === '/article/show') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_my_app_esprit_article_show;
                    }

                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::showAction',  '_route' => 'my_app_esprit_article_show',);
                }
                not_my_app_esprit_article_show:

                // my_app_esprit_article_delete
                if (preg_match('#^/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::deleteAction',));
                }

                // my_app_esprit_article_edit
                if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/actualite')) {
                // my_app_esprit_actualite_new
                if ($pathinfo === '/actualite/new') {
                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::sendAction',  '_route' => 'my_app_esprit_actualite_new',);
                }

                // my_app_esprit_actualite_show
                if ($pathinfo === '/actualite/show') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_my_app_esprit_actualite_show;
                    }

                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::showAction',  '_route' => 'my_app_esprit_actualite_show',);
                }
                not_my_app_esprit_actualite_show:

                // my_app_esprit_actualite_delete
                if (preg_match('#^/actualite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_actualite_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::deleteAction',));
                }

                // my_app_esprit_actualite_edit
                if (preg_match('#^/actualite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_actualite_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::editAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/rubrique')) {
            // my_app_esprit_rubrique_new
            if ($pathinfo === '/rubrique/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::sendAction',  '_route' => 'my_app_esprit_rubrique_new',);
            }

            // my_app_esprit_rubrique_show
            if ($pathinfo === '/rubrique/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_rubrique_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::showAction',  '_route' => 'my_app_esprit_rubrique_show',);
            }
            not_my_app_esprit_rubrique_show:

            // my_app_esprit_rubrique_delete
            if (preg_match('#^/rubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_rubrique_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::deleteAction',));
            }

            // my_app_esprit_rubrique_edit
            if (preg_match('#^/rubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_rubrique_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sousrubrique')) {
            // my_app_esprit_sousrubrique_new
            if ($pathinfo === '/sousrubrique/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::sendAction',  '_route' => 'my_app_esprit_sousrubrique_new',);
            }

            // my_app_esprit_sousrubrique_show
            if ($pathinfo === '/sousrubrique/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_sousrubrique_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::showAction',  '_route' => 'my_app_esprit_sousrubrique_show',);
            }
            not_my_app_esprit_sousrubrique_show:

            // my_app_esprit_sousrubrique_delete
            if (preg_match('#^/sousrubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_sousrubrique_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::deleteAction',));
            }

            // my_app_esprit_sousrubrique_edit
            if (preg_match('#^/sousrubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_sousrubrique_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/role')) {
            // my_app_esprit_role_new
            if ($pathinfo === '/role/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::sendAction',  '_route' => 'my_app_esprit_role_new',);
            }

            // my_app_esprit_role_show
            if ($pathinfo === '/role/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_role_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::showAction',  '_route' => 'my_app_esprit_role_show',);
            }
            not_my_app_esprit_role_show:

            // my_app_esprit_role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_role_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::deleteAction',));
            }

            // my_app_esprit_role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_role_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::editAction',));
            }

        }

        // my_app_esprit_article_voir
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)/voir$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_voir')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::showbyidAction',));
        }

        // my_app_esprit_sendmail
        if (rtrim($pathinfo, '/') === '/sendmail') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_app_esprit_sendmail');
            }

            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MailController::sendAction',  '_route' => 'my_app_esprit_sendmail',);
        }

        // myapp_choisir_langue
        if (0 === strpos($pathinfo, '/choisir-langue') && preg_match('#^/choisir\\-langue/(?P<langue>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_choisir_langue')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\DefaultController::choisirLangueAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/myapp/rubrique/rubrique')) {
                // admin_myapp_rubrique_rubrique_list
                if ($pathinfo === '/admin/myapp/rubrique/rubrique/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_list',  '_route' => 'admin_myapp_rubrique_rubrique_list',);
                }

                // admin_myapp_rubrique_rubrique_create
                if ($pathinfo === '/admin/myapp/rubrique/rubrique/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_create',  '_route' => 'admin_myapp_rubrique_rubrique_create',);
                }

                // admin_myapp_rubrique_rubrique_batch
                if ($pathinfo === '/admin/myapp/rubrique/rubrique/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_batch',  '_route' => 'admin_myapp_rubrique_rubrique_batch',);
                }

                // admin_myapp_rubrique_rubrique_edit
                if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_edit',));
                }

                // admin_myapp_rubrique_rubrique_delete
                if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_delete',));
                }

                // admin_myapp_rubrique_rubrique_show
                if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_show',));
                }

                // admin_myapp_rubrique_rubrique_export
                if ($pathinfo === '/admin/myapp/rubrique/rubrique/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_export',  '_route' => 'admin_myapp_rubrique_rubrique_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/register/user-')) {
            // user_one_registration
            if ($pathinfo === '/register/user-one') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationUserOneController::registerAction',  '_route' => 'user_one_registration',);
            }

            // user_two_registration
            if ($pathinfo === '/register/user-two') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationUserTwoController::registerAction',  '_route' => 'user_two_registration',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
