<?php

/* ShopBundle:ShopConfiguration:edit.html.twig */
class __TwigTemplate_07612c52965b2d70c465696505a2d27dd6b797f92133ff21977ea7c94b616f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:ShopConfiguration:edit.html.twig", 1);
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
        $__internal_f0af5bae7d8e3154b08a764a9d11d9aa5cac07adbc8750e2e6c401188e89776d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0af5bae7d8e3154b08a764a9d11d9aa5cac07adbc8750e2e6c401188e89776d->enter($__internal_f0af5bae7d8e3154b08a764a9d11d9aa5cac07adbc8750e2e6c401188e89776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:edit.html.twig"));

        $__internal_bb44826c381a14ccbef79fc7b043c8ac299460cbcbffd781537e38e90db33c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb44826c381a14ccbef79fc7b043c8ac299460cbcbffd781537e38e90db33c48->enter($__internal_bb44826c381a14ccbef79fc7b043c8ac299460cbcbffd781537e38e90db33c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0af5bae7d8e3154b08a764a9d11d9aa5cac07adbc8750e2e6c401188e89776d->leave($__internal_f0af5bae7d8e3154b08a764a9d11d9aa5cac07adbc8750e2e6c401188e89776d_prof);

        
        $__internal_bb44826c381a14ccbef79fc7b043c8ac299460cbcbffd781537e38e90db33c48->leave($__internal_bb44826c381a14ccbef79fc7b043c8ac299460cbcbffd781537e38e90db33c48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b6d4c73130546027f25410e7f25bf69e47db41ab90b09add04f7a52ad524cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b6d4c73130546027f25410e7f25bf69e47db41ab90b09add04f7a52ad524cd->enter($__internal_14b6d4c73130546027f25410e7f25bf69e47db41ab90b09add04f7a52ad524cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8770afc36a8dba86f0abbcc2b0aa7ecbf74363d0d441962c7540fe736df6a8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8770afc36a8dba86f0abbcc2b0aa7ecbf74363d0d441962c7540fe736df6a8cb->enter($__internal_8770afc36a8dba86f0abbcc2b0aa7ecbf74363d0d441962c7540fe736df6a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shopconfiguration Modifier</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_index");
        echo "\">Retourner à la liste</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8770afc36a8dba86f0abbcc2b0aa7ecbf74363d0d441962c7540fe736df6a8cb->leave($__internal_8770afc36a8dba86f0abbcc2b0aa7ecbf74363d0d441962c7540fe736df6a8cb_prof);

        
        $__internal_14b6d4c73130546027f25410e7f25bf69e47db41ab90b09add04f7a52ad524cd->leave($__internal_14b6d4c73130546027f25410e7f25bf69e47db41ab90b09add04f7a52ad524cd_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:ShopConfiguration:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Shopconfiguration Modifier</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('carousel_shopconfiguration_index') }}\">Retourner à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ShopBundle:ShopConfiguration:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/ShopConfiguration/edit.html.twig");
    }
}
