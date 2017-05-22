<?php

namespace ShopBundle\Form;


use ShopBundle\Form\Type\ViewType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;

class CarouselItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', HiddenType::class)
            ->add('type', HiddenType::class)
            ->add('name', ViewType::class, [
                'label' => 'Description',
            ])
        ;
    }
}