<?php

namespace ShopBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

class CarouselType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('data', CollectionType::class, [
                'label' => 'Items',
                'entry_type' => CarouselItemType::class,
                'attr' => array(
                    'class' => 'my-selector',
                ),
            ])
        ;
    }
}