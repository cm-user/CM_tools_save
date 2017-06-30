<?php

/* @Marketing/newsletterprovider/new.html.twig */
class __TwigTemplate_64ea2c0f451824cfe7a1aaf270ce5c28afe34f37b2123d620948a92925e06ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterprovider/new.html.twig", 1);
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
        $__internal_efb7ebb462ab7634b0fa2efd7caa7d27c38f426b1598fa0678c2dd1342f8b955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb7ebb462ab7634b0fa2efd7caa7d27c38f426b1598fa0678c2dd1342f8b955->enter($__internal_efb7ebb462ab7634b0fa2efd7caa7d27c38f426b1598fa0678c2dd1342f8b955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/new.html.twig"));

        $__internal_16b588cb40f179d688e4e9785355f2334f7f773e385aa330df42f2ce21bd082d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b588cb40f179d688e4e9785355f2334f7f773e385aa330df42f2ce21bd082d->enter($__internal_16b588cb40f179d688e4e9785355f2334f7f773e385aa330df42f2ce21bd082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb7ebb462ab7634b0fa2efd7caa7d27c38f426b1598fa0678c2dd1342f8b955->leave($__internal_efb7ebb462ab7634b0fa2efd7caa7d27c38f426b1598fa0678c2dd1342f8b955_prof);

        
        $__internal_16b588cb40f179d688e4e9785355f2334f7f773e385aa330df42f2ce21bd082d->leave($__internal_16b588cb40f179d688e4e9785355f2334f7f773e385aa330df42f2ce21bd082d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbebf1631ecf5fba199870271f786056994731d5ed8358cfe18f477828e40034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbebf1631ecf5fba199870271f786056994731d5ed8358cfe18f477828e40034->enter($__internal_fbebf1631ecf5fba199870271f786056994731d5ed8358cfe18f477828e40034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce5958a5f0010a90af29ef8e138fdf7fc3fb08706abae48eae378169fc12fe33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5958a5f0010a90af29ef8e138fdf7fc3fb08706abae48eae378169fc12fe33->enter($__internal_ce5958a5f0010a90af29ef8e138fdf7fc3fb08706abae48eae378169fc12fe33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ce5958a5f0010a90af29ef8e138fdf7fc3fb08706abae48eae378169fc12fe33->leave($__internal_ce5958a5f0010a90af29ef8e138fdf7fc3fb08706abae48eae378169fc12fe33_prof);

        
        $__internal_fbebf1631ecf5fba199870271f786056994731d5ed8358cfe18f477828e40034->leave($__internal_fbebf1631ecf5fba199870271f786056994731d5ed8358cfe18f477828e40034_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterprovider/new.html.twig";
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
    <h1>NewsletterProvider creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterprovider_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterprovider/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterprovider\\new.html.twig");
    }
}
