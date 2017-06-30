<?php

/* @Marketing/shop/new.html.twig */
class __TwigTemplate_f6ef3dd58ec225f95b9295e5068ddebe3fcb681190e493b13364d5ddc2e63454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shop/new.html.twig", 1);
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
        $__internal_cc09c7c38f38c8571c30344ad513d2ec357fb5f3a7b9d2b8fd18beb504a8cbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc09c7c38f38c8571c30344ad513d2ec357fb5f3a7b9d2b8fd18beb504a8cbe8->enter($__internal_cc09c7c38f38c8571c30344ad513d2ec357fb5f3a7b9d2b8fd18beb504a8cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/new.html.twig"));

        $__internal_9e3c146cdc943d7866a1c8609c2f93c85ebff139c2193fa916f33f9a5d87c58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3c146cdc943d7866a1c8609c2f93c85ebff139c2193fa916f33f9a5d87c58e->enter($__internal_9e3c146cdc943d7866a1c8609c2f93c85ebff139c2193fa916f33f9a5d87c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc09c7c38f38c8571c30344ad513d2ec357fb5f3a7b9d2b8fd18beb504a8cbe8->leave($__internal_cc09c7c38f38c8571c30344ad513d2ec357fb5f3a7b9d2b8fd18beb504a8cbe8_prof);

        
        $__internal_9e3c146cdc943d7866a1c8609c2f93c85ebff139c2193fa916f33f9a5d87c58e->leave($__internal_9e3c146cdc943d7866a1c8609c2f93c85ebff139c2193fa916f33f9a5d87c58e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_598f434b32a4781c87f9484d8fe5d6ebc9b21f1cec4601975bd533e603410351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598f434b32a4781c87f9484d8fe5d6ebc9b21f1cec4601975bd533e603410351->enter($__internal_598f434b32a4781c87f9484d8fe5d6ebc9b21f1cec4601975bd533e603410351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7da4cb7c9b8fba790ad02e682ad8f1f9144ae3823536ea11caf5432b1f21d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7da4cb7c9b8fba790ad02e682ad8f1f9144ae3823536ea11caf5432b1f21d86->enter($__internal_b7da4cb7c9b8fba790ad02e682ad8f1f9144ae3823536ea11caf5432b1f21d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b7da4cb7c9b8fba790ad02e682ad8f1f9144ae3823536ea11caf5432b1f21d86->leave($__internal_b7da4cb7c9b8fba790ad02e682ad8f1f9144ae3823536ea11caf5432b1f21d86_prof);

        
        $__internal_598f434b32a4781c87f9484d8fe5d6ebc9b21f1cec4601975bd533e603410351->leave($__internal_598f434b32a4781c87f9484d8fe5d6ebc9b21f1cec4601975bd533e603410351_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shop/new.html.twig";
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
    <h1>Shop creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('shop_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/shop/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shop\\new.html.twig");
    }
}
