<?php

namespace FaultyProductBundle\Controller;

use FaultyProductBundle\Entity\FaultyMail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Faultymail controller.
 *
 * @Route("faultymail")
 */
class FaultyMailController extends Controller
{
    /**
     * Lists all faultyMail entities.
     *
     * @Route("/", name="faultymail_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $faultyMails = $em->getRepository('FaultyProductBundle:FaultyMail')->findAll();

        return $this->render('@FaultyProduct/faultymail/index.html.twig', array(
            'faultyMails' => $faultyMails,
        ));
    }

    /**
     * Creates a new faultyMail entity.
     *
     * @Route("/new", name="faultymail_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $faultyMail = new Faultymail();
        $form = $this->createForm('FaultyProductBundle\Form\FaultyMailType', $faultyMail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($faultyMail);
            $em->flush($faultyMail);

            return $this->redirectToRoute('faultymail_show', array('id' => $faultyMail->getId()));
        }

        return $this->render('@FaultyProduct/faultymail/new.html.twig', array(
            'faultyMail' => $faultyMail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a faultyMail entity.
     *
     * @Route("/{id}", name="faultymail_show")
     * @Method("GET")
     */
    public function showAction(FaultyMail $faultyMail)
    {
        $deleteForm = $this->createDeleteForm($faultyMail);

        return $this->render('@FaultyProduct/faultymail/show.html.twig', array(
            'faultyMail' => $faultyMail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing faultyMail entity.
     *
     * @Route("/{id}/edit", name="faultymail_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FaultyMail $faultyMail)
    {
        $deleteForm = $this->createDeleteForm($faultyMail);
        $editForm = $this->createForm('FaultyProductBundle\Form\FaultyMailType', $faultyMail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('faultymail_edit', array('id' => $faultyMail->getId()));
        }

        return $this->render('@FaultyProduct/faultymail/edit.html.twig', array(
            'faultyMail' => $faultyMail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a faultyMail entity.
     *
     * @Route("/{id}", name="faultymail_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FaultyMail $faultyMail)
    {
        $form = $this->createDeleteForm($faultyMail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($faultyMail);
            $em->flush($faultyMail);
        }

        return $this->redirectToRoute('faultymail_index');
    }

    /**
     * Creates a form to delete a faultyMail entity.
     *
     * @param FaultyMail $faultyMail The faultyMail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FaultyMail $faultyMail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('faultymail_delete', array('id' => $faultyMail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
