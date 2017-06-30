<?php

/* MarketingBundle:newsletterblocktype:edit.html.twig */
class __TwigTemplate_526bf236a4513b2834f7cb373aba4ced7a69a25da8c6d1cf3c881a391c545cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblocktype:edit.html.twig", 1);
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
        $__internal_daac8c469341600ddd865a2087ba8c551cf754d1075b600d5410be8f6375fd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daac8c469341600ddd865a2087ba8c551cf754d1075b600d5410be8f6375fd83->enter($__internal_daac8c469341600ddd865a2087ba8c551cf754d1075b600d5410be8f6375fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:edit.html.twig"));

        $__internal_92793f5eef111562a209a525507d581f41b7a5e80946f92416c7fb32640430c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92793f5eef111562a209a525507d581f41b7a5e80946f92416c7fb32640430c9->enter($__internal_92793f5eef111562a209a525507d581f41b7a5e80946f92416c7fb32640430c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daac8c469341600ddd865a2087ba8c551cf754d1075b600d5410be8f6375fd83->leave($__internal_daac8c469341600ddd865a2087ba8c551cf754d1075b600d5410be8f6375fd83_prof);

        
        $__internal_92793f5eef111562a209a525507d581f41b7a5e80946f92416c7fb32640430c9->leave($__internal_92793f5eef111562a209a525507d581f41b7a5e80946f92416c7fb32640430c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1080c80fb37d43e953af1e8d5c975f98f9b08f4398144d3b7428880d2467bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1080c80fb37d43e953af1e8d5c975f98f9b08f4398144d3b7428880d2467bfc->enter($__internal_e1080c80fb37d43e953af1e8d5c975f98f9b08f4398144d3b7428880d2467bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30d69c9090792ea4ccd1afe0e57b9b87b1c485ba2aaa16062666a26d8ca6f955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d69c9090792ea4ccd1afe0e57b9b87b1c485ba2aaa16062666a26d8ca6f955->enter($__internal_30d69c9090792ea4ccd1afe0e57b9b87b1c485ba2aaa16062666a26d8ca6f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlockType edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_index");
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
        
        $__internal_30d69c9090792ea4ccd1afe0e57b9b87b1c485ba2aaa16062666a26d8ca6f955->leave($__internal_30d69c9090792ea4ccd1afe0e57b9b87b1c485ba2aaa16062666a26d8ca6f955_prof);

        
        $__internal_e1080c80fb37d43e953af1e8d5c975f98f9b08f4398144d3b7428880d2467bfc->leave($__internal_e1080c80fb37d43e953af1e8d5c975f98f9b08f4398144d3b7428880d2467bfc_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblocktype:edit.html.twig";
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
    <h1>NewsletterBlockType edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblocktype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterblocktype:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblocktype/edit.html.twig");
    }
}
