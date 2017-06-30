<?php

/* @Marketing/Default/index.html.twig */
class __TwigTemplate_81c74d0f1bd2101e5e0da59ebb7696266bfa54058a32a4bf17be1f2963bde02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Module Marketing</h1>

    <p>Cette application regroupe plusieurs modules, à savoir : </p>

    <dl class=\"dl-horizontal\">
        <dt>MarketingBundle</dt>
        <dd>Générateur de template de mail</dd>
        <dt>MailSignatureBundle</dt>
        <dd>Modification de l'image et du lien de signature du mail</dd>
        <dt>FaultyProductBundle</dt>
        <dd>Permet de gérer la déclaration et le stock des produits déféctueux</dd>
        <dt>ModerateReviewBundle</dt>
        <dd>Suppression de l'envoi du mail d'avis client</dd>
        <dt>PictureCrawlerBundle</dt>
        <dd>Téléchargement des images depuis le site : http://www.lavantgardiste.com/</dd>
        <dt>ShopBundle</dt>
        <dd>Gérer les images, vidéos et produits sur l'écran télé</dd>
    </dl>
";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "<style>
    @media (min-width: 768px){
        .dl-horizontal dt{width: 200px;margin-bottom: 5px;}
        .dl-horizontal dd{margin-left: 220px}
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "@Marketing/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 25,  54 => 24,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Marketing/Default/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
