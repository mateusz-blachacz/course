<?php

namespace Eduweb\TrainingBundle\Controller;

use Eduweb\TrainingBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Eduweb\TrainingBundle\Form\Type\RegisterType;

/**
 * Class BlogController
 *
 * @package Eduweb\TrainingBundle\Controller
 * @Route("/blog/admin")
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

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            $btns = true;
        } else {
            $btns = false;
        }

        return $this->render('EduwebTrainingBundle:Admin:listing.html.twig', ['rows' => $rows, 'btns' => $btns]);
    }

    /**
     * @Route("/details/{id}", name="edu_blog_admin_details")
     *
     * @Template
     */
    public function detailsAction($id)
    {
        $repo     = $this->getDoctrine()->getRepository('EduwebTrainingBundle:Register');
        $register = $repo->find($id);

        if (null == $register) {
            throw $this->createNotFoundException();
        }

        return $this->render('EduwebTrainingBundle:Admin:details.html.twig', ['register' => $register]);
    }

    /**
     * @Route("/update/{id}", name="edu_blog_admin_update")
     *
     * @Template
     */
    public function updateAction(Request $request, $id)
    {
        $repo     = $this->getDoctrine()->getRepository('EduwebTrainingBundle:Register');
        $register = $repo->find($id);

        if (null == $register) {
            throw $this->createNotFoundException('not found');
        }

        $form = $this->createForm(RegisterType::class, $register);

        if ($request->isMethod('POST')) {
            $session = $this->get('session');
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($register);
                $em->flush();

                $session->getFlashBag()->add('success', 'Zaktulizowano rekord');

                return $this->redirect($this->generateUrl('edu_blog_admin_details', ['id' => $register->getId()]));
            } else {
                $session->getFlashBag()->add('danger', 'Popraw błędy formularza');
            }
        }

        return $this->render('EduwebTrainingBundle:Admin:update.html.twig', ['form' => $form->createView(), 'register' => $register]);
    }

    /**
     * @Route("/delete/{id}", name="edu_blog_admin_delete")
     */
    public function deleteAction($id)
    {
        $repo     = $this->getDoctrine()->getRepository('EduwebTrainingBundle:Register');
        $register = $repo->find($id);

        if (null == $register) {
            throw $this->createNotFoundException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($register);
        $em->flush();

        $this->get('session')->getFlashBag()->add('danger', 'Popraw błędy formularza');

        return $this ->redirect($this->generateUrl('edu_blog_admin_listing'));
    }
}
