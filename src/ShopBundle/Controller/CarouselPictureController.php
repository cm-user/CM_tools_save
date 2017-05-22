<?php

namespace ShopBundle\Controller;


use ShopBundle\Entity\CarouselPicture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * CarouselPictureController
 *
 * @Route("carousel_picture")
 */
class CarouselPictureController extends Controller
{
    /**
     * @Route("/", name="carousel_picture_index")
     * @Template("@Shop/CarouselPicture/index.html.twig")
     * @return array
     */
    public function indexAction(Request $request)
    {
        $carouselPictures = $this->get('shop.repository.carousel.picture')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $carouselPictures,
            $request->query->getInt('page', 1),
            10
        );

        return array(
            'carouselPictures' => $pagination,
        );
    }

    /**
     * @Route("/new", name="carousel_picture_new")
     * @Template("@Shop/CarouselPicture/new.html.twig")
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function newAction(Request $request)
    {
        $carouselPicture = new CarouselPicture();
        $form = $this->createForm('ShopBundle\Form\CarouselPictureType', $carouselPicture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('shop.repository.carousel.picture')->save($carouselPicture);

            return $this->redirectToRoute('carousel_picture_show', array('id' => $carouselPicture->getId()));
        }

        return array(
            'carouselPicture' => $carouselPicture,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="carousel_picture_show")
     * @Template("@Shop/CarouselPicture/show.html.twig")
     * @param CarouselPicture $carouselPicture
     * @return array
     */
    public function showAction(CarouselPicture $carouselPicture)
    {
        $deleteForm = $this->createDeleteForm($carouselPicture);

        return array(
            'carouselPicture' => $carouselPicture,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="carousel_picture_edit")
     * @Template("@Shop/CarouselPicture/edit.html.twig")
     * @param Request $request
     * @param CarouselPicture $carouselPicture
     * @return array|RedirectResponse
     */
    public function editAction(Request $request, CarouselPicture $carouselPicture)
    {
        $deleteForm = $this->createDeleteForm($carouselPicture);
        $editForm = $this->createForm('ShopBundle\Form\CarouselPictureType', $carouselPicture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('shop.repository.carousel.picture')->save($carouselPicture);

            return $this->redirectToRoute('carousel_picture_show', array('id' => $carouselPicture->getId()));
        }

        return array(
            'carouselPicture' => $carouselPicture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="carousel_picture_delete")
     * @param Request $request
     * @param CarouselPicture $carouselPicture
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, CarouselPicture $carouselPicture)
    {
        $this->get('shop.repository.carousel.picture')->delete($carouselPicture);

        return $this->redirectToRoute('carousel_picture_index');
    }

    /**
     * Creates a form to delete a CarouselPicture entity.
     * @param CarouselPicture $carouselPicture The CarouselPicture entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CarouselPicture $carouselPicture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carousel_picture_delete', array('id' => $carouselPicture->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
