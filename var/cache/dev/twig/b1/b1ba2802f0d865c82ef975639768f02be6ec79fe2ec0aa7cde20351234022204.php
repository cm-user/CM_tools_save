<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_641b1776d15e5a3c0139cbf5762ed98da736209fcc1936c0bbe4abd6748fc65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_d67fbd3829e2c74858597d98720b792dcf18cdef41a41ff7629e40c05470a315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67fbd3829e2c74858597d98720b792dcf18cdef41a41ff7629e40c05470a315->enter($__internal_d67fbd3829e2c74858597d98720b792dcf18cdef41a41ff7629e40c05470a315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_49db4531cfee6696936aff55b8b72ad881938069c7481b549b7afdc96aa67ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49db4531cfee6696936aff55b8b72ad881938069c7481b549b7afdc96aa67ed2->enter($__internal_49db4531cfee6696936aff55b8b72ad881938069c7481b549b7afdc96aa67ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d67fbd3829e2c74858597d98720b792dcf18cdef41a41ff7629e40c05470a315->leave($__internal_d67fbd3829e2c74858597d98720b792dcf18cdef41a41ff7629e40c05470a315_prof);

        
        $__internal_49db4531cfee6696936aff55b8b72ad881938069c7481b549b7afdc96aa67ed2->leave($__internal_49db4531cfee6696936aff55b8b72ad881938069c7481b549b7afdc96aa67ed2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fb712f7e1f197b27ce408a78623c793385fd0af05aa6336c10f9cda6263f5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb712f7e1f197b27ce408a78623c793385fd0af05aa6336c10f9cda6263f5ce->enter($__internal_8fb712f7e1f197b27ce408a78623c793385fd0af05aa6336c10f9cda6263f5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92247de2758ee5df62dcb8dab9229745d6c92eb994002c64e8e6a3a87f25d88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92247de2758ee5df62dcb8dab9229745d6c92eb994002c64e8e6a3a87f25d88e->enter($__internal_92247de2758ee5df62dcb8dab9229745d6c92eb994002c64e8e6a3a87f25d88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_92247de2758ee5df62dcb8dab9229745d6c92eb994002c64e8e6a3a87f25d88e->leave($__internal_92247de2758ee5df62dcb8dab9229745d6c92eb994002c64e8e6a3a87f25d88e_prof);

        
        $__internal_8fb712f7e1f197b27ce408a78623c793385fd0af05aa6336c10f9cda6263f5ce->leave($__internal_8fb712f7e1f197b27ce408a78623c793385fd0af05aa6336c10f9cda6263f5ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b295246a69f10931518fae6399e5b0a7612a2bd795aab43ec21e53eb4187629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b295246a69f10931518fae6399e5b0a7612a2bd795aab43ec21e53eb4187629->enter($__internal_6b295246a69f10931518fae6399e5b0a7612a2bd795aab43ec21e53eb4187629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_537b524268670e0e139342da27a0358884afa38d2f3aa382b3bcdfd9a1565427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537b524268670e0e139342da27a0358884afa38d2f3aa382b3bcdfd9a1565427->enter($__internal_537b524268670e0e139342da27a0358884afa38d2f3aa382b3bcdfd9a1565427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_537b524268670e0e139342da27a0358884afa38d2f3aa382b3bcdfd9a1565427->leave($__internal_537b524268670e0e139342da27a0358884afa38d2f3aa382b3bcdfd9a1565427_prof);

        
        $__internal_6b295246a69f10931518fae6399e5b0a7612a2bd795aab43ec21e53eb4187629->leave($__internal_6b295246a69f10931518fae6399e5b0a7612a2bd795aab43ec21e53eb4187629_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
