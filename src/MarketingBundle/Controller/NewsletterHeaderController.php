<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterHeader;

/**
 * NewsletterHeader controller.
 * @Route("/newsletterheader")
 */
class NewsletterHeaderController extends Controller
{
    /**
     * @Route("/", name="newsletterheader_index")
     * @Template("@Marketing/newsletterheader/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterHeaders = $this->get('marketingbundle.repository.newsletter.header')->findAll();

        return array(
            'newsletterHeaders' => $newsletterHeaders,
        );
    }

    /**
     * @Route("/new", name="newsletterheader_new")
     * @Template("@Marketing/newsletterheader/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterHeader = new NewsletterHeader();
        $form = $this->createForm('MarketingBundle\Form\NewsletterHeaderType', $newsletterHeader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.header')->save($newsletterHeader);

            return $this->redirectToRoute('newsletterheader_show', array('id' => $newsletterHeader->getId()));
        }

        return array(
            'newsletterHeader' => $newsletterHeader,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletterheader_show")
     * @Template("@Marketing/newsletterheader/show.html.twig")
     * @param NewsletterHeader $newsletterHeader
     * @return array
     */
    public function showAction(NewsletterHeader $newsletterHeader)
    {
        $deleteForm = $this->createDeleteForm($newsletterHeader);

        return array(
            'newsletterHeader' => $newsletterHeader,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="newsletterheader_edit")
     * @Template("@Marketing/newsletterheader/edit.html.twig")
     * @param Request $request
     * @param NewsletterHeader $newsletterHeader
     * @return array
     */
    public function editAction(Request $request, NewsletterHeader $newsletterHeader)
    {
        $deleteForm = $this->createDeleteForm($newsletterHeader);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterHeaderType', $newsletterHeader);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.header')->save($newsletterHeader);

            return $this->redirectToRoute('newsletterheader_edit', array('id' => $newsletterHeader->getId()));
        }

        return array(
            'newsletterHeader' => $newsletterHeader,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newsletterheader_delete")
     * @param Request $request
     * @param NewsletterHeader $newsletterHeader
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterHeader $newsletterHeader)
    {
        $form = $this->createDeleteForm($newsletterHeader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.header')->delete($newsletterHeader);
        }

        return $this->redirectToRoute('newsletterheader_index');
    }

    /**
     * Creates a form to delete a NewsletterHeader entity.
     * @param NewsletterHeader $newsletterHeader The NewsletterHeader entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterHeader $newsletterHeader)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletterheader_delete', array('id' => $newsletterHeader->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
