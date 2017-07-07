<?php

namespace ShopBundle\EventListener;


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
        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_SHOP'])) {
            $menu = $event->getMenu();

            $menu->addChild('shopdashboard', ['label' => 'Écran'])
                ->setAttribute('dropdown', true);

            /*$menu['shopdashboard']->addChild('Produits', ['route' => 'faulty_index']);*/
            $menu['shopdashboard']->addChild('Images', ['route' => 'carousel_picture_index']);
            $menu['shopdashboard']->addChild('Vidéos', ['route' => 'carousel_video_index']);
            $menu['shopdashboard']->addChild('Produits', ['route' => 'carousel_product_index']);
            $menu['shopdashboard']->addChild('Tri', ['route' => 'carousel_index']);
            $menu['shopdashboard']->addChild('Configuration boutique', ['route' => 'carousel_shopconfiguration_index']);
            $menu['shopdashboard']->addChild('Cast !!', ['route' => 'showing_list']);
        }
    }
}