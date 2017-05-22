<?php

namespace ShopBundle\Controller;


use GuzzleHttp\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ShowingController
 * @package ShopBundle\Controller
 * @Route("showing")
 */
class ShowingController extends Controller
{
    /**
     * @Route("/show/{id}", name="showing_index")
     * @Template("@Shop/Showing/index.html.twig")
     * @return array
     */
    public function indexAction(Request $request, $id)
    {
        $carouselPictures = $this->get('shop.repository.carousel.picture')->findToday();
        $carouselVideos = $this->get('shop.repository.carousel.video')->findToday();

        $shopConfiguration = $this->get('shop.repository.shopconfiguration')->findById($id);

        $items = array_merge($carouselPictures, $carouselVideos);
        uasort($items, [$this, 'positionEntity']);
        $items = array_values($items);

        $carouselProducts = $this->get('shop.repository.carousel.product')->findAll();

        return [
            'items' => $items,
            'carouselProducts' => $carouselProducts,
            'shopConfiguration' => $shopConfiguration,
        ];
    }
    /**
     * @Route("/list", name="showing_list")
     * @Template("@Shop/Showing/list.html.twig")
     * @return array
     */
    public function listAction()
    {
        $shopConfigurations = $this->get('shop.repository.shopconfiguration')->findAll();

        return [
            'shopConfigurations' => $shopConfigurations,
        ];
    }

    public function positionEntity($a, $b) {
        if ($a->getPosition() == $b->getPosition()) {
            return 0;
        }
        return ($a->getPosition() < $b->getPosition()) ? -1 : 1;
    }

    /**
     * @Route("/api/blog", name="showing_api_blog")
     * @return Response
     */
    public function apiFeedBlog(){

        $client = new Client();
        $r = $client->get('http://www.cadeau-maestro.com/blog/feed/')->getBody()->getContents();

        return new Response($r);
    }
}