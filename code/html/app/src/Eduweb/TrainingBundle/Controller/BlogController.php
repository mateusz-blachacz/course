<?php


namespace Eduweb\TrainingBundle\Controller;
use     Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eduweb\TrainingBundle\Helper\Journal\Journal;
use Eduweb\TrainingBundle\Helper\DataProvider;
/**
 * Class BlogController
 * @package Eduweb\TrainingBundle\Controller
 * @Route("/blog")
 *
 */
class BlogController extends Controller
{
    /**
     * @Route("/")
     *@Template
     */
    public function indexAction(){
        return array();
    }
    /**
     * @Route("/dziennik")
     * @Template
     */
    public function journalAction(){
        return array(
            'history'=>Journal::getHistoryAsArray(),
            'historyObj'=>Journal::getHistoryAsObjects()
//            'history'=>array()

        );
    }
    /**
     * @Route("/o-mnie")
     * @Template
     */
    public function aboutAction(){
        return array();
    }
    /**
     * @Route("/kontakt")
     * @Template
     */
    public function contactAction(){
        return array();
    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig")
     */
    public function followWidgetsAction(){

        return array(
            'list'=> DataProvider::getFollowings()
        );

    }

    /**
     * @Template("EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig")
     */
    public function walletWidgetsAction(){

        return array(
            'list'=> DataProvider::getWallet()
        );

    }
}
