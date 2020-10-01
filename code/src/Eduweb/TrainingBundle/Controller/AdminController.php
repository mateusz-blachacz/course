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
        $rows = $repo->findAll();

        return array('rows' => $rows,);
    }

}
