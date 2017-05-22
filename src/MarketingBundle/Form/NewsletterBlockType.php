<?php

namespace MarketingBundle\Form;

use MarketingBundle\Entity\Tools;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsletterBlockType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('newsletterBlockType', EntityType::class, [
                'class' => \MarketingBundle\Entity\NewsletterBlockType::class,
                'choice_label' => 'name',
                'label' => 'Modèle',
                'label_attr' => ['class' => 'col-sm-3'],
                'attr' => ['class' => 'col-sm-9']
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => false
            ])
            ->add('cssTitle', ChoiceType::class, [
                'label' => 'Couleur du titre',
                'choices' => Tools::colorCss(),
                'required' => false
            ])
            ->add('newsletterProduct', CollectionType::class, [
                'entry_type' => NewsletterProductType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'prototype_name' => '__product_name__',
                'attr' => array(
                    'class' => 'product-newsletter',
                ),
                'label' => 'Produits'
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MarketingBundle\Entity\NewsletterBlock'
        ));
    }
}
