<?php
/**
 * Created by PhpStorm.
 * User: Okaou
 * Date: 12/10/2017
 * Time: 16:42
 */

namespace FaultyProductBundle\Controller;

use FaultyProductBundle\Entity\FaultyMail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Faultymail controller.
 *
 * @Route("configuration")
 */
class FaultyConfigurationController extends Controller
{    
    /**
     *
     *
     * @Route("/", name="faultyconfig_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('@FaultyProduct/config/index.html.twig', array(

        ));
    }
    
}
