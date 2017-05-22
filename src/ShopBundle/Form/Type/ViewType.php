<?php

namespace ShopBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ViewType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'compound' => false,
        ));
    }

    public function getBlockPrefix(){
        return 'view';
    }
}