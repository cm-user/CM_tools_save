<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\CarouselProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Faulty controller.
 *
 * @Route("carousel_product")
 */
class CarouselProductController extends Controller
{
    /**
     * @Route("/", name="carousel_product_index")
     * @Template("@Shop/CarouselProduct/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $carouselProducts = $this->get('shop.repository.carousel.product')->findAll();

        return array(
            'carouselProducts' => $carouselProducts,
        );
    }

    /**
     * @Route("/new", name="carousel_product_new")
     * @Template("@Shop/CarouselProduct/new.html.twig")
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function newAction(Request $request)
    {
        $carouselProduct = new CarouselProduct();
        $form = $this->createForm('ShopBundle\Form\CarouselProductType', $carouselProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('shop.repository.carousel.product')->save($carouselProduct);

            return $this->redirectToRoute('carousel_product_show', array('id' => $carouselProduct->getId()));
        }

        return array(
            'carouselProduct' => $carouselProduct,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="carousel_product_show")
     * @Template("@Shop/CarouselProduct/show.html.twig")
     * @param CarouselProduct $carouselProduct
     * @return array
     */
    public function showAction(CarouselProduct $carouselProduct)
    {
        $deleteForm = $this->createDeleteForm($carouselProduct);

        return array(
            'carouselProduct' => $carouselProduct,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="carousel_product_edit")
     * @Template("@Shop/CarouselProduct/edit.html.twig")
     * @param Request $request
     * @param CarouselProduct $carouselProduct
     * @return array|RedirectResponse
     */
    public function editAction(Request $request, CarouselProduct $carouselProduct)
    {
        $deleteForm = $this->createDeleteForm($carouselProduct);
        $editForm = $this->createForm('ShopBundle\Form\CarouselProductType', $carouselProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('shop.repository.carousel.product')->save($carouselProduct);

            return $this->redirectToRoute('carousel_product_show', array('id' => $carouselProduct->getId()));
        }

        return array(
            'carouselProduct' => $carouselProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="carousel_product_delete")
     * @param Request $request
     * @param CarouselProduct $carouselProduct
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, CarouselProduct $carouselProduct)
    {
        /*$form = $this->createDeleteForm($carouselProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('shop.repository.carousel.product')->delete($carouselProduct);
        }*/
        $this->get('shop.repository.carousel.product')->delete($carouselProduct);

        return $this->redirectToRoute('carousel_product_index');
    }

    /**
     * Creates a form to delete a CarouselProduct entity.
     * @param CarouselProduct $carouselProduct The CarouselProduct entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CarouselProduct $carouselProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carousel_product_delete', array('id' => $carouselProduct->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}