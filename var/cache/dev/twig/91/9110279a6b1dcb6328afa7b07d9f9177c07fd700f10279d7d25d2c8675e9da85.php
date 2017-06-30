<?php

/* @Marketing/newsletterproduct/edit.html.twig */
class __TwigTemplate_869dce40e4c73a89950e4b667bdb20d32fbfcf60081397d2e58c1ed547b9e740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterproduct/edit.html.twig", 1);
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
        $__internal_a31646e6ca7569b0e6be7b7e43b5c1ab0e0e7fdcc57c43738610ddd5853b4dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31646e6ca7569b0e6be7b7e43b5c1ab0e0e7fdcc57c43738610ddd5853b4dd1->enter($__internal_a31646e6ca7569b0e6be7b7e43b5c1ab0e0e7fdcc57c43738610ddd5853b4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/edit.html.twig"));

        $__internal_8fbc572d79a17b0aecbd87baf03cc2fa5625da56214a1215ea393a0aec5cbf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbc572d79a17b0aecbd87baf03cc2fa5625da56214a1215ea393a0aec5cbf9e->enter($__internal_8fbc572d79a17b0aecbd87baf03cc2fa5625da56214a1215ea393a0aec5cbf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31646e6ca7569b0e6be7b7e43b5c1ab0e0e7fdcc57c43738610ddd5853b4dd1->leave($__internal_a31646e6ca7569b0e6be7b7e43b5c1ab0e0e7fdcc57c43738610ddd5853b4dd1_prof);

        
        $__internal_8fbc572d79a17b0aecbd87baf03cc2fa5625da56214a1215ea393a0aec5cbf9e->leave($__internal_8fbc572d79a17b0aecbd87baf03cc2fa5625da56214a1215ea393a0aec5cbf9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47078c934ed168947c63f9fbe278f2e0ee453fbe5b1b9616caccb4f4a785080b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47078c934ed168947c63f9fbe278f2e0ee453fbe5b1b9616caccb4f4a785080b->enter($__internal_47078c934ed168947c63f9fbe278f2e0ee453fbe5b1b9616caccb4f4a785080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dd48af7ecfcdcb1070a07bd59b02d3d37c1c5e46d305d37846cb632791f356a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd48af7ecfcdcb1070a07bd59b02d3d37c1c5e46d305d37846cb632791f356a->enter($__internal_4dd48af7ecfcdcb1070a07bd59b02d3d37c1c5e46d305d37846cb632791f356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProduct edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4dd48af7ecfcdcb1070a07bd59b02d3d37c1c5e46d305d37846cb632791f356a->leave($__internal_4dd48af7ecfcdcb1070a07bd59b02d3d37c1c5e46d305d37846cb632791f356a_prof);

        
        $__internal_47078c934ed168947c63f9fbe278f2e0ee453fbe5b1b9616caccb4f4a785080b->leave($__internal_47078c934ed168947c63f9fbe278f2e0ee453fbe5b1b9616caccb4f4a785080b_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterproduct/edit.html.twig";
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
    <h1>NewsletterProduct edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterproduct_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterproduct/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterproduct\\edit.html.twig");
    }
}
