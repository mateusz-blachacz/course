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
        return $this->render('EduwebTrainingBundle:Blog:index.html.twig');
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
        return $this->render('EduwebTrainingBundle:Blog:about.html.twig');
    }

    /**
     * @Route("/kontakt", name="edu_blog_kontakt")
     *
     * @Template
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form    = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $savePath = $this->get('kernel')->getRootDir()."/../web/uploads/";
            $contact->save($savePath);
        }

        return $this->render('EduwebTrainingBundle:Blog:contact.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Template
     */
    public function followWidgetsAction()
    {
        return $this->render("EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig", ['list' => DataProvider::getFollowings()]);
    }

    /**
     * @Template
     */
    public function walletWidgetsAction()
    {
        return $this->render("EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig", ['list' => DataProvider::getWallet()]);
    }

    /**
     * @Route("/ksiega-gosci", name="edu_blog_ksiegaGosci")
     *
     * @Template
     */
    public function guestBookAction()
    {
        return $this->render('EduwebTrainingBundle:Blog:guestBook.html.twig', ['comments' => DataProvider::getGuestBook()]);
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

        $form = $this->createForm(RegisterType::class, $register);

        $form->handleRequest($request);
        if($form->isSubmitted()) {
            if ($form->isValid()) {
                $savePath = $this->get('kernel')->getRootDir().'/../web/uploads/';
                $register->save($savePath);
                $em = $this->getDoctrine()->getManager();
                $em->persist($register);

                $em->flush();
            }
        }

        $formData = "Dane zapisane";

        return $this->render('EduwebTrainingBundle:Blog:register.html.twig', ['form'=>$form->createView(), 'formData' => isset($formData) ? $formData : null]);
    }
}
