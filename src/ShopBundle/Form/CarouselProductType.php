<?php

namespace ShopBundle\Form;


use MarketingBundle\Form\Extension\SearchButtonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarouselProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search', SearchButtonType::class, [
                'attr' => array(
                    'class' => 'product-search',
                ),
                'required' => false,
                'label' => 'Rechercher un produit',
                'word' => 'Rechercher'
            ])
            ->add('idPrestashopProduct', HiddenType::class)
            ->add('idPrestashopDefaultImage', HiddenType::class)
            ->add('name', TextType::class, [
                'label' => 'Nom du produit'
            ])
            ->add('picture', TextType::class, [
                'label' => 'Chemin l\'image',
            ])
            ->add('priceOld', TextType::class, [
                'label' => 'Prix'
            ])
            ->add('price', TextType::class, [
                'label' => 'Prix promo'
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ShopBundle\Entity\CarouselProduct'
        ));
    }
}