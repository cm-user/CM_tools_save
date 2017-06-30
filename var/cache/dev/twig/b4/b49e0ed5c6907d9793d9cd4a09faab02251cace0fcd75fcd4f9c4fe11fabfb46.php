<?php

/* @Marketing/newsletterblocktype/new.html.twig */
class __TwigTemplate_248019ecde5ebeb2b4d8c1b9338a6052a72404cd0ae1d1ecc9c7385006210eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblocktype/new.html.twig", 1);
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
        $__internal_9b7c03376bc036be8ac7ae0b85338200086271d43f6b7265ad17b12e02c3f6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7c03376bc036be8ac7ae0b85338200086271d43f6b7265ad17b12e02c3f6a2->enter($__internal_9b7c03376bc036be8ac7ae0b85338200086271d43f6b7265ad17b12e02c3f6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/new.html.twig"));

        $__internal_6664bc3128cf4d96680b2e0bcb278e9b79c78909d75bb2aecef85348eb93e821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6664bc3128cf4d96680b2e0bcb278e9b79c78909d75bb2aecef85348eb93e821->enter($__internal_6664bc3128cf4d96680b2e0bcb278e9b79c78909d75bb2aecef85348eb93e821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7c03376bc036be8ac7ae0b85338200086271d43f6b7265ad17b12e02c3f6a2->leave($__internal_9b7c03376bc036be8ac7ae0b85338200086271d43f6b7265ad17b12e02c3f6a2_prof);

        
        $__internal_6664bc3128cf4d96680b2e0bcb278e9b79c78909d75bb2aecef85348eb93e821->leave($__internal_6664bc3128cf4d96680b2e0bcb278e9b79c78909d75bb2aecef85348eb93e821_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cb817c283e6cd1dd87bb33c54c7d31567ab96f05a04826274adbce4f4df34f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb817c283e6cd1dd87bb33c54c7d31567ab96f05a04826274adbce4f4df34f4->enter($__internal_5cb817c283e6cd1dd87bb33c54c7d31567ab96f05a04826274adbce4f4df34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_685c5bb1ea1442967616c4fdf3d73258268fd3e8643ed59a12fe78745c017859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685c5bb1ea1442967616c4fdf3d73258268fd3e8643ed59a12fe78745c017859->enter($__internal_685c5bb1ea1442967616c4fdf3d73258268fd3e8643ed59a12fe78745c017859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_685c5bb1ea1442967616c4fdf3d73258268fd3e8643ed59a12fe78745c017859->leave($__internal_685c5bb1ea1442967616c4fdf3d73258268fd3e8643ed59a12fe78745c017859_prof);

        
        $__internal_5cb817c283e6cd1dd87bb33c54c7d31567ab96f05a04826274adbce4f4df34f4->leave($__internal_5cb817c283e6cd1dd87bb33c54c7d31567ab96f05a04826274adbce4f4df34f4_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblocktype/new.html.twig";
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
", "@Marketing/newsletterblocktype/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblocktype\\new.html.twig");
    }
}
