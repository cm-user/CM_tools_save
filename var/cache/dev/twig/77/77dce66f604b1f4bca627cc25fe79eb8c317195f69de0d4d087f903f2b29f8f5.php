<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_cab6b00049cd3fc2130cc6c03345ee7cf279e537c689f59e0771dc17829a9957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_1e8f4f02b172759df05f6f6944604df29e31ea6ea312eb8f6b0d58f3df7432b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8f4f02b172759df05f6f6944604df29e31ea6ea312eb8f6b0d58f3df7432b2->enter($__internal_1e8f4f02b172759df05f6f6944604df29e31ea6ea312eb8f6b0d58f3df7432b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_54201b21003a6ced940f397857362a4305279efaaeef3cdbaa2ecad1d8c8f50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54201b21003a6ced940f397857362a4305279efaaeef3cdbaa2ecad1d8c8f50b->enter($__internal_54201b21003a6ced940f397857362a4305279efaaeef3cdbaa2ecad1d8c8f50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8f4f02b172759df05f6f6944604df29e31ea6ea312eb8f6b0d58f3df7432b2->leave($__internal_1e8f4f02b172759df05f6f6944604df29e31ea6ea312eb8f6b0d58f3df7432b2_prof);

        
        $__internal_54201b21003a6ced940f397857362a4305279efaaeef3cdbaa2ecad1d8c8f50b->leave($__internal_54201b21003a6ced940f397857362a4305279efaaeef3cdbaa2ecad1d8c8f50b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_198465f6115f881ee513b30e7f3ebf0b1bcc5d98c5e6207e2e367f7f7e644ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198465f6115f881ee513b30e7f3ebf0b1bcc5d98c5e6207e2e367f7f7e644ede->enter($__internal_198465f6115f881ee513b30e7f3ebf0b1bcc5d98c5e6207e2e367f7f7e644ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7e8d7b41e71812f0b694b30d855767998536970093d608e2efd16dbc75206e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8d7b41e71812f0b694b30d855767998536970093d608e2efd16dbc75206e1d->enter($__internal_7e8d7b41e71812f0b694b30d855767998536970093d608e2efd16dbc75206e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7e8d7b41e71812f0b694b30d855767998536970093d608e2efd16dbc75206e1d->leave($__internal_7e8d7b41e71812f0b694b30d855767998536970093d608e2efd16dbc75206e1d_prof);

        
        $__internal_198465f6115f881ee513b30e7f3ebf0b1bcc5d98c5e6207e2e367f7f7e644ede->leave($__internal_198465f6115f881ee513b30e7f3ebf0b1bcc5d98c5e6207e2e367f7f7e644ede_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83d251607465b274bb646911742ce490558e2b68ef5a8f38d62963d72ac8c242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d251607465b274bb646911742ce490558e2b68ef5a8f38d62963d72ac8c242->enter($__internal_83d251607465b274bb646911742ce490558e2b68ef5a8f38d62963d72ac8c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef16e127a639df3d641c7f980e147c187d39aa9264b9cabda5da0b2b1dbf1a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef16e127a639df3d641c7f980e147c187d39aa9264b9cabda5da0b2b1dbf1a0f->enter($__internal_ef16e127a639df3d641c7f980e147c187d39aa9264b9cabda5da0b2b1dbf1a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ef16e127a639df3d641c7f980e147c187d39aa9264b9cabda5da0b2b1dbf1a0f->leave($__internal_ef16e127a639df3d641c7f980e147c187d39aa9264b9cabda5da0b2b1dbf1a0f_prof);

        
        $__internal_83d251607465b274bb646911742ce490558e2b68ef5a8f38d62963d72ac8c242->leave($__internal_83d251607465b274bb646911742ce490558e2b68ef5a8f38d62963d72ac8c242_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
