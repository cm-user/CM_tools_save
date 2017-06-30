<?php

namespace MailSignatureBundle\EventListener;

use Symfony\Component\DependencyInjection\Container;
use Unicorn\Bundle\UserBundle\Event\ConfigureMainMenuLoggedEvent;

class ConfigureMenuListener
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Permet d'ajouter des entrées dans le menu principal
     * @param ConfigureMainMenuLoggedEvent $event
     */
    public function onMainMenuLoggedConfigure(ConfigureMainMenuLoggedEvent $event)
    {
        $menu = $event->getMenu();


        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_MAIL_SIGNATURE'])) {
            $menu->addChild('images_publicitaires', ['label' => 'Images Publicitaires'])
                ->setAttribute('dropdown', true);
            $menu['images_publicitaires']->addChild('Signature Mail', ['route' => 'mail_signature_index']);
            $menu['images_publicitaires']->addChild('Image Fin de Commande', ['route' => 'image_fin_commande_index']);
        }

    }
}