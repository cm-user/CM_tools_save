<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterProvider;

/**
 * NewsletterProvider controller.
 * @Route("/newsletterprovider")
 */
class NewsletterProviderController extends Controller
{
    /**
     * @Route("/", name="newsletterprovider_index")
     * @Template("@Marketing/newsletterprovider/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterProviders = $this->get('marketingbundle.repository.newsletter.provider')->findAll();

        return array(
            'newsletterProviders' => $newsletterProviders,
        );
    }

    /**
     * @Route("/new", name="newsletterprovider_new")
     * @Template("@Marketing/newsletterprovider/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterProvider = new NewsletterProvider();
        $form = $this->createForm('MarketingBundle\Form\NewsletterProviderType', $newsletterProvider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.provider')->save($newsletterProvider);

            return $this->redirectToRoute('newsletterprovider_show', array('id' => $newsletterProvider->getId()));
        }

        return array(
            'newsletterProvider' => $newsletterProvider,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletterprovider_show")
     * @Template("@Marketing/newsletterprovider/show.html.twig")
     * @param NewsletterProvider $newsletterProvider
     * @return array
     */
    public function showAction(NewsletterProvider $newsletterProvider)
    {
        $deleteForm = $this->createDeleteForm($newsletterProvider);

        return array(
            'newsletterProvider' => $newsletterProvider,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="newsletterprovider_edit")
     * @Template("@Marketing/newsletterprovider/edit.html.twig")
     * @param Request $request
     * @param NewsletterProvider $newsletterProvider
     * @return array
     */
    public function editAction(Request $request, NewsletterProvider $newsletterProvider)
    {
        $deleteForm = $this->createDeleteForm($newsletterProvider);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterProviderType', $newsletterProvider);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.provider')->save($newsletterProvider);

            return $this->redirectToRoute('newsletterprovider_edit', array('id' => $newsletterProvider->getId()));
        }

        return array(
            'newsletterProvider' => $newsletterProvider,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newsletterprovider_delete")
     * @param Request $request
     * @param NewsletterProvider $newsletterProvider
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterProvider $newsletterProvider)
    {
        $form = $this->createDeleteForm($newsletterProvider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.provider')->delete($newsletterProvider);
        }

        return $this->redirectToRoute('newsletterprovider_index');
    }

    /**
     * Creates a form to delete a NewsletterProvider entity.
     * @param NewsletterProvider $newsletterProvider The NewsletterProvider entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterProvider $newsletterProvider)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletterprovider_delete', array('id' => $newsletterProvider->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
