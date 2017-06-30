<?php

/* MarketingBundle:Default:index.html.twig */
class __TwigTemplate_bdde53cad44216243f30ef7b77a2bb5797adf1fca4f03b97ba5d951ad9a958df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:Default:index.html.twig", 1);
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
        $__internal_8f962e082a996036077a5f476f86c9ef56c6dde44914f9d3c482d5e57c1babce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f962e082a996036077a5f476f86c9ef56c6dde44914f9d3c482d5e57c1babce->enter($__internal_8f962e082a996036077a5f476f86c9ef56c6dde44914f9d3c482d5e57c1babce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:Default:index.html.twig"));

        $__internal_796b7cd03ec04718771cad4f2f858fda22b2a4b03fb1b96555535e8274e81ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796b7cd03ec04718771cad4f2f858fda22b2a4b03fb1b96555535e8274e81ac2->enter($__internal_796b7cd03ec04718771cad4f2f858fda22b2a4b03fb1b96555535e8274e81ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f962e082a996036077a5f476f86c9ef56c6dde44914f9d3c482d5e57c1babce->leave($__internal_8f962e082a996036077a5f476f86c9ef56c6dde44914f9d3c482d5e57c1babce_prof);

        
        $__internal_796b7cd03ec04718771cad4f2f858fda22b2a4b03fb1b96555535e8274e81ac2->leave($__internal_796b7cd03ec04718771cad4f2f858fda22b2a4b03fb1b96555535e8274e81ac2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c974c3a7c46f9e43d79820f6538267761e53c15bcbf956db3dede7654f683ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c974c3a7c46f9e43d79820f6538267761e53c15bcbf956db3dede7654f683ee0->enter($__internal_c974c3a7c46f9e43d79820f6538267761e53c15bcbf956db3dede7654f683ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47bbf6203ed7dbb51892f4738a92e4a43098df4f2e62945f445fa07ce0af7bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bbf6203ed7dbb51892f4738a92e4a43098df4f2e62945f445fa07ce0af7bc8->enter($__internal_47bbf6203ed7dbb51892f4738a92e4a43098df4f2e62945f445fa07ce0af7bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47bbf6203ed7dbb51892f4738a92e4a43098df4f2e62945f445fa07ce0af7bc8->leave($__internal_47bbf6203ed7dbb51892f4738a92e4a43098df4f2e62945f445fa07ce0af7bc8_prof);

        
        $__internal_c974c3a7c46f9e43d79820f6538267761e53c15bcbf956db3dede7654f683ee0->leave($__internal_c974c3a7c46f9e43d79820f6538267761e53c15bcbf956db3dede7654f683ee0_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f28c14df82ba7a45ff098d4fdb66c616cd5597d0424569e34cdd628e239d050c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28c14df82ba7a45ff098d4fdb66c616cd5597d0424569e34cdd628e239d050c->enter($__internal_f28c14df82ba7a45ff098d4fdb66c616cd5597d0424569e34cdd628e239d050c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0444fd21edaf220d7ea85f9a7ebd58793c10e2c042e853710e2c87cc0a0080bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0444fd21edaf220d7ea85f9a7ebd58793c10e2c042e853710e2c87cc0a0080bb->enter($__internal_0444fd21edaf220d7ea85f9a7ebd58793c10e2c042e853710e2c87cc0a0080bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "<style>
    @media (min-width: 768px){
        .dl-horizontal dt{width: 200px;margin-bottom: 5px;}
        .dl-horizontal dd{margin-left: 220px}
    }
</style>
";
        
        $__internal_0444fd21edaf220d7ea85f9a7ebd58793c10e2c042e853710e2c87cc0a0080bb->leave($__internal_0444fd21edaf220d7ea85f9a7ebd58793c10e2c042e853710e2c87cc0a0080bb_prof);

        
        $__internal_f28c14df82ba7a45ff098d4fdb66c616cd5597d0424569e34cdd628e239d050c->leave($__internal_f28c14df82ba7a45ff098d4fdb66c616cd5597d0424569e34cdd628e239d050c_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:Default:index.html.twig";
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
{% endblock %}", "MarketingBundle:Default:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/Default/index.html.twig");
    }
}
