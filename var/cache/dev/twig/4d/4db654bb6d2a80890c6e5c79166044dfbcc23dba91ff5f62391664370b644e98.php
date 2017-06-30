<?php

/* UserBundle:Security:validation.html.twig */
class __TwigTemplate_c5629c95d752cfa738f64a6174245844f4a2a4f2c9c4847ff6939d085e3b0f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:validation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d88e49bfe729a5760df141b98d7b589a5c9bdc1b8bd188534ce8a965053dcf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88e49bfe729a5760df141b98d7b589a5c9bdc1b8bd188534ce8a965053dcf54->enter($__internal_d88e49bfe729a5760df141b98d7b589a5c9bdc1b8bd188534ce8a965053dcf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:validation.html.twig"));

        $__internal_9358a37b9374d3995bba5f29f37ac7f84ce4bdf9e9c2d973d3d7532eee766642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9358a37b9374d3995bba5f29f37ac7f84ce4bdf9e9c2d973d3d7532eee766642->enter($__internal_9358a37b9374d3995bba5f29f37ac7f84ce4bdf9e9c2d973d3d7532eee766642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88e49bfe729a5760df141b98d7b589a5c9bdc1b8bd188534ce8a965053dcf54->leave($__internal_d88e49bfe729a5760df141b98d7b589a5c9bdc1b8bd188534ce8a965053dcf54_prof);

        
        $__internal_9358a37b9374d3995bba5f29f37ac7f84ce4bdf9e9c2d973d3d7532eee766642->leave($__internal_9358a37b9374d3995bba5f29f37ac7f84ce4bdf9e9c2d973d3d7532eee766642_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8b53ac9168f3c3ba1e2bf8e6ee9dce02f07451f79e134ea02528c48ca824aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b53ac9168f3c3ba1e2bf8e6ee9dce02f07451f79e134ea02528c48ca824aa5->enter($__internal_d8b53ac9168f3c3ba1e2bf8e6ee9dce02f07451f79e134ea02528c48ca824aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01b971605a4fb8cb336ee8cd5e0ff3a65dfe12f13c028498c407e0759157ff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b971605a4fb8cb336ee8cd5e0ff3a65dfe12f13c028498c407e0759157ff84->enter($__internal_01b971605a4fb8cb336ee8cd5e0ff3a65dfe12f13c028498c407e0759157ff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_01b971605a4fb8cb336ee8cd5e0ff3a65dfe12f13c028498c407e0759157ff84->leave($__internal_01b971605a4fb8cb336ee8cd5e0ff3a65dfe12f13c028498c407e0759157ff84_prof);

        
        $__internal_d8b53ac9168f3c3ba1e2bf8e6ee9dce02f07451f79e134ea02528c48ca824aa5->leave($__internal_d8b53ac9168f3c3ba1e2bf8e6ee9dce02f07451f79e134ea02528c48ca824aa5_prof);

    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        $__internal_2a644257e86375385bb0a63a745d57ab0a04398cec4242e928cf6908e58716b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a644257e86375385bb0a63a745d57ab0a04398cec4242e928cf6908e58716b0->enter($__internal_2a644257e86375385bb0a63a745d57ab0a04398cec4242e928cf6908e58716b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_3e26fc290f69caa07437394008857784d11ffb48a36790ad5eecccf0435cd951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e26fc290f69caa07437394008857784d11ffb48a36790ad5eecccf0435cd951->enter($__internal_3e26fc290f69caa07437394008857784d11ffb48a36790ad5eecccf0435cd951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Login page";
        
        $__internal_3e26fc290f69caa07437394008857784d11ffb48a36790ad5eecccf0435cd951->leave($__internal_3e26fc290f69caa07437394008857784d11ffb48a36790ad5eecccf0435cd951_prof);

        
        $__internal_2a644257e86375385bb0a63a745d57ab0a04398cec4242e928cf6908e58716b0->leave($__internal_2a644257e86375385bb0a63a745d57ab0a04398cec4242e928cf6908e58716b0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ba7b945721b478852821b568bfcb16775f38fcccbab33e00e1d3f8a39bfcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ba7b945721b478852821b568bfcb16775f38fcccbab33e00e1d3f8a39bfcb0->enter($__internal_b4ba7b945721b478852821b568bfcb16775f38fcccbab33e00e1d3f8a39bfcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b739db82e5c09a6bab76a3557eb9efe8dc7959a4de86122fde251b513f3ac27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b739db82e5c09a6bab76a3557eb9efe8dc7959a4de86122fde251b513f3ac27->enter($__internal_4b739db82e5c09a6bab76a3557eb9efe8dc7959a4de86122fde251b513f3ac27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Validation de compte</h1>
            ";
        // line 8
        if (($context["validation_account"] ?? $this->getContext($context, "validation_account"))) {
            // line 9
            echo "                <p>Votre compté à été validé avec succès</p>
            ";
        } else {
            // line 11
            echo "                <p>Une erreur est survenu, la validation de votre compte à échoué.</p>
            ";
        }
        // line 13
        echo "        </div>
    </div>
";
        
        $__internal_4b739db82e5c09a6bab76a3557eb9efe8dc7959a4de86122fde251b513f3ac27->leave($__internal_4b739db82e5c09a6bab76a3557eb9efe8dc7959a4de86122fde251b513f3ac27_prof);

        
        $__internal_b4ba7b945721b478852821b568bfcb16775f38fcccbab33e00e1d3f8a39bfcb0->leave($__internal_b4ba7b945721b478852821b568bfcb16775f38fcccbab33e00e1d3f8a39bfcb0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 13,  98 => 11,  94 => 9,  92 => 8,  87 => 5,  78 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Login{% endblock %}
{% block description %}Login page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Validation de compte</h1>
            {% if validation_account %}
                <p>Votre compté à été validé avec succès</p>
            {% else %}
                <p>Une erreur est survenu, la validation de votre compte à échoué.</p>
            {% endif %}
        </div>
    </div>
{% endblock %}", "UserBundle:Security:validation.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Security/validation.html.twig");
    }
}
