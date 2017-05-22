<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\ShopConfiguration;
use ShopBundle\Form\ShopConfigurationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * ShopConfiguration controller.
 *
 * @Route("shopconfiguration")
 */
class ShopConfigurationController extends Controller
{
	/**
	 * Lists all shopConfiguration entities.
	 *
	 * @Route("/", name="carousel_shopconfiguration_index")
	 * @Method("GET")
	 * @Template("@Shop/ShopConfiguration/index.html.twig")
	 * @return array
	 */
	public function indexAction()
	{
		$shopConfigurations = $this->get('shop.repository.shopconfiguration')->findAll();

		return [
			'shopConfigurations' => $shopConfigurations,
		];
	}

	/**
	 * Creates a new ShopConfiguration entity.
	 *
	 * @Route("/new", name="carousel_shopconfiguration_new")
	 * @Method({"GET", "POST"})
	 * @Template("@Shop/ShopConfiguration/new.html.twig")
	 * @param Request $request
	 * @return array|RedirectResponse
	 */
	public function newAction(Request $request)
	{
		$shopConfiguration = new ShopConfiguration();
		$form = $this->createForm(ShopConfigurationType::class, $shopConfiguration);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->get('shop.repository.shopconfiguration')->save($shopConfiguration);

			return $this->redirectToRoute('carousel_shopconfiguration_show', array('id' => $shopConfiguration->getId()));
		}

		return [
			'shopConfiguration' => $shopConfiguration,
			'form' => $form->createView(),
		];
	}

	/**
	 * Finds and displays a shopConfiguration entity.
	 *
	 * @Route("/{id}/show", name="carousel_shopconfiguration_show")
	 * @Method("GET")
	 * @Template("@Shop/ShopConfiguration/show.html.twig")
	 * @param ShopConfiguration $shopConfiguration
	 * @return array
	 */
	public function showAction(ShopConfiguration $shopConfiguration)
	{
		$deleteForm = $this->createDeleteForm($shopConfiguration);

		return [
			'shopConfiguration' => $shopConfiguration,
			'delete_form' => $deleteForm->createView(),
		];
	}

	/**
	 * Displays a form to edit an existing shopConfiguration entity.
	 *
	 * @Route("/{id}/edit", name="carousel_shopconfiguration_edit")
	 * @Method({"GET", "POST"})
	 * @Template("@Shop/ShopConfiguration/edit.html.twig")
	 * @param Request $request
	 * @param ShopConfiguration $shopConfiguration
	 * @return array|RedirectResponse
	 */
	public function editAction(Request $request, ShopConfiguration $shopConfiguration)
	{
		$deleteForm = $this->createDeleteForm($shopConfiguration);
		$editForm = $this->createForm(ShopConfigurationType::class, $shopConfiguration);
		$editForm->handleRequest($request);

		if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->get('shop.repository.shopconfiguration')->save($shopConfiguration);

			return $this->redirectToRoute('carousel_shopconfiguration_edit', array('id' => $shopConfiguration->getId()));
		}

		return [
			'shopConfiguration' => $shopConfiguration,
			'edit_form' => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		];
	}

	/**
	 * Deletes a shopConfiguration entity.
	 *
	 * @Route("/{id}", name="carousel_shopconfiguration_delete")
	 * @Method("DELETE")
	 * @param Request $request
	 * @param ShopConfiguration $shopConfiguration
	 * @return RedirectResponse
	 */
	public function deleteAction(Request $request, ShopConfiguration $shopConfiguration)
	{
		$form = $this->createDeleteForm($shopConfiguration);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->get('shop.repository.shopconfiguration')->delete($shopConfiguration);
		}

		return $this->redirectToRoute('shopconfiguration_index');
	}

	/**
	 * Creates a form to delete a shopConfiguration entity.
	 * @param ShopConfiguration $shopConfiguration The shopConfiguration entity
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
