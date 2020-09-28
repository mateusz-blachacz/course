<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            // eduweb_training_blog_index
            if ('/blog' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_eduweb_training_blog_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'eduweb_training_blog_index');
                }

                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::indexAction',  '_route' => 'eduweb_training_blog_index',);
            }
            not_eduweb_training_blog_index:

            // eduweb_training_blog_journal
            if ('/blog/dziennik' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::journalAction',  '_route' => 'eduweb_training_blog_journal',);
            }

            // eduweb_training_blog_about
            if ('/blog/o-mnie' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::aboutAction',  '_route' => 'eduweb_training_blog_about',);
            }

            // eduweb_training_blog_contact
            if ('/blog/kontakt' === $pathinfo) {
                return array (  '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::contactAction',  '_route' => 'eduweb_training_blog_contact',);
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
