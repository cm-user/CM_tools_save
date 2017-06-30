<?php

/* @Marketing/modelnewsletter/new.html.twig */
class __TwigTemplate_9ee4ef46e34b1fc3223f848af09623049f6a7c45d326884bc429cd4a6b2f362a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/modelnewsletter/new.html.twig", 1);
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
        $__internal_ce277b20576192496693686f4d66da4df7b83c053bdec071f4511d7500693870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce277b20576192496693686f4d66da4df7b83c053bdec071f4511d7500693870->enter($__internal_ce277b20576192496693686f4d66da4df7b83c053bdec071f4511d7500693870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/new.html.twig"));

        $__internal_b8fb54a45b309e47504b3e7a12552fb25890ad621f9ea74a8d6ac286c19de705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fb54a45b309e47504b3e7a12552fb25890ad621f9ea74a8d6ac286c19de705->enter($__internal_b8fb54a45b309e47504b3e7a12552fb25890ad621f9ea74a8d6ac286c19de705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce277b20576192496693686f4d66da4df7b83c053bdec071f4511d7500693870->leave($__internal_ce277b20576192496693686f4d66da4df7b83c053bdec071f4511d7500693870_prof);

        
        $__internal_b8fb54a45b309e47504b3e7a12552fb25890ad621f9ea74a8d6ac286c19de705->leave($__internal_b8fb54a45b309e47504b3e7a12552fb25890ad621f9ea74a8d6ac286c19de705_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6adef80ca3e5bbf1ac95b65c9bf3e45a93e26024e17a544052ee070c11ad77d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adef80ca3e5bbf1ac95b65c9bf3e45a93e26024e17a544052ee070c11ad77d2->enter($__internal_6adef80ca3e5bbf1ac95b65c9bf3e45a93e26024e17a544052ee070c11ad77d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6b7499b400587ae43db8b4da74c5d737c045a236ebf0a35d814e3945635b694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b7499b400587ae43db8b4da74c5d737c045a236ebf0a35d814e3945635b694->enter($__internal_a6b7499b400587ae43db8b4da74c5d737c045a236ebf0a35d814e3945635b694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a6b7499b400587ae43db8b4da74c5d737c045a236ebf0a35d814e3945635b694->leave($__internal_a6b7499b400587ae43db8b4da74c5d737c045a236ebf0a35d814e3945635b694_prof);

        
        $__internal_6adef80ca3e5bbf1ac95b65c9bf3e45a93e26024e17a544052ee070c11ad77d2->leave($__internal_6adef80ca3e5bbf1ac95b65c9bf3e45a93e26024e17a544052ee070c11ad77d2_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/modelnewsletter/new.html.twig";
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
    <h1>ModelNewsletter creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('modelnewsletter_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/modelnewsletter/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\modelnewsletter\\new.html.twig");
    }
}
