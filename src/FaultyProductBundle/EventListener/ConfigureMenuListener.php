<?php

namespace FaultyProductBundle\EventListener;


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
        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_FAULTY'])) {
            $menu = $event->getMenu();

            $menu->addChild('defectueux', ['label' => 'Défectueux'])
                ->setAttribute('dropdown', true);
            $menu['defectueux']->addChild('Ajouter', ['route' => 'faulty_index']);


        }else{
            $menu = $event->getMenu();

            $menu->addChild('Défectueux', ['route' => 'faulty_index']);
        }

        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_ADMIN'])) {

            $menu['defectueux']->addChild('A déclarer', [
                'route' => 'faulty_supplier_declare',
                'routeParameters' => [
                    'status' => 'new'
                ]
            ]);
            $menu['defectueux']->addChild('Mail envoyé', [
                'route' => 'faulty_supplier_declare',
                'routeParameters' => [
                    'status' => 'mail_send'
                ]
            ]);
            $menu['defectueux']->addChild('Renvoi fournisseur', [
                'route' => 'faulty_supplier_declare',
                'routeParameters' => [
                    'status' => 'balance'
                ]
            ]);

            $menu['defectueux']->addChild('Perte', ['route' => 'faulty_supplier_loss']);

            $menu['defectueux']->addChild('Pièces détachées', [
                'route' => 'faulty_supplier_declare',
                'routeParameters' => [
                    'status' => 'piece'
                ]
            ]);

            $menu['defectueux']->addChild('Terminé / Remboursé', [
                'route' => 'faulty_supplier_declare',
                'routeParameters' => [
                    'status' => 'refunded'
                ]
            ]);

            $menu['defectueux']
                ->addChild('Configuration', [
                    'route' => 'faultyconfig_index'
                ])
                ->setAttribute('divider_prepend', true)
            ;
        }
        $menu['defectueux']->addChild('Vérification Entrepot', ['route' => 'faulty_supplier_camalo']);
    }
}