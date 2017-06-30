<?php

/* MarketingBundle:newsletterprovider:edit.html.twig */
class __TwigTemplate_444d9e0ed19761a688e2e446a4dc7c30310f79ab44b64903c258132d12b2ca5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterprovider:edit.html.twig", 1);
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
        $__internal_df4cee83b972a4a1ee0c220f8f89c165e7a5588eb74f73ff1050e64c30578126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4cee83b972a4a1ee0c220f8f89c165e7a5588eb74f73ff1050e64c30578126->enter($__internal_df4cee83b972a4a1ee0c220f8f89c165e7a5588eb74f73ff1050e64c30578126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:edit.html.twig"));

        $__internal_6ba6b59b196818cc3f51bc4c2b510411560a22377cc237ddaf6b7b083b9368fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba6b59b196818cc3f51bc4c2b510411560a22377cc237ddaf6b7b083b9368fe->enter($__internal_6ba6b59b196818cc3f51bc4c2b510411560a22377cc237ddaf6b7b083b9368fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4cee83b972a4a1ee0c220f8f89c165e7a5588eb74f73ff1050e64c30578126->leave($__internal_df4cee83b972a4a1ee0c220f8f89c165e7a5588eb74f73ff1050e64c30578126_prof);

        
        $__internal_6ba6b59b196818cc3f51bc4c2b510411560a22377cc237ddaf6b7b083b9368fe->leave($__internal_6ba6b59b196818cc3f51bc4c2b510411560a22377cc237ddaf6b7b083b9368fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6048568d83545ced21247814b2e2eaccbd3b336970d4497c641785141ae858e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6048568d83545ced21247814b2e2eaccbd3b336970d4497c641785141ae858e4->enter($__internal_6048568d83545ced21247814b2e2eaccbd3b336970d4497c641785141ae858e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14ab13a96922bec394afe9fcc725875863c4de08ac23c3ae1061b95633fb8f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ab13a96922bec394afe9fcc725875863c4de08ac23c3ae1061b95633fb8f09->enter($__internal_14ab13a96922bec394afe9fcc725875863c4de08ac23c3ae1061b95633fb8f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_index");
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
        
        $__internal_14ab13a96922bec394afe9fcc725875863c4de08ac23c3ae1061b95633fb8f09->leave($__internal_14ab13a96922bec394afe9fcc725875863c4de08ac23c3ae1061b95633fb8f09_prof);

        
        $__internal_6048568d83545ced21247814b2e2eaccbd3b336970d4497c641785141ae858e4->leave($__internal_6048568d83545ced21247814b2e2eaccbd3b336970d4497c641785141ae858e4_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterprovider:edit.html.twig";
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
    <h1>NewsletterProvider edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterprovider_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterprovider:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterprovider/edit.html.twig");
    }
}
