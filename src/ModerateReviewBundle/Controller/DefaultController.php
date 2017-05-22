<?php

namespace ModerateReviewBundle\Controller;

use ModerateReviewBundle\Entity\Order;
use ModerateReviewBundle\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * Affichage du formulaire de suppression des avis clients
     * @Route("/", name="moderate_review_index")
     * @Template("ModerateReviewBundle:Default:index.html.twig")
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request)
    {
        $order = new Order();

        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        return [
            'form' => $form->createView(),
        ];

    }

    /**
     * Recherche d'une commande
     * @Route("/order", name="moderate_review_order", defaults={"_format": "json"})
     * @param Request $request
     * @return Response
     */
    public function findOrderAction(Request $request){
        $idOrder = $request->get('id');
        $order = $this->get('moderate_review.repository.order')->findOrderById($idOrder);

        if(!is_object($order)){
            $order = new Order();
            $order->setId(0);
        }

        return new JsonResponse($order->toArray());
    }

    /**
     * Suppression de la commande afin de ne pas expédier l'avis client à l'internaute
     * @Route("/deleteReview", name="moderate_review_delete", defaults={"_format": "json"})
     * @param Request $request
     * @return Response
     */
    public function deleteReview(Request $request){
        $allReview = $this->get('moderate_review.repository.order')->findAll();
        $allReview = explode(",", $allReview);

        $idOrder = $request->get('id');

        if(in_array($idOrder, $allReview)){
            return new JsonResponse(["status" => 2]);
        }else{
            $allReview[] = $idOrder;
            $allReview = implode(",", $allReview);
            $this->get('moderate_review.repository.order')->save($allReview);
            return new JsonResponse(["status" => 1]);
        }
    }
}
