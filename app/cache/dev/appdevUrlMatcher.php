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
        $pathinfo = rawurldecode($pathinfo);

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

        // mql_uit_candidature_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mql_uit_candidature_homepage')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/candidat')) {
            // candidat
            if ($pathinfo === '/candidat') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::indexAction',  '_route' => 'candidat',);
            }

            // candidat_show
            if (preg_match('#^/candidat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::showAction',));
            }

            // candidat_new
            if ($pathinfo === '/candidat/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::newAction',  '_route' => 'candidat_new',);
            }

            // candidat_create
            if ($pathinfo === '/candidat/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidat_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::createAction',  '_route' => 'candidat_create',);
            }
            not_candidat_create:

            // candidat_edit
            if (preg_match('#^/candidat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::editAction',));
            }

            // candidat_update
            if (preg_match('#^/candidat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_candidat_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::updateAction',));
            }
            not_candidat_update:

            // candidat_delete
            if (preg_match('#^/candidat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_candidat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatController::deleteAction',));
            }
            not_candidat_delete:

        }

        if (0 === strpos($pathinfo, '/diplometype')) {
            // diplometype
            if ($pathinfo === '/diplometype') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::indexAction',  '_route' => 'diplometype',);
            }

            // diplometype_show
            if (preg_match('#^/diplometype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplometype_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::showAction',));
            }

            // diplometype_new
            if ($pathinfo === '/diplometype/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::newAction',  '_route' => 'diplometype_new',);
            }

            // diplometype_create
            if ($pathinfo === '/diplometype/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplometype_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::createAction',  '_route' => 'diplometype_create',);
            }
            not_diplometype_create:

            // diplometype_edit
            if (preg_match('#^/diplometype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplometype_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::editAction',));
            }

            // diplometype_update
            if (preg_match('#^/diplometype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplometype_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplometype_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::updateAction',));
            }
            not_diplometype_update:

            // diplometype_delete
            if (preg_match('#^/diplometype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_diplometype_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplometype_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplometypeController::deleteAction',));
            }
            not_diplometype_delete:

        }

        if (0 === strpos($pathinfo, '/experiencetype')) {
            // experiencetype
            if ($pathinfo === '/experiencetype') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::indexAction',  '_route' => 'experiencetype',);
            }

            // experiencetype_show
            if (preg_match('#^/experiencetype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experiencetype_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::showAction',));
            }

            // experiencetype_new
            if ($pathinfo === '/experiencetype/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::newAction',  '_route' => 'experiencetype_new',);
            }

            // experiencetype_create
            if ($pathinfo === '/experiencetype/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_experiencetype_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::createAction',  '_route' => 'experiencetype_create',);
            }
            not_experiencetype_create:

            // experiencetype_edit
            if (preg_match('#^/experiencetype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experiencetype_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::editAction',));
            }

            // experiencetype_update
            if (preg_match('#^/experiencetype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_experiencetype_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experiencetype_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::updateAction',));
            }
            not_experiencetype_update:

            // experiencetype_delete
            if (preg_match('#^/experiencetype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_experiencetype_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experiencetype_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperiencetypeController::deleteAction',));
            }
            not_experiencetype_delete:

        }

        if (0 === strpos($pathinfo, '/filiere')) {
            // filiere
            if ($pathinfo === '/filiere') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::indexAction',  '_route' => 'filiere',);
            }

            // filiere_show
            if (preg_match('#^/filiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::showAction',));
            }

            // filiere_new
            if ($pathinfo === '/filiere/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::newAction',  '_route' => 'filiere_new',);
            }

            // filiere_create
            if ($pathinfo === '/filiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filiere_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::createAction',  '_route' => 'filiere_create',);
            }
            not_filiere_create:

            // filiere_edit
            if (preg_match('#^/filiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::editAction',));
            }

            // filiere_update
            if (preg_match('#^/filiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_filiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::updateAction',));
            }
            not_filiere_update:

            // filiere_delete
            if (preg_match('#^/filiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_filiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiliereController::deleteAction',));
            }
            not_filiere_delete:

        }

        if (0 === strpos($pathinfo, '/responsable')) {
            // responsable
            if ($pathinfo === '/responsable') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::indexAction',  '_route' => 'responsable',);
            }

            // responsable_show
            if (preg_match('#^/responsable/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::showAction',));
            }

            // responsable_new
            if ($pathinfo === '/responsable/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::newAction',  '_route' => 'responsable_new',);
            }

            // responsable_create
            if ($pathinfo === '/responsable/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_responsable_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::createAction',  '_route' => 'responsable_create',);
            }
            not_responsable_create:

            // responsable_edit
            if (preg_match('#^/responsable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::editAction',));
            }

            // responsable_update
            if (preg_match('#^/responsable/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_responsable_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::updateAction',));
            }
            not_responsable_update:

            // responsable_delete
            if (preg_match('#^/responsable/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_responsable_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ResponsableController::deleteAction',));
            }
            not_responsable_delete:

        }

        if (0 === strpos($pathinfo, '/semestre')) {
            // semestre
            if ($pathinfo === '/semestre') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::indexAction',  '_route' => 'semestre',);
            }

            // semestre_show
            if (preg_match('#^/semestre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::showAction',));
            }

            // semestre_new
            if ($pathinfo === '/semestre/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::newAction',  '_route' => 'semestre_new',);
            }

            // semestre_create
            if ($pathinfo === '/semestre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_semestre_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::createAction',  '_route' => 'semestre_create',);
            }
            not_semestre_create:

            // semestre_edit
            if (preg_match('#^/semestre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::editAction',));
            }

            // semestre_update
            if (preg_match('#^/semestre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_semestre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::updateAction',));
            }
            not_semestre_update:

            // semestre_delete
            if (preg_match('#^/semestre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_semestre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\SemestreController::deleteAction',));
            }
            not_semestre_delete:

        }

        if (0 === strpos($pathinfo, '/experience')) {
            // experience
            if ($pathinfo === '/experience') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::indexAction',  '_route' => 'experience',);
            }

            // experience_show
            if (preg_match('#^/experience/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::showAction',));
            }

            // experience_new
            if ($pathinfo === '/experience/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::newAction',  '_route' => 'experience_new',);
            }

            // experience_create
            if ($pathinfo === '/experience/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_experience_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::createAction',  '_route' => 'experience_create',);
            }
            not_experience_create:

            // experience_edit
            if (preg_match('#^/experience/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::editAction',));
            }

            // experience_update
            if (preg_match('#^/experience/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_experience_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::updateAction',));
            }
            not_experience_update:

            // experience_delete
            if (preg_match('#^/experience/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_experience_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\ExperienceController::deleteAction',));
            }
            not_experience_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // userfos
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::indexAction',  '_route' => 'userfos',);
            }

            // userfos_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userfos_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::showAction',));
            }

            // userfos_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::newAction',  '_route' => 'userfos_new',);
            }

            // userfos_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_userfos_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::createAction',  '_route' => 'userfos_create',);
            }
            not_userfos_create:

            // userfos_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userfos_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::editAction',));
            }

            // userfos_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_userfos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userfos_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::updateAction',));
            }
            not_userfos_update:

            // userfos_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_userfos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userfos_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\UserfosController::deleteAction',));
            }
            not_userfos_delete:

        }

        if (0 === strpos($pathinfo, '/filtre')) {
            // filtre
            if ($pathinfo === '/filtre') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::indexAction',  '_route' => 'filtre',);
            }

            // filtre_show
            if (preg_match('#^/filtre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::showAction',));
            }

            // filtre_new
            if ($pathinfo === '/filtre/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::newAction',  '_route' => 'filtre_new',);
            }

            // filtre_create
            if ($pathinfo === '/filtre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filtre_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::createAction',  '_route' => 'filtre_create',);
            }
            not_filtre_create:

            // filtre_edit
            if (preg_match('#^/filtre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::editAction',));
            }

            // filtre_update
            if (preg_match('#^/filtre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_filtre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::updateAction',));
            }
            not_filtre_update:

            // filtre_delete
            if (preg_match('#^/filtre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_filtre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreController::deleteAction',));
            }
            not_filtre_delete:

            if (0 === strpos($pathinfo, '/filtrefiliere')) {
                // filtrefiliere
                if ($pathinfo === '/filtrefiliere') {
                    return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::indexAction',  '_route' => 'filtrefiliere',);
                }

                // filtrefiliere_show
                if (preg_match('#^/filtrefiliere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtrefiliere_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::showAction',));
                }

                // filtrefiliere_new
                if ($pathinfo === '/filtrefiliere/new') {
                    return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::newAction',  '_route' => 'filtrefiliere_new',);
                }

                // filtrefiliere_create
                if ($pathinfo === '/filtrefiliere/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_filtrefiliere_create;
                    }

                    return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::createAction',  '_route' => 'filtrefiliere_create',);
                }
                not_filtrefiliere_create:

                // filtrefiliere_edit
                if (preg_match('#^/filtrefiliere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtrefiliere_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::editAction',));
                }

                // filtrefiliere_update
                if (preg_match('#^/filtrefiliere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_filtrefiliere_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtrefiliere_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::updateAction',));
                }
                not_filtrefiliere_update:

                // filtrefiliere_delete
                if (preg_match('#^/filtrefiliere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_filtrefiliere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtrefiliere_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\FiltreFiliereController::deleteAction',));
                }
                not_filtrefiliere_delete:

            }

        }

        if (0 === strpos($pathinfo, '/diplome')) {
            // diplome
            if ($pathinfo === '/diplome') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::indexAction',  '_route' => 'diplome',);
            }

            // diplome_show
            if (preg_match('#^/diplome/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::showAction',));
            }

            // diplome_new
            if ($pathinfo === '/diplome/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::newAction',  '_route' => 'diplome_new',);
            }

            // diplome_create
            if ($pathinfo === '/diplome/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplome_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::createAction',  '_route' => 'diplome_create',);
            }
            not_diplome_create:

            // diplome_edit
            if (preg_match('#^/diplome/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::editAction',));
            }

            // diplome_update
            if (preg_match('#^/diplome/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplome_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::updateAction',));
            }
            not_diplome_update:

            // diplome_delete
            if (preg_match('#^/diplome/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_diplome_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DiplomeController::deleteAction',));
            }
            not_diplome_delete:

        }

        if (0 === strpos($pathinfo, '/candidature')) {
            // candidature
            if ($pathinfo === '/candidature') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::indexAction',  '_route' => 'candidature',);
            }

            // candidature_show
            if (preg_match('#^/candidature/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidature_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::showAction',));
            }

            // candidature_new
            if ($pathinfo === '/candidature/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::newAction',  '_route' => 'candidature_new',);
            }

            // candidature_create
            if ($pathinfo === '/candidature/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidature_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::createAction',  '_route' => 'candidature_create',);
            }
            not_candidature_create:

            // candidature_edit
            if (preg_match('#^/candidature/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidature_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::editAction',));
            }

            // candidature_update
            if (preg_match('#^/candidature/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_candidature_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidature_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::updateAction',));
            }
            not_candidature_update:

            // candidature_delete
            if (preg_match('#^/candidature/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_candidature_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidature_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\CandidatureController::deleteAction',));
            }
            not_candidature_delete:

        }

        if (0 === strpos($pathinfo, '/detailsemestre')) {
            // detailsemestre
            if ($pathinfo === '/detailsemestre') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::indexAction',  '_route' => 'detailsemestre',);
            }

            // detailsemestre_show
            if (preg_match('#^/detailsemestre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsemestre_show')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::showAction',));
            }

            // detailsemestre_new
            if ($pathinfo === '/detailsemestre/new') {
                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::newAction',  '_route' => 'detailsemestre_new',);
            }

            // detailsemestre_create
            if ($pathinfo === '/detailsemestre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_detailsemestre_create;
                }

                return array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::createAction',  '_route' => 'detailsemestre_create',);
            }
            not_detailsemestre_create:

            // detailsemestre_edit
            if (preg_match('#^/detailsemestre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsemestre_edit')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::editAction',));
            }

            // detailsemestre_update
            if (preg_match('#^/detailsemestre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_detailsemestre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsemestre_update')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::updateAction',));
            }
            not_detailsemestre_update:

            // detailsemestre_delete
            if (preg_match('#^/detailsemestre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_detailsemestre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsemestre_delete')), array (  '_controller' => 'mqlUIT\\CandidatureBundle\\Controller\\DetailSemestreController::deleteAction',));
            }
            not_detailsemestre_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

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

                    return array (  '_controller' => 'mqlUIT\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'mqlUIT\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'mqlUIT\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'mqlUIT\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
