<?php

namespace MarketingBundle\Form;

use MarketingBundle\Entity\ModelNewsletter;
use MarketingBundle\Entity\NewsletterMenu;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsletterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre'
            ])
            ->add('modelNewsletter', EntityType::class, [
                'class' => ModelNewsletter::class,
                'choice_label' => 'name',
                'label' => 'Modèle de newsletter'
            ])
            ->add('newsletterHeader', NewsletterHeaderType::class, [
                'label' => 'En-tête'
            ])
            ->add('newsletterMenu', CollectionType::class, [
                'entry_type' => NewsletterMenuType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'attr' => array(
                    'class' => 'menu-newsletter',
                ),
                'label' => 'Menu'
            ])
            ->add('newsletterBlock', CollectionType::class, [
                'entry_type' => NewsletterBlockType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'prototype_name' => '__block_name__',
                'attr' => array(
                    'class' => 'block-newsletter',
                ),
                'label' => 'Blocs'
            ])
            /*
            ->add('modelNewsletter')*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MarketingBundle\Entity\Newsletter'
        ));
    }
}
