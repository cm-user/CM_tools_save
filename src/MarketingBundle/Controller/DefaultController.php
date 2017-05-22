<?php

namespace MarketingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * Description du site
     * @Route("/", name="default_index")
     * @Template("@Marketing/Default/index.html.twig")
     * @return array
     */
    public function indexAction(){
        return [];
    }
}