<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_1856ab07961e3fa0009330d14b32ead75bddde2b99501ff08336a3c693365422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8edae5f03b2b5f605d3cb96b1fcc8dcf6702db7db9d46b87a1742c4c67c553a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8edae5f03b2b5f605d3cb96b1fcc8dcf6702db7db9d46b87a1742c4c67c553a->enter($__internal_f8edae5f03b2b5f605d3cb96b1fcc8dcf6702db7db9d46b87a1742c4c67c553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_b9314d59bce73b106a6f70f1eac140f3cf010e5e508822fb16df8f5de2042641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9314d59bce73b106a6f70f1eac140f3cf010e5e508822fb16df8f5de2042641->enter($__internal_b9314d59bce73b106a6f70f1eac140f3cf010e5e508822fb16df8f5de2042641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8edae5f03b2b5f605d3cb96b1fcc8dcf6702db7db9d46b87a1742c4c67c553a->leave($__internal_f8edae5f03b2b5f605d3cb96b1fcc8dcf6702db7db9d46b87a1742c4c67c553a_prof);

        
        $__internal_b9314d59bce73b106a6f70f1eac140f3cf010e5e508822fb16df8f5de2042641->leave($__internal_b9314d59bce73b106a6f70f1eac140f3cf010e5e508822fb16df8f5de2042641_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_169c33e78737c7146aac2aeee106576f03efeeae78f06b5d97df337b9a32589d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169c33e78737c7146aac2aeee106576f03efeeae78f06b5d97df337b9a32589d->enter($__internal_169c33e78737c7146aac2aeee106576f03efeeae78f06b5d97df337b9a32589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d0e4f85f9fd46a1e4ff2895ffa1558c878cb9831df73cc6568450c20a09f1b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e4f85f9fd46a1e4ff2895ffa1558c878cb9831df73cc6568450c20a09f1b30->enter($__internal_d0e4f85f9fd46a1e4ff2895ffa1558c878cb9831df73cc6568450c20a09f1b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_d0e4f85f9fd46a1e4ff2895ffa1558c878cb9831df73cc6568450c20a09f1b30->leave($__internal_d0e4f85f9fd46a1e4ff2895ffa1558c878cb9831df73cc6568450c20a09f1b30_prof);

        
        $__internal_169c33e78737c7146aac2aeee106576f03efeeae78f06b5d97df337b9a32589d->leave($__internal_169c33e78737c7146aac2aeee106576f03efeeae78f06b5d97df337b9a32589d_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
