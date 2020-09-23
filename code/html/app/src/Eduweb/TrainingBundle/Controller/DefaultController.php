<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EduwebTrainingBundle:Default:index.html.twig');
    }

    public function registerUserAction($name,$age){
        $responseMsq = sprintf("Rejestracja użytkownika o nazwie %s (wiek: %d)",$name,$age);

        return new \Symfony\Component\HttpFoundation\Response($responseMsq);

    }
}
