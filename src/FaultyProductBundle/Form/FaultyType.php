<?php

namespace FaultyProductBundle\Form;


use FaultyProductBundle\Entity\Faulty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FaultyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product', ProductType::class, [
                'label' => 'Produit'
            ])
            /*->add('status', ChoiceType::class, [
                'choices' => Faulty::statusName()
            ])*/
            ->add('reception', CheckboxType::class, [
                'label' => 'Vu à la réception',
                'required' => false
            ])
            ->add('reason', TextType::class, [
                'label' => 'Description'
            ])
            ->add('idOrder', TextType::class, [
                'label' => 'Numéro de commande',
                'required' => false
            ])
            ->add('faultyActions', CollectionType::class, [
                'entry_type' => FaultyActionType::class,
                'allow_add' => true,
                'prototype' => true,
                'attr' => array(
                    'class' => 'faulty-action',
                ),
                'label' => 'Suivi :'
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FaultyProductBundle\Entity\Faulty',
            'csrf_protection' => false,
        ));
    }
}