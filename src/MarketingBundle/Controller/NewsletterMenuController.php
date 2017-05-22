<?php

namespace MarketingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\NewsletterMenu;

/**
 * NewsletterMenu controller.
 * @Route("/newslettermenu")
 */
class NewsletterMenuController extends Controller
{
    /**
     * @Route("/", name="newslettermenu_index")
     * @Template("@Marketing/newslettermenu/index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $newsletterMenus = $this->get('marketingbundle.repository.newsletter.menu')->findAll();

        return array(
            'newsletterMenus' => $newsletterMenus,
        );
    }

    /**
     * @Route("/new", name="newslettermenu_new")
     * @Template("@Marketing/newslettermenu/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletterMenu = new NewsletterMenu();
        $form = $this->createForm('MarketingBundle\Form\NewsletterMenuType', $newsletterMenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.menu')->save($newsletterMenu);

            return $this->redirectToRoute('newslettermenu_show', array('id' => $newsletterMenu->getId()));
        }

        return array(
            'newsletterMenu' => $newsletterMenu,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newslettermenu_show")
     * @Template("@Marketing/newslettermenu/show.html.twig")
     * @param NewsletterMenu $newsletterMenu
     * @return array
     */
    public function showAction(NewsletterMenu $newsletterMenu)
    {
        $deleteForm = $this->createDeleteForm($newsletterMenu);

        return array(
            'newsletterMenu' => $newsletterMenu,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/edit", name="newslettermenu_edit")
     * @Template("@Marketing/newslettermenu/edit.html.twig")
     * @param Request $request
     * @param NewsletterMenu $newsletterMenu
     * @return array
     */
    public function editAction(Request $request, NewsletterMenu $newsletterMenu)
    {
        $deleteForm = $this->createDeleteForm($newsletterMenu);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterMenuType', $newsletterMenu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter.menu')->save($newsletterMenu);

            return $this->redirectToRoute('newslettermenu_edit', array('id' => $newsletterMenu->getId()));
        }

        return array(
            'newsletterMenu' => $newsletterMenu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newslettermenu_delete")
     * @param Request $request
     * @param NewsletterMenu $newsletterMenu
     * @return Route
     */
    public function deleteAction(Request $request, NewsletterMenu $newsletterMenu)
    {
        $form = $this->createDeleteForm($newsletterMenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter.menu')->delete($newsletterMenu);
        }

        return $this->redirectToRoute('newslettermenu_index');
    }

    /**
     * Creates a form to delete a NewsletterMenu entity.
     * @param NewsletterMenu $newsletterMenu The NewsletterMenu entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsletterMenu $newsletterMenu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newslettermenu_delete', array('id' => $newsletterMenu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
