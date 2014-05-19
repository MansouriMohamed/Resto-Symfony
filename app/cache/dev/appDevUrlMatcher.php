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

        // user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/Admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'RestoTunisie\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_dashboard
            if ($pathinfo === '/Admin/dashboard.html') {
                return array (  '_controller' => 'RestoTunisie\\AdminBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'admin_dashboard',);
            }

        }

        if (0 === strpos($pathinfo, '/Site')) {
            // pidev_site_homepage
            if ($pathinfo === '/Site/index') {
                return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pidev_site_homepage',);
            }

            // pidev_site_details
            if ($pathinfo === '/Site/details') {
                return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\DefaultController::detailsAction',  '_route' => 'pidev_site_details',);
            }

            // pidev_site_liste
            if ($pathinfo === '/Site/liste') {
                return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\DefaultController::listeAction',  '_route' => 'pidev_site_liste',);
            }

            if (0 === strpos($pathinfo, '/Site/menu')) {
                // menu
                if (rtrim($pathinfo, '/') === '/Site/menu') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'menu');
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::indexAction',  '_route' => 'menu',);
                }

                // menu_show
                if (preg_match('#^/Site/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::showAction',));
                }

                // menu_new
                if ($pathinfo === '/Site/menu/new') {
                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
                }

                // menu_create
                if ($pathinfo === '/Site/menu/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_menu_create;
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::createAction',  '_route' => 'menu_create',);
                }
                not_menu_create:

                // menu_edit
                if (preg_match('#^/Site/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::editAction',));
                }

                // menu_update
                if (preg_match('#^/Site/menu/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_menu_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::updateAction',));
                }
                not_menu_update:

                // menu_delete
                if (preg_match('#^/Site/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_menu_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\MenuController::deleteAction',));
                }
                not_menu_delete:

            }

            if (0 === strpos($pathinfo, '/Site/commentaire')) {
                // commentaire
                if (rtrim($pathinfo, '/') === '/Site/commentaire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'commentaire');
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire',);
                }

                // commentaire_show
                if (preg_match('#^/Site/commentaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::showAction',));
                }

                // commentaire_new
                if ($pathinfo === '/Site/commentaire/new') {
                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
                }

                // commentaire_create
                if ($pathinfo === '/Site/commentaire/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_commentaire_create;
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::createAction',  '_route' => 'commentaire_create',);
                }
                not_commentaire_create:

                // commentaire_edit
                if (preg_match('#^/Site/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::editAction',));
                }

                // commentaire_update
                if (preg_match('#^/Site/commentaire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_commentaire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::updateAction',));
                }
                not_commentaire_update:

                // commentaire_delete
                if (preg_match('#^/Site/commentaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_commentaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\CommentaireController::deleteAction',));
                }
                not_commentaire_delete:

            }

            if (0 === strpos($pathinfo, '/Site/facture')) {
                // facture
                if (rtrim($pathinfo, '/') === '/Site/facture') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'facture');
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::indexAction',  '_route' => 'facture',);
                }

                // facture_show
                if (preg_match('#^/Site/facture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::showAction',));
                }

                // facture_new
                if ($pathinfo === '/Site/facture/new') {
                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::newAction',  '_route' => 'facture_new',);
                }

                // facture_create
                if ($pathinfo === '/Site/facture/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_facture_create;
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::createAction',  '_route' => 'facture_create',);
                }
                not_facture_create:

                // facture_edit
                if (preg_match('#^/Site/facture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::editAction',));
                }

                // facture_update
                if (preg_match('#^/Site/facture/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_facture_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::updateAction',));
                }
                not_facture_update:

                // facture_delete
                if (preg_match('#^/Site/facture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_facture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\FactureController::deleteAction',));
                }
                not_facture_delete:

            }

            if (0 === strpos($pathinfo, '/Site/plat')) {
                // plat
                if (rtrim($pathinfo, '/') === '/Site/plat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'plat');
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::indexAction',  '_route' => 'plat',);
                }

                // plat_show
                if (preg_match('#^/Site/plat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plat_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::showAction',));
                }

                // plat_new
                if ($pathinfo === '/Site/plat/new') {
                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::newAction',  '_route' => 'plat_new',);
                }

                // plat_create
                if ($pathinfo === '/Site/plat/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_plat_create;
                    }

                    return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::createAction',  '_route' => 'plat_create',);
                }
                not_plat_create:

                // plat_edit
                if (preg_match('#^/Site/plat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plat_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::editAction',));
                }

                // plat_update
                if (preg_match('#^/Site/plat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_plat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plat_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::updateAction',));
                }
                not_plat_update:

                // plat_delete
                if (preg_match('#^/Site/plat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_plat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plat_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\PlatController::deleteAction',));
                }
                not_plat_delete:

            }

            if (0 === strpos($pathinfo, '/Site/res')) {
                if (0 === strpos($pathinfo, '/Site/reservation')) {
                    // reservation
                    if (rtrim($pathinfo, '/') === '/Site/reservation') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reservation');
                        }

                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation',);
                    }

                    // reservation_show
                    if (preg_match('#^/Site/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::showAction',));
                    }

                    // reservation_new
                    if ($pathinfo === '/Site/reservation/new') {
                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                    }

                    // reservation_create
                    if ($pathinfo === '/Site/reservation/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reservation_create;
                        }

                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
                    }
                    not_reservation_create:

                    // reservation_edit
                    if (preg_match('#^/Site/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::editAction',));
                    }

                    // reservation_update
                    if (preg_match('#^/Site/reservation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reservation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::updateAction',));
                    }
                    not_reservation_update:

                    // reservation_delete
                    if (preg_match('#^/Site/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reservation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\ReservationController::deleteAction',));
                    }
                    not_reservation_delete:

                }

                if (0 === strpos($pathinfo, '/Site/restaurant')) {
                    // restaurant
                    if (rtrim($pathinfo, '/') === '/Site/restaurant') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'restaurant');
                        }

                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::indexAction',  '_route' => 'restaurant',);
                    }

                    // restaurant_show
                    if (preg_match('#^/Site/restaurant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_show')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::showAction',));
                    }

                    // restaurant_new
                    if ($pathinfo === '/Site/restaurant/new') {
                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::newAction',  '_route' => 'restaurant_new',);
                    }

                    // restaurant_create
                    if ($pathinfo === '/Site/restaurant/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_restaurant_create;
                        }

                        return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::createAction',  '_route' => 'restaurant_create',);
                    }
                    not_restaurant_create:

                    // restaurant_edit
                    if (preg_match('#^/Site/restaurant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_edit')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::editAction',));
                    }

                    // restaurant_update
                    if (preg_match('#^/Site/restaurant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_restaurant_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_update')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::updateAction',));
                    }
                    not_restaurant_update:

                    // restaurant_delete
                    if (preg_match('#^/Site/restaurant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_restaurant_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_delete')), array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\RestaurantController::deleteAction',));
                    }
                    not_restaurant_delete:

                }

            }

            // pidev_site_statistique
            if ($pathinfo === '/Site/statistique') {
                return array (  '_controller' => 'restaurantTunisie\\PidevSiteBundle\\Controller\\DefaultController::statistiqueAction',  '_route' => 'pidev_site_statistique',);
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
