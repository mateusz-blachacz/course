<?php

namespace Eduweb\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eduweb\TrainingBundle\Helper\Journal\Journal;
use Eduweb\TrainingBundle\Helper\DataProvider;
use Eduweb\TrainingBundle\Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Request;

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

        $form= $this->createForm(new RegisterType());

        $form->handleRequest($request);

        if($form->isValid()){
            $savePath = $this->get('kernel')->getRootDir().'/../web/uploads/';
            $formData = $form->getData();

            unset($formData['payment_file']);

            $randVal = rand(1000,9999);
            $dataFileName = sprintf('data_%d.txt',$randVal);

            file_put_contents($savePath.$dataFileName, print_r($formData, TRUE));

            $file = $form->get('payment_file')->getData();

            if(NULL !== $file){
                $newName = sprintf('file_%d.%s',$randVal,$file->guessExtension());
                $file->move($savePath,$newName);
            }
        }

        $formData = "Dane zapisane";

        return array('form' => $form->createView(), 'formData' => isset($formData) ? $formData : NULL);
    }
}
