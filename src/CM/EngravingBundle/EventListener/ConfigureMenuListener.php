<?phpnamespace CM\ServiceClientBundle\EventListener;use Symfony\Component\DependencyInjection\Container;use Unicorn\Bundle\UserBundle\Event\ConfigureMainMenuLoggedEvent;class ConfigureMenuListener{    private $container;    public function __construct(Container $container)    {        $this->container = $container;    }    /**     * Permet d'ajouter des entrées dans le menu principal     * @param ConfigureMainMenuLoggedEvent $event     */    public function onMainMenuLoggedConfigure(ConfigureMainMenuLoggedEvent $event)    {        $menu = $event->getMenu();        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_USER'])) {            $menu->addChild('service_client', ['label' => 'SAV'])                ->setAttribute('dropdown', true);            $menu['service_client']->addChild('Service', ['route' => 'service_index']);        }        if($this->container->get('security.authorization_checker')->isGranted(['ROLE_FAULTY'])) {            $menu['service_client']->addChild('Arbre', ['route' => 'branch_index']);            $menu['service_client']->addChild('Solution', ['route' => 'solution_index']);            $menu['service_client']->addChild('Mail', ['route' => 'mail_index']);            $menu['service_client']->addChild('Guide', ['route' => 'guide_index']);            $menu['service_client']->addChild('Numéros Téléphone', ['route' => 'phone_index']);            $menu['service_client']->addChild('Pièces Jointes', ['route' => 'attachment_index']);        }    }}