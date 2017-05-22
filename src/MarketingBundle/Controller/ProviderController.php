<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\Provider;

/**
 * Provider controller.
 * @Route("/provider")
 */
class ProviderController extends Controller
{
    /**
     * @Route("/", name="provider_index")
     * @Template("@Marketing/provider/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $providers = $this->get('marketingbundle.repository.provider')->findAll();

        return array(
            'providers' => $providers,
        );
    }

    /**
     * @Route("/new", name="provider_new")
     * @Template("@Marketing/provider/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $provider = new Provider();
        $form = $this->createForm('MarketingBundle\Form\ProviderType', $provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.provider')->save($provider);

            return $this->redirectToRoute('provider_show', array('id' => $provider->getId()));
        }

        return array(
            'provider' => $provider,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="provider_show")
     * @Template("@Marketing/provider/show.html.twig")
     * @param Provider $provider
     * @return array
     */
    public function showAction(Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);

        return array(
            'provider' => $provider,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="provider_edit")
     * @Template("@Marketing/provider/edit.html.twig")
     * @param Request $request
     * @param Provider $provider
     * @return array
     */
    public function editAction(Request $request, Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);
        $editForm = $this->createForm('MarketingBundle\Form\ProviderType', $provider);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.provider')->save($provider);

            return $this->redirectToRoute('provider_edit', array('id' => $provider->getId()));
        }

        return array(
            'provider' => $provider,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="provider_delete")
     * @param Request $request
     * @param Provider $provider
     * @return Route
     */
    public function deleteAction(Request $request, Provider $provider)
    {
        $form = $this->createDeleteForm($provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.provider')->delete($provider);
        }

        return $this->redirectToRoute('provider_index');
    }

    /**
     * Creates a form to delete a Provider entity.
     * @param Provider $provider The Provider entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Provider $provider)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('provider_delete', array('id' => $provider->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
