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

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_home');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_home',);
            }

            // admin_codes
            if ($pathinfo === '/admin/codes') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::codesAction',  '_route' => 'admin_codes',);
            }

        }

        if (0 === strpos($pathinfo, '/basket')) {
            // bibliography_basket_index
            if (rtrim($pathinfo, '/') === '/basket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bibliography_basket_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyBasketController::indexAction',  '_route' => 'bibliography_basket_index',);
            }

            // bibliography_basket_add
            if (0 === strpos($pathinfo, '/basket/add') && preg_match('#^/basket/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_basket_add')), array (  '_controller' => 'AppBundle\\Controller\\BibliographyBasketController::addToBibliographyCart',));
            }

            // bibliography_basket_clear
            if ($pathinfo === '/basket/clear') {
                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyBasketController::clearAction',  '_route' => 'bibliography_basket_clear',);
            }

            // bibliography_basket_delete
            if (0 === strpos($pathinfo, '/basket/delete') && preg_match('#^/basket/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_basket_delete')), array (  '_controller' => 'AppBundle\\Controller\\BibliographyBasketController::deleteAction',));
            }

            // bibliography_basket_pdf
            if ($pathinfo === '/basket/pdf') {
                return array (  '_controller' => 'AppBundle\\Controller\\BibliographyBasketController::pdfAction',  '_route' => 'bibliography_basket_pdf',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // clear_session
        if ($pathinfo === '/clear_session') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::clearSessionAction',  '_route' => 'clear_session',);
        }

        // app_default_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'app_default_admin',);
        }

        // app_demo_pdf
        if ($pathinfo === '/pdf') {
            return array (  '_controller' => 'AppBundle\\Controller\\DemoController::pdfAction',  '_route' => 'app_demo_pdf',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // lecture_index
            if (rtrim($pathinfo, '/') === '/lecture') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lecture_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LectureController::indexAction',  '_route' => 'lecture_index',);
            }

            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

        }

        // student_index
        if (rtrim($pathinfo, '/') === '/student') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'student_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  '_route' => 'student_index',);
        }

        if (0 === strpos($pathinfo, '/bibliography')) {
            // bibliography_index
            if (rtrim($pathinfo, '/') === '/bibliography') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bibliography_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bibliography_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\bibliographyController::indexAction',  '_route' => 'bibliography_index',);
            }
            not_bibliography_index:

            // bibliography_new
            if ($pathinfo === '/bibliography/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bibliography_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\bibliographyController::newAction',  '_route' => 'bibliography_new',);
            }
            not_bibliography_new:

            // bibliography_show
            if (preg_match('#^/bibliography/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bibliography_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_show')), array (  '_controller' => 'AppBundle\\Controller\\bibliographyController::showAction',));
            }
            not_bibliography_show:

            // bibliography_edit
            if (preg_match('#^/bibliography/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bibliography_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_edit')), array (  '_controller' => 'AppBundle\\Controller\\bibliographyController::editAction',));
            }
            not_bibliography_edit:

            // bibliography_delete
            if (preg_match('#^/bibliography/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bibliography_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliography_delete')), array (  '_controller' => 'AppBundle\\Controller\\bibliographyController::deleteAction',));
            }
            not_bibliography_delete:

        }

        if (0 === strpos($pathinfo, '/referen')) {
            if (0 === strpos($pathinfo, '/reference')) {
                // reference_index
                if (rtrim($pathinfo, '/') === '/reference') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reference_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reference_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\referenceController::indexAction',  '_route' => 'reference_index',);
                }
                not_reference_index:

                // reference_new
                if ($pathinfo === '/reference/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_reference_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\referenceController::newAction',  '_route' => 'reference_new',);
                }
                not_reference_new:

                // reference_show
                if (preg_match('#^/reference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reference_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_show')), array (  '_controller' => 'AppBundle\\Controller\\referenceController::showAction',));
                }
                not_reference_show:

                // reference_edit
                if (preg_match('#^/reference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_reference_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_edit')), array (  '_controller' => 'AppBundle\\Controller\\referenceController::editAction',));
                }
                not_reference_edit:

                // reference_delete
                if (preg_match('#^/reference/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_reference_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_delete')), array (  '_controller' => 'AppBundle\\Controller\\referenceController::deleteAction',));
                }
                not_reference_delete:

            }

            if (0 === strpos($pathinfo, '/referent')) {
                // referent_index
                if (rtrim($pathinfo, '/') === '/referent') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_referent_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'referent_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\referentController::indexAction',  '_route' => 'referent_index',);
                }
                not_referent_index:

                // referent_new
                if ($pathinfo === '/referent/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_referent_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\referentController::newAction',  '_route' => 'referent_new',);
                }
                not_referent_new:

                // referent_show
                if (preg_match('#^/referent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_referent_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'referent_show')), array (  '_controller' => 'AppBundle\\Controller\\referentController::showAction',));
                }
                not_referent_show:

                // referent_edit
                if (preg_match('#^/referent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_referent_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'referent_edit')), array (  '_controller' => 'AppBundle\\Controller\\referentController::editAction',));
                }
                not_referent_edit:

                // referent_delete
                if (preg_match('#^/referent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_referent_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'referent_delete')), array (  '_controller' => 'AppBundle\\Controller\\referentController::deleteAction',));
                }
                not_referent_delete:

            }

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag_index
            if (rtrim($pathinfo, '/') === '/tag') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tag_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\tagController::indexAction',  '_route' => 'tag_index',);
            }
            not_tag_index:

            // tag_new
            if ($pathinfo === '/tag/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\tagController::newAction',  '_route' => 'tag_new',);
            }
            not_tag_new:

            // tag_show
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'AppBundle\\Controller\\tagController::showAction',));
            }
            not_tag_show:

            // tag_edit
            if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'AppBundle\\Controller\\tagController::editAction',));
            }
            not_tag_edit:

            // tag_delete
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'AppBundle\\Controller\\tagController::deleteAction',));
            }
            not_tag_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\userController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\userController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\userController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\userController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\userController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/userprofile')) {
                // userprofile_index
                if (rtrim($pathinfo, '/') === '/userprofile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_userprofile_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'userprofile_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\userProfileController::indexAction',  '_route' => 'userprofile_index',);
                }
                not_userprofile_index:

                // userprofile_new
                if ($pathinfo === '/userprofile/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_userprofile_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\userProfileController::newAction',  '_route' => 'userprofile_new',);
                }
                not_userprofile_new:

                // userprofile_show
                if (preg_match('#^/userprofile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_userprofile_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userprofile_show')), array (  '_controller' => 'AppBundle\\Controller\\userProfileController::showAction',));
                }
                not_userprofile_show:

                // userprofile_edit
                if (preg_match('#^/userprofile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_userprofile_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userprofile_edit')), array (  '_controller' => 'AppBundle\\Controller\\userProfileController::editAction',));
                }
                not_userprofile_edit:

                // userprofile_delete
                if (preg_match('#^/userprofile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_userprofile_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userprofile_delete')), array (  '_controller' => 'AppBundle\\Controller\\userProfileController::deleteAction',));
                }
                not_userprofile_delete:

            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
