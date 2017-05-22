<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterBlockType;

/**
 * NewsletterBlockType controller.
 * @Route("/newsletterblocktype")
 */
class NewsletterBlockTypeController extends Controller
{
    /**
     * @Route("/", name="newsletterblocktype_index")
     * @Template("@Marketing/newsletterblocktype/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterBlockTypes = $this->get('marketingbundle.repository.newsletter.block.type')->findAll();

        return array(
            'newsletterBlockTypes' => $newsletterBlockTypes,
        );
    }

    /**
     * @Route("/new", name="newsletterblocktype_new")
     * @Template("@Marketing/newsletterblocktype/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterBlockType = new NewsletterBlockType();
        $form = $this->createForm('MarketingBundle\Form\NewsletterBlockTypeType', $newsletterBlockType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block.type')->save($newsletterBlockType);

            return $this->redirectToRoute('newsletterblocktype_show', array('id' => $newsletterBlockType->getId()));
        }

        return array(
            'newsletterBlockType' => $newsletterBlockType,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletterblocktype_show")
     * @Template("@Marketing/modelnewsletter/show.html.twig")
     * @param NewsletterBlockType $newsletterBlockType
     * @return array
     */
    public function showAction(NewsletterBlockType $newsletterBlockType)
    {
        $deleteForm = $this->createDeleteForm($newsletterBlockType);

        return $this->render('@Marketing/newsletterblocktype/show.html.twig', array(
            'newsletterBlockType' => $newsletterBlockType,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/edit", name="newsletterblocktype_edit")
     * @Template("@Marketing/modelnewsletter/edit.html.twig")
     * @param Request $request
     * @param ModelNewsletter $modelNewsletter
     * @return array
     */
    public function editAction(Request $request, NewsletterBlockType $newsletterBlockType)
    {
        $deleteForm = $this->createDeleteForm($newsletterBlockType);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterBlockTypeType', $newsletterBlockType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block.type')->save($newsletterBlockType);

            return $this->redirectToRoute('newsletterblocktype_edit', array('id' => $newsletterBlockType->getId()));
        }

        return $this->render('@Marketing/newsletterblocktype/edit.html.twig', array(
            'newsletterBlockType' => $newsletterBlockType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/delete", name="newsletterblocktype_delete")
     * @param Request $request
     * @param NewsletterBlockType $newsletterBlockType
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterBlockType $newsletterBlockType)
    {
        $form = $this->createDeleteForm($newsletterBlockType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block.type')->delete($newsletterBlockType);
        }

        return $this->redirectToRoute('newsletterblocktype_index');
    }

    /**
     * Creates a form to delete a NewsletterBlockType entity.
     * @param NewsletterBlockType $newsletterBlockType The NewsletterBlockType entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterBlockType $newsletterBlockType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletterblocktype_delete', array('id' => $newsletterBlockType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
