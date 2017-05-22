<?php

namespace ModerateReviewBundle\Repository;


use Doctrine\DBAL\Connection;
use ModerateReviewBundle\Entity\Order;

class OrderRepository
{
    private $em;

    public function __construct(Connection $connection){
        $this->em = $connection;
    }

    public function findAll(){
        $q = $this->em->query('
            SELECT c.value FROM ps_configuration c WHERE c.name = "CM_ORDER_REVIEW"
        ');

        $r = $q->fetch();

        return $r["value"];
    }

    public function save($orders){
        $q = $this->em->query('
            UPDATE ps_configuration SET value = "'.$orders.'" WHERE name = "CM_ORDER_REVIEW"
        ');

        $q->execute();
    }

    public function findOrderById($id){
        $q = $this->em->query('
            SELECT o.id_order, c.firstname, c.lastname, c.email, o.date_add
            FROM ps_orders o 
            LEFT JOIN ps_customer c ON o.id_customer = c.id_customer
            WHERE o.id_order = '.$id.'
        ');

        $r = $q->fetch();

        if($r){
            $o = new Order();
            $o->setId($r['id_order']);
            $o->setName($r['firstname']);
            $o->setSurname($r['lastname']);
            $o->setMail($r['email']);
            $o->setDateAdd($r['date_add']);
            return $o;
        }else{
            return null;
        }
    }
}