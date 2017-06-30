<?php

/* MailSignatureBundle:MailSignature:index.html.twig */
class __TwigTemplate_e470c28b2c177e10a425ef79cc065a3d69a866ab615210d6a79ceafcbd93a687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MailSignatureBundle:MailSignature:index.html.twig", 1);
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
        $__internal_43ded303d9cfd770d7b7fc2454804e67851549b1146f6c3bbf120034645cfef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ded303d9cfd770d7b7fc2454804e67851549b1146f6c3bbf120034645cfef7->enter($__internal_43ded303d9cfd770d7b7fc2454804e67851549b1146f6c3bbf120034645cfef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MailSignatureBundle:MailSignature:index.html.twig"));

        $__internal_bbfc82996e9932bf0ada5bc6629c55d3f5de4cbcf07e5eb461c02588b9c91bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfc82996e9932bf0ada5bc6629c55d3f5de4cbcf07e5eb461c02588b9c91bad->enter($__internal_bbfc82996e9932bf0ada5bc6629c55d3f5de4cbcf07e5eb461c02588b9c91bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MailSignatureBundle:MailSignature:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ded303d9cfd770d7b7fc2454804e67851549b1146f6c3bbf120034645cfef7->leave($__internal_43ded303d9cfd770d7b7fc2454804e67851549b1146f6c3bbf120034645cfef7_prof);

        
        $__internal_bbfc82996e9932bf0ada5bc6629c55d3f5de4cbcf07e5eb461c02588b9c91bad->leave($__internal_bbfc82996e9932bf0ada5bc6629c55d3f5de4cbcf07e5eb461c02588b9c91bad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_290f540d8354ac9328b096fd55a772383df97d53b60a12fc49d22aa8e3f19c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290f540d8354ac9328b096fd55a772383df97d53b60a12fc49d22aa8e3f19c00->enter($__internal_290f540d8354ac9328b096fd55a772383df97d53b60a12fc49d22aa8e3f19c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4266fb7cb0e5f49f9af3d10d3c7c3bfcec1a5eeb2498ec9378f0eabd1a7d0671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4266fb7cb0e5f49f9af3d10d3c7c3bfcec1a5eeb2498ec9378f0eabd1a7d0671->enter($__internal_4266fb7cb0e5f49f9af3d10d3c7c3bfcec1a5eeb2498ec9378f0eabd1a7d0671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Modification Signature de Mail</h1>

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
        
        $__internal_4266fb7cb0e5f49f9af3d10d3c7c3bfcec1a5eeb2498ec9378f0eabd1a7d0671->leave($__internal_4266fb7cb0e5f49f9af3d10d3c7c3bfcec1a5eeb2498ec9378f0eabd1a7d0671_prof);

        
        $__internal_290f540d8354ac9328b096fd55a772383df97d53b60a12fc49d22aa8e3f19c00->leave($__internal_290f540d8354ac9328b096fd55a772383df97d53b60a12fc49d22aa8e3f19c00_prof);

    }

    public function getTemplateName()
    {
        return "MailSignatureBundle:MailSignature:index.html.twig";
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

    <h1>Modification Signature de Mail</h1>

    {{ form(form) }}


    <p>Url en cours : {{ url_actuelle }}</p>
    <p>Image en cours : <img src=\"{{ img_actuelle }}\" /></p>

{% endblock %}", "MailSignatureBundle:MailSignature:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MailSignatureBundle/Resources/views/MailSignature/index.html.twig");
    }
}
