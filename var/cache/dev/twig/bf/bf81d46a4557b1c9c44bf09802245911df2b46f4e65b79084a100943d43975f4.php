<?php

/* @Marketing/provider/new.html.twig */
class __TwigTemplate_dd2d18ae81881fc0c91135394e1def656ce5e22cc8f3d158c5f6457a7c80ed1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/provider/new.html.twig", 1);
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
        $__internal_e6eaa8bdc62696ef40bd7a40f6d09c089fd30ea9f16ef8f311e2a0c13d3c16c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6eaa8bdc62696ef40bd7a40f6d09c089fd30ea9f16ef8f311e2a0c13d3c16c2->enter($__internal_e6eaa8bdc62696ef40bd7a40f6d09c089fd30ea9f16ef8f311e2a0c13d3c16c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/new.html.twig"));

        $__internal_5427bb50db4b265e26e4dc3ad4bbddfc4bc8d01e29c5327cd9ce5aec12c410c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5427bb50db4b265e26e4dc3ad4bbddfc4bc8d01e29c5327cd9ce5aec12c410c5->enter($__internal_5427bb50db4b265e26e4dc3ad4bbddfc4bc8d01e29c5327cd9ce5aec12c410c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6eaa8bdc62696ef40bd7a40f6d09c089fd30ea9f16ef8f311e2a0c13d3c16c2->leave($__internal_e6eaa8bdc62696ef40bd7a40f6d09c089fd30ea9f16ef8f311e2a0c13d3c16c2_prof);

        
        $__internal_5427bb50db4b265e26e4dc3ad4bbddfc4bc8d01e29c5327cd9ce5aec12c410c5->leave($__internal_5427bb50db4b265e26e4dc3ad4bbddfc4bc8d01e29c5327cd9ce5aec12c410c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b85ccf67bcb1036870266dd07c440326e62251f949d7e1692e95c46590ea5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b85ccf67bcb1036870266dd07c440326e62251f949d7e1692e95c46590ea5f4->enter($__internal_6b85ccf67bcb1036870266dd07c440326e62251f949d7e1692e95c46590ea5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7f64531c09ba13c535cfaaf96472889a404eede6a531e28848d59c282b742e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f64531c09ba13c535cfaaf96472889a404eede6a531e28848d59c282b742e4->enter($__internal_e7f64531c09ba13c535cfaaf96472889a404eede6a531e28848d59c282b742e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e7f64531c09ba13c535cfaaf96472889a404eede6a531e28848d59c282b742e4->leave($__internal_e7f64531c09ba13c535cfaaf96472889a404eede6a531e28848d59c282b742e4_prof);

        
        $__internal_6b85ccf67bcb1036870266dd07c440326e62251f949d7e1692e95c46590ea5f4->leave($__internal_6b85ccf67bcb1036870266dd07c440326e62251f949d7e1692e95c46590ea5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/provider/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Provider creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/provider/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\provider\\new.html.twig");
    }
}
