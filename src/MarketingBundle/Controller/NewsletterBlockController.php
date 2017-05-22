<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterBlock;

/**
 * NewsletterBlock controller.
 * @Route("/newsletterblock")
 */
class NewsletterBlockController extends Controller
{
    /**
     * @Route("/", name="newsletterblock_index")
     * @Template("@Marketing/newsletterblock/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterBlocks = $this->get('marketingbundle.repository.newsletter.block')->findAll();
        

        return array(
            'newsletterBlocks' => $newsletterBlocks,
        );
    }

    /**
     * @Route("/new", name="newsletterblock_new")
     * @Template("@Marketing/newsletterblock/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterBlock = new NewsletterBlock();
        $form = $this->createForm('MarketingBundle\Form\NewsletterBlockType', $newsletterBlock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block')->save($newsletterBlock);

            return $this->redirectToRoute('newsletterblock_show', array('id' => $newsletterBlock->getId()));
        }

        return array(
            'newsletterBlock' => $newsletterBlock,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletterblock_show")
     * @Template("@Marketing/newsletterblock/show.html.twig")
     * @param NewsletterBlock $newsletterBlock
     * @return array
     */
    public function showAction(NewsletterBlock $newsletterBlock)
    {
        $deleteForm = $this->createDeleteForm($newsletterBlock);

        return array(
            'newsletterBlock' => $newsletterBlock,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="newsletterblock_edit")
     * @Template("@Marketing/newsletterblock/edit.html.twig")
     * @param Request $request
     * @param NewsletterBlock $newsletterBlock
     * @return array
     */
    public function editAction(Request $request, NewsletterBlock $newsletterBlock)
    {
        $deleteForm = $this->createDeleteForm($newsletterBlock);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterBlockType', $newsletterBlock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block')->save($newsletterBlock);

            return $this->redirectToRoute('newsletterblock_edit', array('id' => $newsletterBlock->getId()));
        }

        return array(
            'newsletterBlock' => $newsletterBlock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newsletterblock_delete")
     * @param Request $request
     * @param NewsletterBlock $newsletterBlock
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterBlock $newsletterBlock)
    {
        $form = $this->createDeleteForm($newsletterBlock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.block')->delete($newsletterBlock);
        }

        return $this->redirectToRoute('newsletterblock_index');
    }

    /**
     * Creates a form to delete a NewsletterBlock entity.
     * @param NewsletterBlock $newsletterBlock The NewsletterBlock entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterBlock $newsletterBlock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletterblock_delete', array('id' => $newsletterBlock->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
