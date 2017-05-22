<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\ModelNewsletter;

/**
 * ModelNewsletter controller.
 * @Route("/modelnewsletter")
 */
class ModelNewsletterController extends Controller
{
    /**
     * @Route("/", name="modelnewsletter_index")
     * @Template("@Marketing/modelnewsletter/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $modelNewsletters = $this->get('marketingbundle.repository.model.newsletter')->findAll();

        return array(
            'modelNewsletters' => $modelNewsletters,
        );
    }

    /**
     * @Route("/new", name="modelnewsletter_new")
     * @Template("@Marketing/modelnewsletter/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $modelNewsletter = new ModelNewsletter();
        $form = $this->createForm('MarketingBundle\Form\ModelNewsletterType', $modelNewsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.model.newsletter')->save($modelNewsletter);

            return $this->redirectToRoute('modelnewsletter_show', array('id' => $modelNewsletter->getId()));
        }

        return array(
            'modelNewsletter' => $modelNewsletter,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="modelnewsletter_show")
     * @Template("@Marketing/modelnewsletter/show.html.twig")
     * @param ModelNewsletter $modelNewsletter
     * @return array
     */
    public function showAction(ModelNewsletter $modelNewsletter)
    {
        $deleteForm = $this->createDeleteForm($modelNewsletter);

        return array(
            'modelNewsletter' => $modelNewsletter,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="modelnewsletter_edit")
     * @Template("@Marketing/modelnewsletter/edit.html.twig")
     * @param Request $request
     * @param ModelNewsletter $modelNewsletter
     * @return array
     */
    public function editAction(Request $request, ModelNewsletter $modelNewsletter)
    {
        $deleteForm = $this->createDeleteForm($modelNewsletter);
        $editForm = $this->createForm('MarketingBundle\Form\ModelNewsletterType', $modelNewsletter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.model.newsletter')->save($modelNewsletter);

            return $this->redirectToRoute('modelnewsletter_edit', array('id' => $modelNewsletter->getId()));
        }

        return array(
            'modelNewsletter' => $modelNewsletter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="modelnewsletter_delete")
     * @param Request $request
     * @param ModelNewsletter $modelNewsletter
     * @return Route
     */
    public function deleteAction(Request $request, ModelNewsletter $modelNewsletter)
    {
        $form = $this->createDeleteForm($modelNewsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.model.newsletter')->delete($modelNewsletter);
        }

        return $this->redirectToRoute('modelnewsletter_index');
    }

    /**
     * Creates a form to delete a ModelNewsletter entity.
     * @param ModelNewsletter $modelNewsletter The ModelNewsletter entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ModelNewsletter $modelNewsletter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modelnewsletter_delete', array('id' => $modelNewsletter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
