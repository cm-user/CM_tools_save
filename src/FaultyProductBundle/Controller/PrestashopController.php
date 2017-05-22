<?php

namespace FaultyProductBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Prestashop controller.
 * @Route("/prestashop")
 */
class PrestashopController extends Controller
{
    /**
     * Recherche du produit sur Prestashop
     * @Route("/{search}/product/search", name="faulty_prestashop_search_product", options={"expose"=true})
     * @return JsonResponse
     */
    public function searchProductAction($search){
        $persta = $this->get('iq2i_prestashop_web_service')->getInstance();
        $result = $persta->get(array(
            "resource" => "search",
            "language" => 5,
            "query" => $search."%",
        ));

        if(sizeof($result->products->product) > 0){
            $idList = array();
            foreach ($result->products->product as $p) {
                $idList[] = (int)$p['id'];
            }

            $result = $persta->get(array(
                "resource" => "products",
                "language" => 5,
                "filter[id]" => '['.implode("|", $idList).']',
                "display" => '[id, name, link_default_image]'
            ));
            return new JsonResponse($result->products);
        }else{
            $result = '';
            return new JsonResponse($result);
        }
    }

    /**
     * Récupère les détails du produit sélectionné
     * @Route("/{id}/product", name="faulty_prestashop_product", options={"expose"=true})
     * @return JsonResponse
     */
    public function indexAction($id){
        $persta = $this->get('iq2i_prestashop_web_service')->getInstance();
        $result = $persta->get(array(
            "resource" => "products",
            "filter[id]" => '['.$id.']',
            "display" => '[id, name, link, wholesale_price, supplier_reference, suppliers, link_default_image]'
        ));

        $result = json_decode(json_encode((array)$result), TRUE);

        $result["products"]["product"]["suppliers"] = json_decode($result["products"]["product"]["suppliers"], true);

        return new JsonResponse($result["products"]);
    }
}