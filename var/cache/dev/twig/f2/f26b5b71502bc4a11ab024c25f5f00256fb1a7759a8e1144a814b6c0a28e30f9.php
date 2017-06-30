<?php

/* @Marketing/newsletterblock/new.html.twig */
class __TwigTemplate_ff3fa1bfdac6ac8c82d3dba96a0070d17041202c804a89e18e8cc18a6e5c0a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblock/new.html.twig", 1);
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
        $__internal_b27401952ea09245cd84d9b4b473c747ea460de98a33a4f29926d17c64e86a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27401952ea09245cd84d9b4b473c747ea460de98a33a4f29926d17c64e86a23->enter($__internal_b27401952ea09245cd84d9b4b473c747ea460de98a33a4f29926d17c64e86a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/new.html.twig"));

        $__internal_4ee2da48917ee69738bfa0efb456f839a290e72be718a6a67d5042fc996d1ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee2da48917ee69738bfa0efb456f839a290e72be718a6a67d5042fc996d1ca8->enter($__internal_4ee2da48917ee69738bfa0efb456f839a290e72be718a6a67d5042fc996d1ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27401952ea09245cd84d9b4b473c747ea460de98a33a4f29926d17c64e86a23->leave($__internal_b27401952ea09245cd84d9b4b473c747ea460de98a33a4f29926d17c64e86a23_prof);

        
        $__internal_4ee2da48917ee69738bfa0efb456f839a290e72be718a6a67d5042fc996d1ca8->leave($__internal_4ee2da48917ee69738bfa0efb456f839a290e72be718a6a67d5042fc996d1ca8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32691df51ee2ac0d599d0fced4c67ae89b5fedd5b5ad85a9835cfaafd2a44b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32691df51ee2ac0d599d0fced4c67ae89b5fedd5b5ad85a9835cfaafd2a44b3b->enter($__internal_32691df51ee2ac0d599d0fced4c67ae89b5fedd5b5ad85a9835cfaafd2a44b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44a56cf474ff8872ee7caad389ce9e1a29a8dbcc9d6bd46cc582e0dfdd975994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a56cf474ff8872ee7caad389ce9e1a29a8dbcc9d6bd46cc582e0dfdd975994->enter($__internal_44a56cf474ff8872ee7caad389ce9e1a29a8dbcc9d6bd46cc582e0dfdd975994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_44a56cf474ff8872ee7caad389ce9e1a29a8dbcc9d6bd46cc582e0dfdd975994->leave($__internal_44a56cf474ff8872ee7caad389ce9e1a29a8dbcc9d6bd46cc582e0dfdd975994_prof);

        
        $__internal_32691df51ee2ac0d599d0fced4c67ae89b5fedd5b5ad85a9835cfaafd2a44b3b->leave($__internal_32691df51ee2ac0d599d0fced4c67ae89b5fedd5b5ad85a9835cfaafd2a44b3b_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblock/new.html.twig";
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
    <h1>NewsletterBlock creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblock_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterblock/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblock\\new.html.twig");
    }
}
