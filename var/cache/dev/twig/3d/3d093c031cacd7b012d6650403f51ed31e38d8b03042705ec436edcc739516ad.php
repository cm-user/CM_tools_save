<?php

/* MarketingBundle:modelnewsletter:new.html.twig */
class __TwigTemplate_a8f7721a147b1f5c268584d9bd032a9fe50e9ec3a73327fcc8b825b833fc53bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:modelnewsletter:new.html.twig", 1);
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
        $__internal_17dfe4f20263ed678ca30e2bb6f06a0fba4698952980efaa3ddff5b83ea1a64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dfe4f20263ed678ca30e2bb6f06a0fba4698952980efaa3ddff5b83ea1a64e->enter($__internal_17dfe4f20263ed678ca30e2bb6f06a0fba4698952980efaa3ddff5b83ea1a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:new.html.twig"));

        $__internal_7ffeefc5b28f47811fe0874075e7d9580ae75e42a5aeee2667b54919e20a67bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffeefc5b28f47811fe0874075e7d9580ae75e42a5aeee2667b54919e20a67bc->enter($__internal_7ffeefc5b28f47811fe0874075e7d9580ae75e42a5aeee2667b54919e20a67bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17dfe4f20263ed678ca30e2bb6f06a0fba4698952980efaa3ddff5b83ea1a64e->leave($__internal_17dfe4f20263ed678ca30e2bb6f06a0fba4698952980efaa3ddff5b83ea1a64e_prof);

        
        $__internal_7ffeefc5b28f47811fe0874075e7d9580ae75e42a5aeee2667b54919e20a67bc->leave($__internal_7ffeefc5b28f47811fe0874075e7d9580ae75e42a5aeee2667b54919e20a67bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de4eaf7c886ed00cb439a24ee64a13c10e525f767523554691c7c9ca236e7090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4eaf7c886ed00cb439a24ee64a13c10e525f767523554691c7c9ca236e7090->enter($__internal_de4eaf7c886ed00cb439a24ee64a13c10e525f767523554691c7c9ca236e7090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daf20ff325bc203445697d35348a0744c0b18b3eb67ebcb7482d64a0d4e9c1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf20ff325bc203445697d35348a0744c0b18b3eb67ebcb7482d64a0d4e9c1ae->enter($__internal_daf20ff325bc203445697d35348a0744c0b18b3eb67ebcb7482d64a0d4e9c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_daf20ff325bc203445697d35348a0744c0b18b3eb67ebcb7482d64a0d4e9c1ae->leave($__internal_daf20ff325bc203445697d35348a0744c0b18b3eb67ebcb7482d64a0d4e9c1ae_prof);

        
        $__internal_de4eaf7c886ed00cb439a24ee64a13c10e525f767523554691c7c9ca236e7090->leave($__internal_de4eaf7c886ed00cb439a24ee64a13c10e525f767523554691c7c9ca236e7090_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:modelnewsletter:new.html.twig";
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
", "MarketingBundle:modelnewsletter:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/modelnewsletter/new.html.twig");
    }
}
