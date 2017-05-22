<?php

namespace FaultyProductBundle\Controller;


use FaultyProductBundle\Entity\Faulty;
use FaultyProductBundle\Entity\Supplier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Supplier controller.
 *
 * @Route("supplier")
 */
class SupplierController extends Controller
{
    /**
     * Lists all supplier entities.
     *
     * @Route("/declare/{status}", name="faulty_supplier_declare")
     * @Template("@FaultyProduct/supplier/index.html.twig")
     * @Method("GET")
     */
    public function newAction($status){
        $suppliers = $this->get('faulty.repository.supplier')->findLast3Month();

        return array(
            'suppliers' => $suppliers,
            'status' => $status
        );
    }

    /**
     * Lists all supplier entities.
     *
     * @Route("/camalo", name="faulty_supplier_camalo")
     * @Template("@FaultyProduct/supplier/camalo.html.twig")
     * @Method("GET")
     */
    public function showCamaloAction(){
        $suppliers = $this->get('faulty.repository.supplier')->findCamalo();

        return array(
            'suppliers' => $suppliers
        );
    }

    /**
     * Change le status de plusieurs faulty
     *
     * @Route("/{supplier}/from/{from}/to/{to}/return/{return}", name="faulty_status_supplier")
     * @Template("@FaultyProduct/supplier/index.html.twig")
     * @Method("GET")
     */
    public function changeFaultyStatusBySupplierAction(Supplier $supplier, $from, $to, $return){
        $faultys = $this->get('faulty.repository.faulty')->findBySupplierStatus($supplier, $from);

        $faultyRepository = $this->get('faulty.repository.faulty');
        foreach ($faultys as $faulty) {
            /* @var $faulty Faulty */
            $faulty->setStatus($to);
            if($to == 'mail_send'){
                $date = new \DateTime('NOW');
                $faulty->setSendMailAt($date);
            }
            $faultyRepository->save($faulty);
        }

        return $this->redirectToRoute('faulty_supplier_declare', [
            'status' => $return
        ]);
    }

    /**
     * Change le status d'un faulty
     *
     * @Route("/id/{faulty}/to/{to}/return/{return}/supplier/{supplier}", name="faulty_status_faulty")
     * @Template("@FaultyProduct/supplier/index.html.twig")
     * @Method("GET")
     */
    public function changeOneFaultyStatusBySupplierAction(Faulty $faulty, $to, $return, Supplier $supplier){

        $faultyRepository = $this->get('faulty.repository.faulty');
        $faulty->setStatus($to);
        if($to == 'mail_send'){
            $date = new \DateTime('NOW');
            $faulty->setSendMailAt($date);
        }
        $faultyRepository->save($faulty);

        return $this->redirectToRoute('faulty_supplier_declare', [
            'status' => $return,
            '_fragment' => $supplier->getIdPrestashopSupplier()
        ]);
    }
}