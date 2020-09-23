<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
