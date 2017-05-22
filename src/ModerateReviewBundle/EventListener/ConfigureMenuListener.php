<?php

namespace ModerateReviewBundle\EventListener;


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

        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_MODERATE_REVIEW'])) {
            $menu->addChild('Suppression avis client', ['route' => 'moderate_review_index']);
        }
    }
}