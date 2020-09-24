<?php


namespace Eduweb\TrainingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller {
    public function aboutAction(){
        return new Response('about');
    }
    /**
     * @Route ("/about_2")
    */
    public function about2(){#nie używać takiej metody
        return new Response('about');
    }

}