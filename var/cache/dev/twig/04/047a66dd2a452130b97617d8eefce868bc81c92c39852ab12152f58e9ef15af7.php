<?php

/* FaultyProductBundle:faultymail:edit.html.twig */
class __TwigTemplate_0e3f10e9b58559c03df626371849b2cf916647d96de94efddd6a241be3cfb695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faultymail:edit.html.twig", 1);
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
        $__internal_a1e14b79f87c59a636eb11f5e870b120e2600b44cbec12b3c9e05adb6b53ad81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e14b79f87c59a636eb11f5e870b120e2600b44cbec12b3c9e05adb6b53ad81->enter($__internal_a1e14b79f87c59a636eb11f5e870b120e2600b44cbec12b3c9e05adb6b53ad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:edit.html.twig"));

        $__internal_15d64f444a7143981bc79c2eccad1b9aaabfaf6432a9ae6598a33d734d82bd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d64f444a7143981bc79c2eccad1b9aaabfaf6432a9ae6598a33d734d82bd52->enter($__internal_15d64f444a7143981bc79c2eccad1b9aaabfaf6432a9ae6598a33d734d82bd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e14b79f87c59a636eb11f5e870b120e2600b44cbec12b3c9e05adb6b53ad81->leave($__internal_a1e14b79f87c59a636eb11f5e870b120e2600b44cbec12b3c9e05adb6b53ad81_prof);

        
        $__internal_15d64f444a7143981bc79c2eccad1b9aaabfaf6432a9ae6598a33d734d82bd52->leave($__internal_15d64f444a7143981bc79c2eccad1b9aaabfaf6432a9ae6598a33d734d82bd52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca9e615a4a2cc0fb39c6d6432eb5f81e40a37c7e7f26d780a9f32fdc87869264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9e615a4a2cc0fb39c6d6432eb5f81e40a37c7e7f26d780a9f32fdc87869264->enter($__internal_ca9e615a4a2cc0fb39c6d6432eb5f81e40a37c7e7f26d780a9f32fdc87869264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c3d260d49f0ed6009925aa683c49d96e75842dad84d96edc1c5d3c188b008fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3d260d49f0ed6009925aa683c49d96e75842dad84d96edc1c5d3c188b008fc->enter($__internal_7c3d260d49f0ed6009925aa683c49d96e75842dad84d96edc1c5d3c188b008fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modification mail</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>

";
        
        $__internal_7c3d260d49f0ed6009925aa683c49d96e75842dad84d96edc1c5d3c188b008fc->leave($__internal_7c3d260d49f0ed6009925aa683c49d96e75842dad84d96edc1c5d3c188b008fc_prof);

        
        $__internal_ca9e615a4a2cc0fb39c6d6432eb5f81e40a37c7e7f26d780a9f32fdc87869264->leave($__internal_ca9e615a4a2cc0fb39c6d6432eb5f81e40a37c7e7f26d780a9f32fdc87869264_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faultymail:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  74 => 15,  68 => 12,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Modification mail</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('faultymail_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>

{% endblock %}
", "FaultyProductBundle:faultymail:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faultymail/edit.html.twig");
    }
}
