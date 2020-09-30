<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eduweb\TrainingBundle\Helper\Journal\Journal;
use Eduweb\TrainingBundle\Helper\DataProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Null;

/**
 * Class BlogController
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
            'history' => Journal::getHistoryAsArray(),
            'historyObj' => Journal::getHistoryAsObjects()
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
    public function contactAction()
    {
        return array();
    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig")
     */
    public function followWidgetsAction()
    {
        return array(
            'list' => DataProvider::getFollowings()
        );

    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig")
     */
    public function walletWidgetsAction()
    {
        return array(
            'list' => DataProvider::getWallet()
        );

    }

    /**
     * @Route("/ksiega-gosci", name="edu_blog_ksiegaGosci")
     *
     * @Template
     */
    public function guestBookAction()
    {
        return array(
            'comments' => DataProvider::getGuestBook()
        );
    }

    /**
     * @Route("/rejestracja", name="edu_blog_rejestracja")
     *
     * @Template
     */
    public function registerAction(Request $request)
    {
        $preData = array('name'=>'Maciej Nie z tych Żółkiewiczów', 'email' => 'Maciek@edu.web.pl', 'sex' => 'm', 'birthdate' => new \DateTime('1989-10-2'), 'country'=>'PL');

        $form =$this->createFormBuilder($preData)
                ->add('name', 'text', array('label' => 'Imię i Nazwisko'))
                ->add('email', 'email', array('label' => 'E-mail'))
                ->add('sex', 'choice', array('label' => 'Płeć', 'choices' => array('m' => 'Mężczyzna', 'f' => 'Kobieta'), "expanded" => true))
                ->add('birthdate', 'birthday', array('label' => 'Data Urodzenia', 'empty_value' =>' --' , 'empty_data' => NULL))
                ->add('country','country', array('label' => 'Kraj pochodzenia', 'empty_value' =>' --' , 'empty_data' => NULL))
                ->add('course', 'choice', array('label' => 'Poziom Kursu', 'choices' => array('basic' => 'Kurs podstawowy', 'at' => 'Analiza techniczna', 'af' => 'Analiza fundamentalna', 'master'=>'Kurs zaawansowany' ), 'empty_value' =>' --' , 'empty_data' => NULL))
                ->add('invest', 'choice', array('label' => 'Inwestycje', 'choices' => array('a' => 'Akcje', 'o' => 'Obligacje', 'f' => 'Forex', 'etf' => 'ETF'), "expanded" => true, 'multiple' => true))
                ->add('comments', 'textarea', array('label' => 'Kometarze'))
                ->add('payment_file', 'file', array('label' => 'Potwierdzenie przelewu'))
                ->add('rules','checkbox', array('label' => 'Regulamin'))
                ->add('save', 'submit', array('label' => 'Zapisz'))
                ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $formData = $form->getData();
        }

        return array('form' => $form->createView(), 'formData' => isset($formData) ? $formData : NULL);
    }
}
