<?php

namespace Eduweb\TrainingBundle\Controller;

use Eduweb\TrainingBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BlogController
 *
 * @package Eduweb\TrainingBundle\Controller
 * @Route("/blog/admin")
 *
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="edu_blog_admin_listing")
     *
     * @Template
     */
    public function listingAction()
    {
        $repo = $this->getDoctrine()->getRepository('EduwebTrainingBundle:Register');
        $rows = $repo->findBy(array('sex'=>''));
        $rows = $repo->findAll();

        return array('rows' => $rows,);
    }

    /**
     * @Route("/details/{id}", name="edu_blog_admin_detail")
     *
     * @Template
     */
    public function detailsAction($id){

        $repo = $this->getDoctrine()->getRepository('EduwebTrainingBundle:Register');
        $register  = $repo->find($id);

        if(null == $register){
            throw $this->createNotFoundException();
        }

        return array('register'=>$register);
    }
}
