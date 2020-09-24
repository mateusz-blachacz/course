<?php


namespace Eduweb\TrainingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Tests\Fixtures\ToString;
use Symfony\Component\HttpFoundation\Request;
class PagesController extends Controller {
    public function aboutAction(){
        return new Response('about');
    }

    public function aboutJsonAction(){
        $json = array(
            'name'=>'Buty',
            'size'=> '32',
            'price'=> '123.23'
        );
        return new Response(json_encode($json),Response::HTTP_OK,array('Content-type' => 'application/json'));


    }

    /**
     * @Route ("/aboutTwig")
     *
     * @Template
     */
    public function aboutTwig(){
       #  $this-> render('EduwebTrainingBundle:Pages:aboutTwig.html.twig');
       # return  $this-> render('EduwebTrainingBundle:Pages:aboutTwig.html.twig');# parametry za pomoca array()
        return array();
    }


    /**
     * @Route ("/about_2")
    */
    public function about2(){#nie używać takiej metody
        return new Response('about');
    }

    /**
     * @Route(
     *     "/go-to-page/{page_url}",
     *     name="eduweb_training_goToPage",
     *     defaults={"page_url"="aboutTwig"})
     *
     *
     */
    public function goToPageAction($page_url){
        #return $this->redirect($this->generateUrl($page));
        #return  $this->redirect("/app_dev.php/".$page_url);
        $redirectUrl = $this->generateUrl('eduweb_training_simple2');

        return $this->redirect($redirectUrl);

    }

    /**
     * @Route("/print-header/{title}/{color}")
     *
     * @Template
     */
    public function printHeaderAction($title,$color){
        return array(
            'title'=>$title,
            'color'=>$color
        );
    }

    /**
     * @Route("/contact")
     */
    public function contantPageAction(){
        return $this->forward('EduwebTrainingBundle:Pages:printHeader',array(
            'title'=>'Kontakt',
            'color'=>'blue'
        ));
    }
    /**
     * @Route("/generateError")
     */
    public function genereteErrorAction(){
        throw $this->createNotFoundException();

        #throw new \Exeption('Ups, Wystapl blad Aplikacji')
    }
    /**
     * @Route(
     *     "/master-request/{name}",
     *     name="EduwebTrainingBoundle_masterRequest"
     * )
     */
    public function masterRequestAction(Request $request,$name){
        #old way
        //$Request = $this->getRequest();
        #other way
        #$Request = $this->get('request');
       // return new Response($request->get('name'));
        // return new Response($request->query->get('kolor','red'));
        
        return new Response($request->request->get('size',123));


    }
}