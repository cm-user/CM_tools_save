<?php

namespace ShopBundle\Controller;


use ShopBundle\Entity\Carousel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Tinify\Tinify;

/**
 * Class CarouselController
 * @package ShopBundle\Controller
 * @Route("carousel")
 */
class CarouselController extends Controller
{
    /**
     * @Route("/", name="carousel_index")
     * @Template("@Shop/Carousel/index.html.twig")
     * @return array|RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $carouselPictureRepository = $this->get('shop.repository.carousel.picture');
        $carouselVideoRepository = $this->get('shop.repository.carousel.video');
        $carouselPictures = $carouselPictureRepository->findTodayArray();
        $carouselVideos = $carouselVideoRepository->findTodayArray();

        $items = array_merge($carouselPictures, $carouselVideos);

        uasort($items, [$this, 'positionArray']);

        $items = array_values($items);

        $carousel = new Carousel();
        $carousel->data = $items;

        $form = $this->createForm('ShopBundle\Form\CarouselType', $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $i=0;
            foreach ($carousel->data as $data) {
                if($data['type'] == 'video'){
                    $carouselVideoRepository->setPosition($data['id'], $i);
                }elseif($data['type'] == 'picture'){
                    $carouselPictureRepository->setPosition($data['id'], $i);
                }
                $i++;
            }

            return $this->redirectToRoute('carousel_index');
        }

        return array(
            'form' => $form->createView(),
        );
    }

    public function positionArray($a, $b) {
        if ($a['position'] == $b['position']) {
            return 0;
        }
        return ($a['position'] < $b['position']) ? -1 : 1;
    }
}