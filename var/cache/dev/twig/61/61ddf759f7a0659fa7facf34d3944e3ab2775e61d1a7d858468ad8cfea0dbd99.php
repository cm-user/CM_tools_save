<?php

/* @Marketing/Default/index.html.twig */
class __TwigTemplate_5c864b46f1e17135f5d8e0eabfedfdc6fce4ba2e3b59f000e60d0feb955f9eba extends Twig_Template
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
        $__internal_3ae5c0c72839be4a87e4fb563bdff35213abc3391d0fbac1a84650ad08f59452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae5c0c72839be4a87e4fb563bdff35213abc3391d0fbac1a84650ad08f59452->enter($__internal_3ae5c0c72839be4a87e4fb563bdff35213abc3391d0fbac1a84650ad08f59452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/Default/index.html.twig"));

        $__internal_926583c80c556e89ad696c030a2c862afcc00789dce72074f7a14fced4e21ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926583c80c556e89ad696c030a2c862afcc00789dce72074f7a14fced4e21ee8->enter($__internal_926583c80c556e89ad696c030a2c862afcc00789dce72074f7a14fced4e21ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae5c0c72839be4a87e4fb563bdff35213abc3391d0fbac1a84650ad08f59452->leave($__internal_3ae5c0c72839be4a87e4fb563bdff35213abc3391d0fbac1a84650ad08f59452_prof);

        
        $__internal_926583c80c556e89ad696c030a2c862afcc00789dce72074f7a14fced4e21ee8->leave($__internal_926583c80c556e89ad696c030a2c862afcc00789dce72074f7a14fced4e21ee8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4abd005d606d62d115080c74f164e85380607e1077eef0ca71b6f1df5658e2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abd005d606d62d115080c74f164e85380607e1077eef0ca71b6f1df5658e2d4->enter($__internal_4abd005d606d62d115080c74f164e85380607e1077eef0ca71b6f1df5658e2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2399b9686e356a2d529171356a7caae98f7acfef23268b42206ae024279f3eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2399b9686e356a2d529171356a7caae98f7acfef23268b42206ae024279f3eb9->enter($__internal_2399b9686e356a2d529171356a7caae98f7acfef23268b42206ae024279f3eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2399b9686e356a2d529171356a7caae98f7acfef23268b42206ae024279f3eb9->leave($__internal_2399b9686e356a2d529171356a7caae98f7acfef23268b42206ae024279f3eb9_prof);

        
        $__internal_4abd005d606d62d115080c74f164e85380607e1077eef0ca71b6f1df5658e2d4->leave($__internal_4abd005d606d62d115080c74f164e85380607e1077eef0ca71b6f1df5658e2d4_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8901364a0f33d1687b40493a30ffad4fcb5ee3f8afde5aff7dd4d203ca6c78a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8901364a0f33d1687b40493a30ffad4fcb5ee3f8afde5aff7dd4d203ca6c78a5->enter($__internal_8901364a0f33d1687b40493a30ffad4fcb5ee3f8afde5aff7dd4d203ca6c78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f1cdf1b8ce1c7facf74b2d7d8b45cdcca22d84fddbe99e9070b315936c13ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1cdf1b8ce1c7facf74b2d7d8b45cdcca22d84fddbe99e9070b315936c13ad2->enter($__internal_0f1cdf1b8ce1c7facf74b2d7d8b45cdcca22d84fddbe99e9070b315936c13ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "<style>
    @media (min-width: 768px){
        .dl-horizontal dt{width: 200px;margin-bottom: 5px;}
        .dl-horizontal dd{margin-left: 220px}
    }
</style>
";
        
        $__internal_0f1cdf1b8ce1c7facf74b2d7d8b45cdcca22d84fddbe99e9070b315936c13ad2->leave($__internal_0f1cdf1b8ce1c7facf74b2d7d8b45cdcca22d84fddbe99e9070b315936c13ad2_prof);

        
        $__internal_8901364a0f33d1687b40493a30ffad4fcb5ee3f8afde5aff7dd4d203ca6c78a5->leave($__internal_8901364a0f33d1687b40493a30ffad4fcb5ee3f8afde5aff7dd4d203ca6c78a5_prof);

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
        return array (  87 => 25,  78 => 24,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Module Marketing</h1>

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
{% endblock %}

{% block stylesheets %}
<style>
    @media (min-width: 768px){
        .dl-horizontal dt{width: 200px;margin-bottom: 5px;}
        .dl-horizontal dd{margin-left: 220px}
    }
</style>
{% endblock %}", "@Marketing/Default/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
