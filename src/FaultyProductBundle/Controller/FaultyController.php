<?php

namespace FaultyProductBundle\Controller;

use FaultyProductBundle\Entity\Faulty;
use FaultyProductBundle\Entity\ProductImage;
use FaultyProductBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Faulty controller.
 *
 * @Route("faulty")
 */
class FaultyController extends Controller
{

    /**
     * Download CSV of all faulty
     *
     * @Route("/download", name="faulty_download")
     * @Method("GET")
     */
    public function csvAction(){
        $response = new StreamedResponse();
        $response->setCallback(function(){
            $handle = fopen('php://output', 'w+');
            $faulties = $this->get('faulty.repository.faulty')->csv();
            $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
            $content = $serializer->encode($faulties, 'csv');
            fputs($handle, $content);
            fclose($handle);
        });
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;
    }

    /**
     * Lists all faultyAction entities.
     *
     * @Route("/", name="faulty_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $faulty = $this->get('faulty.repository.faulty')->findBy([], ['createdAt' => 'DESC']);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $faulty,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('@FaultyProduct/faulty/index.html.twig', array(
            'faulties' => $pagination,
        ));
    }

    /**
     * Creates a new faultyAction entity.
     *
     * @Route("/new", name="faulty_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $faulty = new Faulty();
        $form = $this->createForm('FaultyProductBundle\Form\FaultyType', $faulty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idPrestashopSupplier = $faulty->getProduct()->getSupplier()->getIdPrestashopSupplier();

            $supplier = $this->get('faulty.repository.supplier')->findByIdPrestashopSupplier($idPrestashopSupplier);

            if($supplier instanceof Supplier){
                $faulty->getProduct()->setSupplier($supplier);
            }

            $date = new \DateTime('NOW');
            $faulty->setCreatedAt($date);
            $faulty->setUpdatedAt($date);
            $faulty->setStatusToNew();
            $faulty->setUser($this->getUser());
            $this->get('faulty.repository.faulty')->save($faulty);

            $faulty->getProduct()->setFaulty($faulty);
            $this->get('faulty.repository.product')->save($faulty->getProduct());

            foreach ($faulty->getProduct()->getProductImages() as $productImage) {
                $productImage->setProduct($faulty->getProduct());
                $this->get('faulty.repository.product_image')->save($productImage);
            }

            foreach ($faulty->getFaultyActions() as $faultyAction) {
                $faultyAction->setFaulty($faulty);
                $this->get('faulty.repository.faulty_action')->save($faultyAction);
            }

            return $this->redirectToRoute('faulty_show', array('id' => $faulty->getId()));
        }

        return $this->render('@FaultyProduct/faulty/new.html.twig', array(
            'faulty' => $faulty,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a faultyAction entity.
     *
     * @Route("/{id}", name="faulty_show")
     * @Method("GET")
     */
    public function showAction(Faulty $faulty)
    {
        $deleteForm = $this->createDeleteForm($faulty);

        return $this->render('@FaultyProduct/faulty/show.html.twig', array(
            'faulty' => $faulty,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing faultyAction entity.
     *
     * @Route("/{id}/edit", name="faulty_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Faulty $faulty)
    {
        $deleteForm = $this->createDeleteForm($faulty);
        $editForm = $this->createForm('FaultyProductBundle\Form\FaultyEditType', $faulty);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $idPrestashopSupplier = $faulty->getProduct()->getSupplier()->getIdPrestashopSupplier();

            $supplier = $this->get('faulty.repository.supplier')->findByIdPrestashopSupplier($idPrestashopSupplier);

            if($supplier instanceof Supplier){
                $faulty->getProduct()->setSupplier($supplier);
            }

            $date = new \DateTime('NOW');
            $faulty->setUpdatedAt($date);
            $this->get('faulty.repository.faulty')->save($faulty);

            $faulty->getProduct()->setFaulty($faulty);
            $this->get('faulty.repository.product')->save($faulty->getProduct());

            foreach ($faulty->getProduct()->getProductImages() as $productImage) {
                $productImage->setProduct($faulty->getProduct());
                $this->get('faulty.repository.product_image')->save($productImage);
            }

            foreach ($faulty->getFaultyActions() as $faultyAction) {
                $faultyAction->setFaulty($faulty);
                $this->get('faulty.repository.faulty_action')->save($faultyAction);
            }

            return $this->redirectToRoute('faulty_show', array('id' => $faulty->getId()));
        }

        return $this->render('@FaultyProduct/faulty/edit.html.twig', array(
            'faulty' => $faulty,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a faultyAction entity.
     *
     * @Route("/{id}/delete", name="faulty_delete_bybutton")
     * @return RedirectResponse
     */
    public function delete_bybuttonAction(Faulty $faulty)
    {

        $productImages = $faulty->getProduct()->getProductImages();
        $productImageRepository = $this->get('faulty.repository.product_image');


        foreach ($productImages as $productImage) {
            /* @var $productImage ProductImage */
            $productImageRepository->delete($productImage);
        }

        $this->get('faulty.repository.faulty')->delete($faulty);

        return $this->redirectToRoute('faulty_index');
    }

    /**
     * Deletes a faultyAction entity.
     *
     * @Route("/{id}", name="faulty_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Faulty $faulty)
    {
        $form = $this->createDeleteForm($faulty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productImages = $faulty->getProduct()->getProductImages();
            $productImageRepository = $this->get('faulty.repository.product_image');


            foreach ($productImages as $productImage) {
                /* @var $productImage ProductImage */
                $productImageRepository->delete($productImage);
            }
            $em = $this->getDoctrine()->getManager();
            $em->remove($faulty);
            $em->flush();
        }

        return $this->redirectToRoute('faulty_index');
    }

    

    /**
     * Creates a form to delete a faultyAction entity.
     *
     * @param Faulty $faulty The faultyAction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Faulty $faulty)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('faulty_delete', array('id' => $faulty->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
