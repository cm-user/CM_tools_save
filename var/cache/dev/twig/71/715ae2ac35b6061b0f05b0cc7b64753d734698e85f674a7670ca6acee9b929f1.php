<?php

/* MarketingBundle:newsletterblocktype:new.html.twig */
class __TwigTemplate_c1e77f8dc2694c25a16f70107de932deac79bbf7b12ee589cd29b89390d174a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblocktype:new.html.twig", 1);
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
        $__internal_ed18a9bb171b2ae5c928e2d71adc537eb0b76d3525ce89cfd85d6b3c939b3f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed18a9bb171b2ae5c928e2d71adc537eb0b76d3525ce89cfd85d6b3c939b3f77->enter($__internal_ed18a9bb171b2ae5c928e2d71adc537eb0b76d3525ce89cfd85d6b3c939b3f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:new.html.twig"));

        $__internal_c17b7ebf00de7cd305ab32e8cec1bc195b999ce13ee030142fb1c9812111e612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17b7ebf00de7cd305ab32e8cec1bc195b999ce13ee030142fb1c9812111e612->enter($__internal_c17b7ebf00de7cd305ab32e8cec1bc195b999ce13ee030142fb1c9812111e612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed18a9bb171b2ae5c928e2d71adc537eb0b76d3525ce89cfd85d6b3c939b3f77->leave($__internal_ed18a9bb171b2ae5c928e2d71adc537eb0b76d3525ce89cfd85d6b3c939b3f77_prof);

        
        $__internal_c17b7ebf00de7cd305ab32e8cec1bc195b999ce13ee030142fb1c9812111e612->leave($__internal_c17b7ebf00de7cd305ab32e8cec1bc195b999ce13ee030142fb1c9812111e612_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d636a6cdac6b43e63b61423a4c0b19a8cf13df840439c074f498ae4a80582f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d636a6cdac6b43e63b61423a4c0b19a8cf13df840439c074f498ae4a80582f29->enter($__internal_d636a6cdac6b43e63b61423a4c0b19a8cf13df840439c074f498ae4a80582f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a57cd6148e72728c56cbd93437d2aa9d680f8329dd7cb2d15eb467f172c85036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57cd6148e72728c56cbd93437d2aa9d680f8329dd7cb2d15eb467f172c85036->enter($__internal_a57cd6148e72728c56cbd93437d2aa9d680f8329dd7cb2d15eb467f172c85036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlockType creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a57cd6148e72728c56cbd93437d2aa9d680f8329dd7cb2d15eb467f172c85036->leave($__internal_a57cd6148e72728c56cbd93437d2aa9d680f8329dd7cb2d15eb467f172c85036_prof);

        
        $__internal_d636a6cdac6b43e63b61423a4c0b19a8cf13df840439c074f498ae4a80582f29->leave($__internal_d636a6cdac6b43e63b61423a4c0b19a8cf13df840439c074f498ae4a80582f29_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblocktype:new.html.twig";
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
    <h1>NewsletterBlockType creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblocktype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterblocktype:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblocktype/new.html.twig");
    }
}
