<?php

/* @User/Default/base.html.twig */
class __TwigTemplate_2e5eb5192f71724babe3cfd6673a856564609b88228bd08f4e906e4daa4e6844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Default/base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bbc7f407cd130c54afe452f065779d7929a3019f1fae62695855b62a5848610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbc7f407cd130c54afe452f065779d7929a3019f1fae62695855b62a5848610->enter($__internal_5bbc7f407cd130c54afe452f065779d7929a3019f1fae62695855b62a5848610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/base.html.twig"));

        $__internal_8a9fd6e2d2fdd188285715e5267d26fb58e63f9a39487c91c878eba62c634e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9fd6e2d2fdd188285715e5267d26fb58e63f9a39487c91c878eba62c634e7f->enter($__internal_8a9fd6e2d2fdd188285715e5267d26fb58e63f9a39487c91c878eba62c634e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbc7f407cd130c54afe452f065779d7929a3019f1fae62695855b62a5848610->leave($__internal_5bbc7f407cd130c54afe452f065779d7929a3019f1fae62695855b62a5848610_prof);

        
        $__internal_8a9fd6e2d2fdd188285715e5267d26fb58e63f9a39487c91c878eba62c634e7f->leave($__internal_8a9fd6e2d2fdd188285715e5267d26fb58e63f9a39487c91c878eba62c634e7f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb5bd6f8b07a670e83ec4621d6e1ca172782d23cf2dba50d1b5239e1d0a9650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb5bd6f8b07a670e83ec4621d6e1ca172782d23cf2dba50d1b5239e1d0a9650->enter($__internal_ecb5bd6f8b07a670e83ec4621d6e1ca172782d23cf2dba50d1b5239e1d0a9650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44b605d0bf7997475d4dc65bc55f8d1bc8af78c182eb6cc97a8d8c2937aade4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b605d0bf7997475d4dc65bc55f8d1bc8af78c182eb6cc97a8d8c2937aade4d->enter($__internal_44b605d0bf7997475d4dc65bc55f8d1bc8af78c182eb6cc97a8d8c2937aade4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Coucou !";
        
        $__internal_44b605d0bf7997475d4dc65bc55f8d1bc8af78c182eb6cc97a8d8c2937aade4d->leave($__internal_44b605d0bf7997475d4dc65bc55f8d1bc8af78c182eb6cc97a8d8c2937aade4d_prof);

        
        $__internal_ecb5bd6f8b07a670e83ec4621d6e1ca172782d23cf2dba50d1b5239e1d0a9650->leave($__internal_ecb5bd6f8b07a670e83ec4621d6e1ca172782d23cf2dba50d1b5239e1d0a9650_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}Coucou !{% endblock %}", "@User/Default/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Default\\base.html.twig");
    }
}
