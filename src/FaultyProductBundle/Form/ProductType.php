<?php

namespace FaultyProductBundle\Form;


use FaultyProductBundle\Entity\Product;
use MarketingBundle\Form\Extension\SearchButtonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
            ])
            ->add('location', ChoiceType::class, [
                'choices' => Product::locationName(),
                'label' => "Lieux de l'objet",
                'expanded' => true
            ])
            ->add('search', SearchButtonType::class, [
                'attr' => array(
                    'class' => 'product-search',
                ),
                'required' => false,
                'label' => 'Rechercher un produit (nom/ref Presta)',
                'word' => 'Rechercher'
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('idPrestashopProduct', TextType::class, [
                'label' => 'ID Prestashop',
            ])
            ->add('supplierReference', TextType::class, [
                'label' => 'Référence fournisseur',
            ])
            ->add('link', TextType::class, [
                'label' => 'Lien',
            ])
            ->add('costPrice', TextType::class, [
                'label' => 'Prix d\'achat',
            ])
            ->add('supplier', SupplierType::class, [
                'label' => 'Fournisseur'
            ])
            ->add('productImages', CollectionType::class, [
                'entry_type' => ProductImageType::class,
                'allow_add' => true,
                'prototype' => true,
                'attr' => array(
                    'class' => 'faulty-product-image',
                ),
                'label' => 'Images :'
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FaultyProductBundle\Entity\Product'
        ));
    }
}