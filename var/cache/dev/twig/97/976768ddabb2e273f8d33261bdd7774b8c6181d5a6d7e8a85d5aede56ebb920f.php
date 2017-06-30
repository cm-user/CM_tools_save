<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_1ecd8a5e3fe5040509ccdd80d15da6990f736e62a1c4e72b052b1a5feb4bee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
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
        $__internal_dc3635d5e76a28a9783a282f7c66c3663129926b14b75a8b25f433e1da16a2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3635d5e76a28a9783a282f7c66c3663129926b14b75a8b25f433e1da16a2e9->enter($__internal_dc3635d5e76a28a9783a282f7c66c3663129926b14b75a8b25f433e1da16a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_177d3352c4751129a9c78c8491c29a9281e92db755574d414addcfc09ef33f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177d3352c4751129a9c78c8491c29a9281e92db755574d414addcfc09ef33f28->enter($__internal_177d3352c4751129a9c78c8491c29a9281e92db755574d414addcfc09ef33f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3635d5e76a28a9783a282f7c66c3663129926b14b75a8b25f433e1da16a2e9->leave($__internal_dc3635d5e76a28a9783a282f7c66c3663129926b14b75a8b25f433e1da16a2e9_prof);

        
        $__internal_177d3352c4751129a9c78c8491c29a9281e92db755574d414addcfc09ef33f28->leave($__internal_177d3352c4751129a9c78c8491c29a9281e92db755574d414addcfc09ef33f28_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_932a1ac2d1a7c65268b0eee393495c2cca26b6137ba3be260f7d8c22c20e254d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932a1ac2d1a7c65268b0eee393495c2cca26b6137ba3be260f7d8c22c20e254d->enter($__internal_932a1ac2d1a7c65268b0eee393495c2cca26b6137ba3be260f7d8c22c20e254d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_1e7bff1879c715bf07fa570dbac9ff27be71e7126cca894a46f1a0185dfa8641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7bff1879c715bf07fa570dbac9ff27be71e7126cca894a46f1a0185dfa8641->enter($__internal_1e7bff1879c715bf07fa570dbac9ff27be71e7126cca894a46f1a0185dfa8641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_1e7bff1879c715bf07fa570dbac9ff27be71e7126cca894a46f1a0185dfa8641->leave($__internal_1e7bff1879c715bf07fa570dbac9ff27be71e7126cca894a46f1a0185dfa8641_prof);

        
        $__internal_932a1ac2d1a7c65268b0eee393495c2cca26b6137ba3be260f7d8c22c20e254d->leave($__internal_932a1ac2d1a7c65268b0eee393495c2cca26b6137ba3be260f7d8c22c20e254d_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
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
", "@KnpMenu/menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-menu-bundle\\Resources\\views\\menu.html.twig");
    }
}
