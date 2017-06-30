<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19b5f9f7ba5e47f602ab0fb3101669c1a03a511dd013680db45d1ecd64254a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3486ccb6b5c14b08935bd1539d36c2707cbd5afe13e2493b85964f8e7ad19ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3486ccb6b5c14b08935bd1539d36c2707cbd5afe13e2493b85964f8e7ad19ca7->enter($__internal_3486ccb6b5c14b08935bd1539d36c2707cbd5afe13e2493b85964f8e7ad19ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_20a62de5c2a31c23f6e356f2f50942d1b9ae89ce7cc4061116f1a3a4f26c4f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a62de5c2a31c23f6e356f2f50942d1b9ae89ce7cc4061116f1a3a4f26c4f29->enter($__internal_20a62de5c2a31c23f6e356f2f50942d1b9ae89ce7cc4061116f1a3a4f26c4f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3486ccb6b5c14b08935bd1539d36c2707cbd5afe13e2493b85964f8e7ad19ca7->leave($__internal_3486ccb6b5c14b08935bd1539d36c2707cbd5afe13e2493b85964f8e7ad19ca7_prof);

        
        $__internal_20a62de5c2a31c23f6e356f2f50942d1b9ae89ce7cc4061116f1a3a4f26c4f29->leave($__internal_20a62de5c2a31c23f6e356f2f50942d1b9ae89ce7cc4061116f1a3a4f26c4f29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ccf4847451ed3ab71f16a87811af16ef767e00f7a7d4fba801fc660a3016667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccf4847451ed3ab71f16a87811af16ef767e00f7a7d4fba801fc660a3016667->enter($__internal_2ccf4847451ed3ab71f16a87811af16ef767e00f7a7d4fba801fc660a3016667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d1859eb4301a995f0913a98fdf85ef16b084a8a31048f2b2681ee53124463a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1859eb4301a995f0913a98fdf85ef16b084a8a31048f2b2681ee53124463a8->enter($__internal_8d1859eb4301a995f0913a98fdf85ef16b084a8a31048f2b2681ee53124463a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8d1859eb4301a995f0913a98fdf85ef16b084a8a31048f2b2681ee53124463a8->leave($__internal_8d1859eb4301a995f0913a98fdf85ef16b084a8a31048f2b2681ee53124463a8_prof);

        
        $__internal_2ccf4847451ed3ab71f16a87811af16ef767e00f7a7d4fba801fc660a3016667->leave($__internal_2ccf4847451ed3ab71f16a87811af16ef767e00f7a7d4fba801fc660a3016667_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d4bc8f8cc397c0cdead2968e9c18216019f252c6cb68aeeff57669859406e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d4bc8f8cc397c0cdead2968e9c18216019f252c6cb68aeeff57669859406e9->enter($__internal_36d4bc8f8cc397c0cdead2968e9c18216019f252c6cb68aeeff57669859406e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfc0a2e2264f3c4bf77133c711716105eb4dd34840336afafef40c800ceb8467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc0a2e2264f3c4bf77133c711716105eb4dd34840336afafef40c800ceb8467->enter($__internal_bfc0a2e2264f3c4bf77133c711716105eb4dd34840336afafef40c800ceb8467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_bfc0a2e2264f3c4bf77133c711716105eb4dd34840336afafef40c800ceb8467->leave($__internal_bfc0a2e2264f3c4bf77133c711716105eb4dd34840336afafef40c800ceb8467_prof);

        
        $__internal_36d4bc8f8cc397c0cdead2968e9c18216019f252c6cb68aeeff57669859406e9->leave($__internal_36d4bc8f8cc397c0cdead2968e9c18216019f252c6cb68aeeff57669859406e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
