<?php

namespace MarketingBundle\Form;

use MarketingBundle\Entity\Tools;
use MarketingBundle\Form\Extension\SearchButtonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsletterProductType extends AbstractType
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
            /*->add('searchButton', ButtonType::class, [
                'attr' => array(
                    'class' => 'product-search-button',
                ),
                'required' => false,
                'label' => 'Rechercher'
            ])*/
            ->add('idPrestashopProduct', HiddenType::class)
            ->add('idPrestashopDefaultImage', HiddenType::class)
            ->add('title', TextType::class, [
                'label' => 'Titre'
            ])
            ->add('cssTitle', ChoiceType::class, [
                'label' => 'Couleur du titre',
                'choices' => Tools::colorCss(),
                'required' => false
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false
            ])
            ->add('price', TextType::class, [
                'label' => 'Prix'
            ])
            ->add('priceOld', TextType::class, [
                'label' => 'Prix promo'
            ])
            ->add('link', TextType::class, [
                'label' => 'lien'
            ])
            ->add('picture', TextType::class, [
                'label' => 'Chemin l\'image',
            ])
            ->add('filePicture', FileType::class, [
                'required' => false,
                'label' => 'Envoyer une image'
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MarketingBundle\Entity\NewsletterProduct'
        ));
    }
}
