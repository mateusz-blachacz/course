<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
}
