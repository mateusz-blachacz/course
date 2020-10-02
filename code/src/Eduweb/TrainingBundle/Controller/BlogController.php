<?php

namespace Eduweb\TrainingBundle\Controller;

use Eduweb\TrainingBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eduweb\TrainingBundle\Helper\Journal\Journal;
use Eduweb\TrainingBundle\Helper\DataProvider;
use Eduweb\TrainingBundle\Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Request;
use Eduweb\TrainingBundle\Entity\Register;
use Eduweb\TrainingBundle\Form\Type\ContactType;

/**
 * Class BlogController
 *
 * @package Eduweb\TrainingBundle\Controller
 * @Route("/blog")
 *
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="edu_blog_glowna")
     *
     * @Template
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/dziennik", name="edu_blog_dziennik")
     *
     * @Template
     */
    public function journalAction()
    {
        return array(
            'history'    => Journal::getHistoryAsArray(),
            'historyObj' => Journal::getHistoryAsObjects(),
        );
    }

    /**
     * @Route("/o-mnie", name="edu_blog_oMnie")
     *
     * @Template
     */
    public function aboutAction()
    {
        return array();
    }

    /**
     * @Route("/kontakt", name="edu_blog_kontakt")
     *
     * @Template
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form    = $this->createForm(new ContactType(), $contact);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $savePath = $this->get('kernel')->getRootDir()."/../web/uploads/";
            $contact->save($savePath);
        }

        return array('form' => $form->createView());
    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig")
     */
    public function followWidgetsAction()
    {
        return array('list' => DataProvider::getFollowings(),);
    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig")
     */
    public function walletWidgetsAction()
    {
        return array('list' => DataProvider::getWallet(),);
    }

    /**
     * @Route("/ksiega-gosci", name="edu_blog_ksiegaGosci")
     *
     * @Template
     */
    public function guestBookAction()
    {
        return array('comments' => DataProvider::getGuestBook(),);
    }

    /**
     * @Route("/rejestracja", name="edu_blog_rejestracja")
     *
     * @Template
     */
    public function registerAction(Request $request)
    {
        $register = new Register();
        $register->setName("Maciek Elo");
        $register->setEmail("Maciek@edu.web.pl");
        $register->setBirthdate(new \DateTime('1989-10-2'));

        $form = $this->createForm(new RegisterType(), $register);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $savePath = $this->get('kernel')->getRootDir().'/../web/uploads/';
            $register->save($savePath);
            $em =$this->getDoctrine()->getManager();
            $em-> persist($register);
            $em->flush();

        }

        $formData = "Dane zapisane";

        

        return array('form' => $form->createView(), 'formData' => isset($formData) ? $formData : null);
    }
}
