<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_ecfb442b0ab43f49879da878d182a3b0727ec3f9f947684e2570627ab00c5cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075d3bf87922cce4e0c61c7c19031a2534254be888ca974b674f4495c86f7425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075d3bf87922cce4e0c61c7c19031a2534254be888ca974b674f4495c86f7425->enter($__internal_075d3bf87922cce4e0c61c7c19031a2534254be888ca974b674f4495c86f7425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6af407ac3330c87847d3e5a30204e9b9177d995ce9ad801e1dc8a10c8936506f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af407ac3330c87847d3e5a30204e9b9177d995ce9ad801e1dc8a10c8936506f->enter($__internal_6af407ac3330c87847d3e5a30204e9b9177d995ce9ad801e1dc8a10c8936506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075d3bf87922cce4e0c61c7c19031a2534254be888ca974b674f4495c86f7425->leave($__internal_075d3bf87922cce4e0c61c7c19031a2534254be888ca974b674f4495c86f7425_prof);

        
        $__internal_6af407ac3330c87847d3e5a30204e9b9177d995ce9ad801e1dc8a10c8936506f->leave($__internal_6af407ac3330c87847d3e5a30204e9b9177d995ce9ad801e1dc8a10c8936506f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3f0e0baa8efe1e45c9f925f91d8e3695c0ac354ed9436c6e23fecc94ae46106f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0e0baa8efe1e45c9f925f91d8e3695c0ac354ed9436c6e23fecc94ae46106f->enter($__internal_3f0e0baa8efe1e45c9f925f91d8e3695c0ac354ed9436c6e23fecc94ae46106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_50e81549aac94d73303beffeb364bf4cb34ac2552e99c05068595a33e5739d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e81549aac94d73303beffeb364bf4cb34ac2552e99c05068595a33e5739d22->enter($__internal_50e81549aac94d73303beffeb364bf4cb34ac2552e99c05068595a33e5739d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_50e81549aac94d73303beffeb364bf4cb34ac2552e99c05068595a33e5739d22->leave($__internal_50e81549aac94d73303beffeb364bf4cb34ac2552e99c05068595a33e5739d22_prof);

        
        $__internal_3f0e0baa8efe1e45c9f925f91d8e3695c0ac354ed9436c6e23fecc94ae46106f->leave($__internal_3f0e0baa8efe1e45c9f925f91d8e3695c0ac354ed9436c6e23fecc94ae46106f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32de62178b0b981decf75ed8d1b1ba6d12e439a25c683cd150df6ea78246aa73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32de62178b0b981decf75ed8d1b1ba6d12e439a25c683cd150df6ea78246aa73->enter($__internal_32de62178b0b981decf75ed8d1b1ba6d12e439a25c683cd150df6ea78246aa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcbc61fd492aeb96e6d4238307c3020039718fb60e8a031cf728069a57745965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbc61fd492aeb96e6d4238307c3020039718fb60e8a031cf728069a57745965->enter($__internal_fcbc61fd492aeb96e6d4238307c3020039718fb60e8a031cf728069a57745965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fcbc61fd492aeb96e6d4238307c3020039718fb60e8a031cf728069a57745965->leave($__internal_fcbc61fd492aeb96e6d4238307c3020039718fb60e8a031cf728069a57745965_prof);

        
        $__internal_32de62178b0b981decf75ed8d1b1ba6d12e439a25c683cd150df6ea78246aa73->leave($__internal_32de62178b0b981decf75ed8d1b1ba6d12e439a25c683cd150df6ea78246aa73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
