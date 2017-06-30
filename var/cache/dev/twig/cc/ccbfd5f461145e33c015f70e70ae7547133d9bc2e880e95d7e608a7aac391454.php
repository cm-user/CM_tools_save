<?php

/* MailSignatureBundle:ImageCommande:index.html.twig */
class __TwigTemplate_5a502db57b3cfc895fc583688e4f0cd9209a6d49407a9dcfe53ec284baf55dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MailSignatureBundle:ImageCommande:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c6ffb985a829667eb5847cb5fc18cb9c67ca7641375daf1ab6711e9a6f9d885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6ffb985a829667eb5847cb5fc18cb9c67ca7641375daf1ab6711e9a6f9d885->enter($__internal_0c6ffb985a829667eb5847cb5fc18cb9c67ca7641375daf1ab6711e9a6f9d885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MailSignatureBundle:ImageCommande:index.html.twig"));

        $__internal_a47ecd90eecfbd3f8ce3d6c495c397a2460de2a3a0075b5cbb037c6a9aebf5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47ecd90eecfbd3f8ce3d6c495c397a2460de2a3a0075b5cbb037c6a9aebf5de->enter($__internal_a47ecd90eecfbd3f8ce3d6c495c397a2460de2a3a0075b5cbb037c6a9aebf5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MailSignatureBundle:ImageCommande:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6ffb985a829667eb5847cb5fc18cb9c67ca7641375daf1ab6711e9a6f9d885->leave($__internal_0c6ffb985a829667eb5847cb5fc18cb9c67ca7641375daf1ab6711e9a6f9d885_prof);

        
        $__internal_a47ecd90eecfbd3f8ce3d6c495c397a2460de2a3a0075b5cbb037c6a9aebf5de->leave($__internal_a47ecd90eecfbd3f8ce3d6c495c397a2460de2a3a0075b5cbb037c6a9aebf5de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b6198d75450e417334d61cf8065b026dd18fd98badfb6fa9bab574c8ee6c44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6198d75450e417334d61cf8065b026dd18fd98badfb6fa9bab574c8ee6c44b->enter($__internal_2b6198d75450e417334d61cf8065b026dd18fd98badfb6fa9bab574c8ee6c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d598385edf2ead1d43d7c2105e1b7300da52fca3efb3deb51f4b78cf94cee05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d598385edf2ead1d43d7c2105e1b7300da52fca3efb3deb51f4b78cf94cee05e->enter($__internal_d598385edf2ead1d43d7c2105e1b7300da52fca3efb3deb51f4b78cf94cee05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Modification image de fin de commande</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "


    <p>Url en cours : ";
        // line 10
        echo twig_escape_filter($this->env, ($context["url_actuelle"] ?? $this->getContext($context, "url_actuelle")), "html", null, true);
        echo "</p>
    <p>Image en cours : <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["img_actuelle"] ?? $this->getContext($context, "img_actuelle")), "html", null, true);
        echo "\" /></p>

";
        
        $__internal_d598385edf2ead1d43d7c2105e1b7300da52fca3efb3deb51f4b78cf94cee05e->leave($__internal_d598385edf2ead1d43d7c2105e1b7300da52fca3efb3deb51f4b78cf94cee05e_prof);

        
        $__internal_2b6198d75450e417334d61cf8065b026dd18fd98badfb6fa9bab574c8ee6c44b->leave($__internal_2b6198d75450e417334d61cf8065b026dd18fd98badfb6fa9bab574c8ee6c44b_prof);

    }

    public function getTemplateName()
    {
        return "MailSignatureBundle:ImageCommande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Modification image de fin de commande</h1>

    {{ form(form) }}


    <p>Url en cours : {{ url_actuelle }}</p>
    <p>Image en cours : <img src=\"{{ img_actuelle }}\" /></p>

{% endblock %}", "MailSignatureBundle:ImageCommande:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MailSignatureBundle/Resources/views/ImageCommande/index.html.twig");
    }
}
