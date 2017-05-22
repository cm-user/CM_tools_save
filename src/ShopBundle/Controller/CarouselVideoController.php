<?php

namespace ShopBundle\Controller;


use ShopBundle\Entity\CarouselVideo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * CarouselVideoController
 *
 * @Route("carousel_video")
 */
class CarouselVideoController extends Controller
{
    /**
     * @Route("/", name="carousel_video_index")
     * @Template("@Shop/CarouselVideo/index.html.twig")
     * @return array
     */
    public function indexAction(Request $request)
    {
        $carouselVideos = $this->get('shop.repository.carousel.video')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $carouselVideos,
            $request->query->getInt('page', 1),
            10
        );

        return array(
            'carouselVideos' => $pagination,
        );
    }

    /**
     * @Route("/new", name="carousel_video_new")
     * @Template("@Shop/CarouselVideo/new.html.twig")
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function newAction(Request $request)
    {
        $carouselVideo = new CarouselVideo();
        $form = $this->createForm('ShopBundle\Form\CarouselVideoType', $carouselVideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('shop.repository.carousel.video')->save($carouselVideo);

            return $this->redirectToRoute('carousel_video_show', array('id' => $carouselVideo->getId()));
        }

        return array(
            'carouselVideo' => $carouselVideo,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="carousel_video_show")
     * @Template("@Shop/CarouselVideo/show.html.twig")
     * @param CarouselVideo $carouselVideo
     * @return array
     */
    public function showAction(CarouselVideo $carouselVideo)
    {
        $deleteForm = $this->createDeleteForm($carouselVideo);

        return array(
            'carouselVideo' => $carouselVideo,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="carousel_video_edit")
     * @Template("@Shop/CarouselVideo/edit.html.twig")
     * @param Request $request
     * @param CarouselVideo $carouselVideo
     * @return array|RedirectResponse
     */
    public function editAction(Request $request, CarouselVideo $carouselVideo)
    {
        $deleteForm = $this->createDeleteForm($carouselVideo);
        $editForm = $this->createForm('ShopBundle\Form\CarouselVideoType', $carouselVideo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('shop.repository.carousel.video')->save($carouselVideo);

            return $this->redirectToRoute('carousel_video_show', array('id' => $carouselVideo->getId()));
        }

        return array(
            'carouselVideo' => $carouselVideo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="carousel_video_delete")
     * @param Request $request
     * @param CarouselVideo $carouselVideo
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, CarouselVideo $carouselVideo)
    {
        $this->get('shop.repository.carousel.video')->delete($carouselVideo);

        return $this->redirectToRoute('carousel_video_index');
    }

    /**
     * Creates a form to delete a CarouselPicture entity.
     * @param CarouselVideo $carouselVideo The CarouselVideo entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CarouselVideo $carouselVideo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carousel_video_delete', array('id' => $carouselVideo->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
