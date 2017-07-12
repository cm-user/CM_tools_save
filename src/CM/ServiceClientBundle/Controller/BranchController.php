<?php

namespace CM\ServiceClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CM\ServiceClientBundle\Entity\Branch;
use CM\ServiceClientBundle\Form\BranchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;


/**
 * Branch controller.
 *
 * @Route("branch")
 */

class BranchController extends Controller
{
    /**
     * @Route("/", name="branch_index")
     */
    public function indexAction()
    {

        $ListeBranch = $this->get('sc.repository.branch')->findByAsc();

        return $this->render('ServiceClientBundle:branch:index.html.twig', array(
            'branches' =>$ListeBranch,
        ));

    }

    /**
     * @Route("/new", name="branch_new")
     */
    public function newAction(Request $request){
        $branch = new Branch;
        $form = $this->createForm('CM\ServiceClientBundle\Form\BranchType', $branch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->get('sc.repository.branch')->save($branch);

            return $this->redirectToRoute('branch_index');
        }

        return $this->render('ServiceClientBundle:branch:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/show", name="branch_show")
     * @param Branch $branch
     */
    public function showAction(Branch $branch){

        $deleteForm = $this->createDeleteForm($branch);

        return $this->render('ServiceClientBundle:branch:show.html.twig', array(
            'branch' => $branch,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/edit", name="branch_edit")
     * @param Request $request
     * @param Branch $branch
     * @return array|RedirectResponse
     */
    public function editAction(Request $request, Branch $branch)
    {
        $deleteForm = $this->createDeleteForm($branch);
        $editForm = $this->createForm('CM\ServiceClientBundle\Form\BranchType', $branch);
        $editForm->handleRequest($request);
        $message = "Cette branche contient des solutions vous ne pouvez pas la déplacer ni la renommer !
        (Détachez d'abord les solutions liées) ";

        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $solutions=$this->get('sc.repository.branch')->FindSolution($branch);
//            if(empty($solutions)){
                $this->get('sc.repository.branch')->save($branch);
                return $this->redirectToRoute('branch_index');
//            }
//            else {
//
//            }
        }

        return $this->render('ServiceClientBundle:branch:edit.html.twig', array(
            'msg' => $message,
            'branch' => $branch,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/delete", name="branch_delete")
     * @param Request $request
     * @param Branch $branch
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, Branch $branch)
    {

        $this->get('sc.repository.branch')->delete($branch);

        return $this->redirectToRoute('branch_index');
    }

    private function createDeleteForm(Branch $branch)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('branch_delete', array('id' => $branch->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
