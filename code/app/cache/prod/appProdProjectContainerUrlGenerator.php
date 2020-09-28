<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'eduweb_training_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_registerUser' => array (  0 =>   array (    0 => 'name',    1 => 'age',    2 => 'role',  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::registerUserAction',    'role' => 'user',  ),  2 =>   array (    'age' => '\\d+',    'role' => 'user|admin',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => 'user|admin',      3 => 'role',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '\\d+',      3 => 'age',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/register-user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_simple1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::simple1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simple',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_simple2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::simple2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simple',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_blog_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_blog_journal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::journalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/dziennik',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_blog_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/o-mnie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_blog_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\BlogController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/kontakt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_registerTester' => array (  0 =>   array (    0 => 'name',    1 => 'age',    2 => 'role',  ),  1 =>   array (    'role' => 'units',    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::registerTesterAction',  ),  2 =>   array (    'age' => '\\d+',    'role' => 'units|functional',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => 'units|functional',      3 => 'role',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '\\d+',      3 => 'age',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/register-tester',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_default_generateurl' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generate-url',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_default_generateurl2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrl2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generate-url-absolute',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_default_generateurlexperiment2' => array (  0 =>   array (    0 => 'method',  ),  1 =>   array (    'method' => 'relative',    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlExperiment2',  ),  2 =>   array (    'method' => 'absolute|relative',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'absolute|relative',      3 => 'method',    ),    1 =>     array (      0 => 'text',      1 => '/generate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_default_generateurlexperiment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::generateUrlExperiment',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_debugging' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\DefaultController::debbugingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/debugging',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_abouttwig' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutTwig',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aboutTwig',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_about2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::about2',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about_2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_goToPage' => array (  0 =>   array (    0 => 'page_url',  ),  1 =>   array (    'page_url' => 'aboutTwig',    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::goToPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page_url',    ),    1 =>     array (      0 => 'text',      1 => '/go-to-page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_printheader' => array (  0 =>   array (    0 => 'title',    1 => 'color',  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::printHeaderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'color',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'title',    ),    2 =>     array (      0 => 'text',      1 => '/print-header',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_contantpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::contantPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_genereteerror' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::genereteErrorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generateError',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EduwebTrainingBoundle_masterRequest' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::masterRequestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/master-request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eduweb_training_pages_readparams' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::readParamsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/readParams',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edu_web_training_aboutPage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edu_web_training_aboutJsonPage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eduweb\\TrainingBundle\\Controller\\PagesController::aboutJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aboutJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
