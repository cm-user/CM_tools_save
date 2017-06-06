<?php
/**
 * Created by PhpStorm.
 * User: Okaou
 * Date: 06/06/2017
 * Time: 12:22
 */

namespace MailSignatureBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageCommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', UrlType::class, [
                'label' => 'Lien de redirection'
            ])
            ->add('filePicture', FileType::class, [
                'label' => 'Bannière'
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Modifier'
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MailSignatureBundle\Entity\ImageCommande'
        ));
    }
}