<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterProduct;

/**
 * NewsletterProduct controller.
 * @Route("/newsletterproduct")
 */
class NewsletterProductController extends Controller
{
    /**
     * @Route("/", name="newsletterproduct_index")
     * @Template("@Marketing/newsletterproduct/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterProducts = $this->get('marketingbundle.repository.newsletter.product')->findAll();

        return array(
            'newsletterProducts' => $newsletterProducts,
        );
    }

    /**
     * @Route("/new", name="newsletterproduct_new")
     * @Template("@Marketing/newsletterproduct/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterProduct = new NewsletterProduct();
        $form = $this->createForm('MarketingBundle\Form\NewsletterProductType', $newsletterProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.product')->save($newsletterProduct);

            return $this->redirectToRoute('newsletterproduct_show', array('id' => $newsletterProduct->getId()));
        }

        return array(
            'newsletterProduct' => $newsletterProduct,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletterproduct_show")
     * @Template("@Marketing/newsletterproduct/show.html.twig")
     * @param NewsletterProduct $newsletterProduct
     * @return array
     */
    public function showAction(NewsletterProduct $newsletterProduct)
    {
        $deleteForm = $this->createDeleteForm($newsletterProduct);

        return array(
            'newsletterProduct' => $newsletterProduct,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="newsletterproduct_edit")
     * @Template("@Marketing/newsletterproduct/edit.html.twig")
     * @param Request $request
     * @param NewsletterProduct $newsletterProduct
     * @return array
     */
    public function editAction(Request $request, NewsletterProduct $newsletterProduct)
    {
        $deleteForm = $this->createDeleteForm($newsletterProduct);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterProductType', $newsletterProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.product')->save($newsletterProduct);

            return $this->redirectToRoute('newsletterproduct_edit', array('id' => $newsletterProduct->getId()));
        }

        return array(
            'newsletterProduct' => $newsletterProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newsletterproduct_delete")
     * @param Request $request
     * @param NewsletterProduct $newsletterProduct
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterProduct $newsletterProduct)
    {
        $form = $this->createDeleteForm($newsletterProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.product')->delete($newsletterProduct);
        }

        return $this->redirectToRoute('newsletterproduct_index');
    }

    /**
     * Creates a form to delete a NewsletterProduct entity.
     * @param NewsletterProduct $newsletterProduct The NewsletterProduct entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterProduct $newsletterProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletterproduct_delete', array('id' => $newsletterProduct->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
