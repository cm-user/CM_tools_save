<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\ShopConfiguration;

/**
 * ShopConfiguration controller.
 * @Route("/shopconfiguration")
 */
class ShopConfigurationController extends Controller
{
    /**
     * @Route("/", name="shopconfiguration_index")
     * @Template("@Marketing/shopconfiguration/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $shopConfigurations = $this->get('marketingbundle.repository.shop.configuration')->findAll();

        return array(
            'shopConfigurations' => $shopConfigurations,
        );
    }

    /**
     * @Route("/new", name="shopconfiguration_new")
     * @Template("@Marketing/shopconfiguration/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $shopConfiguration = new ShopConfiguration();
        $form = $this->createForm('MarketingBundle\Form\ShopConfigurationType', $shopConfiguration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $shopConfiguration->setCreatedAt(new \DateTime());
            $shopConfiguration->setUpdatedAt(new \DateTime());
            $this->get('marketingbundle.repository.shop.configuration')->save($shopConfiguration);

            return $this->redirectToRoute('shopconfiguration_show', array('id' => $shopConfiguration->getId()));
        }

        return array(
            'shopConfiguration' => $shopConfiguration,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="shopconfiguration_show")
     * @Template("@Marketing/shopconfiguration/show.html.twig")
     * @param ShopConfiguration $shopConfiguration
     * @return array
     */
    public function showAction(ShopConfiguration $shopConfiguration)
    {
        $deleteForm = $this->createDeleteForm($shopConfiguration);

        return array(
            'shopConfiguration' => $shopConfiguration,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="shopconfiguration_edit")
     * @Template("@Marketing/shopconfiguration/edit.html.twig")
     * @param Request $request
     * @param ShopConfiguration $shopConfiguration
     * @return array
     */
    public function editAction(Request $request, ShopConfiguration $shopConfiguration)
    {
        $deleteForm = $this->createDeleteForm($shopConfiguration);
        $editForm = $this->createForm('MarketingBundle\Form\ShopConfigurationType', $shopConfiguration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.shop.configuration')->save($shopConfiguration);

            return $this->redirectToRoute('shopconfiguration_edit', array('id' => $shopConfiguration->getId()));
        }

        return array(
            'shopConfiguration' => $shopConfiguration,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="shopconfiguration_delete")
     * @param Request $request
     * @param ShopConfiguration $shopConfiguration
     * @return Route
     */
    public function deleteAction(Request $request, ShopConfiguration $shopConfiguration)
    {
        $form = $this->createDeleteForm($shopConfiguration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.shop.configuration')->delete($shopConfiguration);
        }

        return $this->redirectToRoute('shopconfiguration_index');
    }

    /**
     * Creates a form to delete a ShopConfiguration entity.
     * @param ShopConfiguration $shopConfiguration The ShopConfiguration entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ShopConfiguration $shopConfiguration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shopconfiguration_delete', array('id' => $shopConfiguration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
