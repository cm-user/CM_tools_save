<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\Shop;

/**
 * Shop controller.
 * @Route("/shop")
 */
class ShopController extends Controller
{
    /**
     * @Route("/", name="shop_index")
     * @Template("@Marketing/shop/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $shops = $this->get('marketingbundle.repository.shop')->findAll();

        return array(
            'shops' => $shops,
        );
    }

    /**
     * @Route("/new", name="shop_new")
     * @Template("@Marketing/shop/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $shop = new Shop();
        $form = $this->createForm('MarketingBundle\Form\ShopType', $shop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.shop')->save($shop);

            return $this->redirectToRoute('shop_show', array('id' => $shop->getId()));
        }

        return array(
            'shop' => $shop,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="shop_show")
     * @Template("@Marketing/shop/show.html.twig")
     * @param Shop $shop
     * @return array
     */
    public function showAction(Shop $shop)
    {
        $deleteForm = $this->createDeleteForm($shop);

        return array(
            'shop' => $shop,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="shop_edit")
     * @Template("@Marketing/shop/edit.html.twig")
     * @param Request $request
     * @param Shop $shop
     * @return array
     */
    public function editAction(Request $request, Shop $shop)
    {
        $deleteForm = $this->createDeleteForm($shop);
        $editForm = $this->createForm('MarketingBundle\Form\ShopType', $shop);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.shop')->save($shop);

            return $this->redirectToRoute('shop_edit', array('id' => $shop->getId()));
        }

        return array(
            'shop' => $shop,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="shop_delete")
     * @param Request $request
     * @param Shop $shop
     * @return Route
     */
    public function deleteAction(Request $request, Shop $shop)
    {
        $form = $this->createDeleteForm($shop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.shop')->delete($shop);
        }

        return $this->redirectToRoute('shop_index');
    }

    /**
     * Creates a form to delete a Shop entity.
     * @param Shop $shop The Shop entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Shop $shop)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shop_delete', array('id' => $shop->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
