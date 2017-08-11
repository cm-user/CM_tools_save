<?php

namespace MarketingBundle\EventListener;

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

        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_NEWSLETTER'])) {
            $menu->addChild('configuration_newsletter', ['label' => 'Newsletter'])
                ->setAttribute('dropdown', true);

            if ($this->container->get('security.authorization_checker')->isGranted(['ROLE_NEWSLETTER'])) {
                $menu['configuration_newsletter']->addChild('Liste Newsletter', ['route' => 'newsletter_index']);
            }

            if ($this->container->get('security.authorization_checker')->isGranted(['ROLE_ADMIN'])) {
                $menu['configuration_newsletter']->addChild('Boutique', ['route' => 'shop_index']);
                $menu['configuration_newsletter']->addChild('Configuration boutique', ['route' => 'shopconfiguration_index']);
                $menu['configuration_newsletter']->addChild('Fournisseur d\'envoi de mail', ['route' => 'provider_index']);
                $menu['configuration_newsletter']->addChild('Configuration du fournisseur d\'envoi de mail', ['route' => 'newsletterprovider_index']);
                $menu['configuration_newsletter']->addChild('Modèle de newsletter', ['route' => 'modelnewsletter_index']);
                $menu['configuration_newsletter']->addChild('Modèle de block de newsletter', ['route' => 'newsletterblocktype_index']);
            }
        }
    }
}