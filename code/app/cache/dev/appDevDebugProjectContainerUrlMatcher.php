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

        // eduweb_training_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_eduweb_training_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'eduweb_training_homepage');
            }

            return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eduweb_training_homepage',);
        }
        not_eduweb_training_homepage:

        // eduweb_training_registerUser
        if (0 === strpos($pathinfo, '/register-user') && preg_match('#^/register\\-user/(?P<name>[^/\\-]++)\\-(?P<age>\\d+)(?:\\-(?P<role>user|admin))?$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_eduweb_training_registerUser;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eduweb_training_registerUser')), array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::registerUserAction',  'role' => 'user',));
        }
        not_eduweb_training_registerUser:

        if (0 === strpos($pathinfo, '/simple')) {
            // eduweb_training_simple1
            if ('/simple' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::simple1Action',  '_route' => 'eduweb_training_simple1',);
            }

            // eduweb_training_simple2
            if ('/simple' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::simple2Action',  '_route' => 'eduweb_training_simple2',);
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // edu_blog_glowna
            if ('/blog' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_edu_blog_glowna;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'edu_blog_glowna');
                }

                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::indexAction',  '_route' => 'edu_blog_glowna',);
            }
            not_edu_blog_glowna:

            // edu_blog_dziennik
            if ('/blog/dziennik' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::journalAction',  '_route' => 'edu_blog_dziennik',);
            }

            // edu_blog_oMnie
            if ('/blog/o-mnie' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::aboutAction',  '_route' => 'edu_blog_oMnie',);
            }

            // edu_blog_kontakt
            if ('/blog/kontakt' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::contactAction',  '_route' => 'edu_blog_kontakt',);
            }

        }

        // eduweb_training_registerTester
        if (0 === strpos($pathinfo, '/register-tester') && preg_match('#^/register\\-tester/(?P<name>[^/\\-]++)\\-(?P<age>\\d+)(?:\\-(?P<role>units|functional))?$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_eduweb_training_registerTester;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eduweb_training_registerTester')), array (  'role' => 'units',  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::registerTesterAction',));
        }
        not_eduweb_training_registerTester:

        if (0 === strpos($pathinfo, '/gen')) {
            if (0 === strpos($pathinfo, '/generate')) {
                if (0 === strpos($pathinfo, '/generate-url')) {
                    // eduweb_training_default_generateurl
                    if ('/generate-url' === $pathinfo) {
                        return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlAction',  '_route' => 'eduweb_training_default_generateurl',);
                    }

                    // eduweb_training_default_generateurl2
                    if ('/generate-url-absolute' === $pathinfo) {
                        return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrl2Action',  '_route' => 'eduweb_training_default_generateurl2',);
                    }

                }

                // eduweb_training_default_generateurlexperiment2
                if (preg_match('#^/generate(?:/(?P<method>absolute|relative))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eduweb_training_default_generateurlexperiment2')), array (  'method' => 'relative',  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlExperiment2',));
                }

            }

            // eduweb_training_default_generateurlexperiment
            if ('/gen' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlExperiment',  '_route' => 'eduweb_training_default_generateurlexperiment',);
            }

        }

        // eduweb_training_debugging
        if ('/debugging' === $pathinfo) {
            return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::debbugingAction',  '_route' => 'eduweb_training_debugging',);
        }

        if (0 === strpos($pathinfo, '/about')) {
            // eduweb_training_pages_abouttwig
            if ('/aboutTwig' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutTwig',  '_route' => 'eduweb_training_pages_abouttwig',);
            }

            // eduweb_training_pages_about2
            if ('/about_2' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::about2',  '_route' => 'eduweb_training_pages_about2',);
            }

        }

        // eduweb_training_goToPage
        if (0 === strpos($pathinfo, '/go-to-page') && preg_match('#^/go\\-to\\-page(?:/(?P<page_url>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eduweb_training_goToPage')), array (  'page_url' => 'aboutTwig',  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::goToPageAction',));
        }

        // eduweb_training_pages_printheader
        if (0 === strpos($pathinfo, '/print-header') && preg_match('#^/print\\-header/(?P<title>[^/]++)/(?P<color>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eduweb_training_pages_printheader')), array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::printHeaderAction',));
        }

        // eduweb_training_pages_contantpage
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::contantPageAction',  '_route' => 'eduweb_training_pages_contantpage',);
        }

        // eduweb_training_pages_genereteerror
        if ('/generateError' === $pathinfo) {
            return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::genereteErrorAction',  '_route' => 'eduweb_training_pages_genereteerror',);
        }

        // EduwebTrainingBoundle_masterRequest
        if (0 === strpos($pathinfo, '/master-request') && preg_match('#^/master\\-request/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'EduwebTrainingBoundle_masterRequest')), array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::masterRequestAction',));
        }

        // eduweb_training_pages_readparams
        if ('/readParams' === $pathinfo) {
            return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::readParamsAction',  '_route' => 'eduweb_training_pages_readparams',);
        }

        if (0 === strpos($pathinfo, '/about')) {
            // edu_web_training_aboutPage
            if ('/about' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutAction',  '_route' => 'edu_web_training_aboutPage',);
            }

            // edu_web_training_aboutJsonPage
            if ('/aboutJson' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutJsonAction',  '_route' => 'edu_web_training_aboutJsonPage',);
            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
