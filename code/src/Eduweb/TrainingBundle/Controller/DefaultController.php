<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation as shortRes;
use Twig\Error\RuntimeError;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EduwebTrainingBundle:Default:index.html.twig');
    }

    public function registerUserAction($name,$age,$role){
        $responseMsq = sprintf("Rejestracja użytkownika o nazwie %s (wiek: %d) rola w systemie: %s",$name,$age,$role);

        return new \Symfony\Component\HttpFoundation\Response($responseMsq);

    }
    public function simple1Action(){
        $responseMsq ='Simple 1';
        return new \Symfony\Component\HttpFoundation\Response($responseMsq);

    }
    public function simple2Action(){
        $responseMsq ='Simple 2';
        return new \Symfony\Component\HttpFoundation\Response($responseMsq);

    }

    /**
     * @Route(
     *     "/register-tester/{name}-{age}-{role}",
     *     name="eduweb_training_registerTester",
     *     defaults={"role"="units"},
     *     requirements={"age"="\d+","role"="units|functional"}
     * )
     *
     * @Method({"GET"})
     */
    public function registerTesterAction($name, $age, $role){
        $responseMsq = sprintf("Rejestracja testera o nazwie %s (wiek: %d) rola testera %s",$name,$age,$role);

        return new \Symfony\Component\HttpFoundation\Response($responseMsq);

    }

    /**
     * @Route("/generate-url")
     */
    public function generateUrlAction(){
        #relative url
        $response = $this->generateUrl('eduweb_training_registerUser',
            array('name'=>'Jan',
            'age'=>12));

        return new \Symfony\Component\HttpFoundation\Response($response);
    }

    /**
     * @Route("/generate-url-absolute")
     */
    public function generateUrl2Action(){
        #absolute url
        $response = $this->generateUrl('eduweb_training_registerUser',
            array('name'=>'Kantana',
                'age'=>56),TRUE);

        return new \Symfony\Component\HttpFoundation\Response($response);
    }

    /**
     * @Route(
     *     "/generate/{method}",
     *     defaults = {"method"="relative"},
     *     requirements={"method"="absolute|relative"}
     *     )
     *
     */
    public function generateUrlExperiment2($method){
        $response ="";
        if("relative" == $method){
            $response = $this->generateUrl('eduweb_training_simple2');

        }elseif ("absolute" == $method){
            $response = $this->generateUrl('eduweb_training_simple2',array(),TRUE);
        }
        return new shortRes\Response($response);
    }

    /**
     * @Route("/gen")
     */
    public function generateUrlExperiment(){
        $response = "Hello Experiment";
        return  new shortRes\Response($response);
    }

    /**
     * @Route(
     *     "/debugging",
     *     name="eduweb_training_debugging"
     * )
     */
    public function debbugingAction(){
        $response = "<html>
            <head></head>
            <body>debugging</body>
        </html>";
        return new shortRes\Response($response);
    }
}
