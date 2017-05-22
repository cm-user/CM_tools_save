<?php

namespace FaultyProductBundle\Form;


use FaultyProductBundle\Entity\Supplier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupplierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, [
                'label' => 'Nom du fournisseur'
            ])
            ->add('idPrestashopSupplier', HiddenType::class)
        ;

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();
            if($data instanceof Supplier){
                $form->remove('name');
                $form->add('name', ChoiceType::class, array(
                    'choices' => array(
                        $data->getName() => $data->getName(),
                    )
                ));
            }
        });

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();
            $form->remove('name');
            $form->add('name', ChoiceType::class, array(
                'choices' => array(
                    $data['name'] => $data['name'],
                )
            ));
        });
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FaultyProductBundle\Entity\Supplier'
        ));
    }
}