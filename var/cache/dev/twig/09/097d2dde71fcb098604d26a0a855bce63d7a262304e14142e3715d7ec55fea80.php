<?php

/* MarketingBundle:newsletterproduct:edit.html.twig */
class __TwigTemplate_d4529814203524fd7c39ba8c80cee0208b91b189dc198bb9a50acaf2c5d417f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterproduct:edit.html.twig", 1);
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
        $__internal_365402d140e524699cdee0f583784483b9e2651a0e10330e9d2447d00e4d2637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365402d140e524699cdee0f583784483b9e2651a0e10330e9d2447d00e4d2637->enter($__internal_365402d140e524699cdee0f583784483b9e2651a0e10330e9d2447d00e4d2637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:edit.html.twig"));

        $__internal_5f4c38a47f622cc5e81f17c7f72cb02cb0f666f2b4823cd33cf8e24ab83f5e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4c38a47f622cc5e81f17c7f72cb02cb0f666f2b4823cd33cf8e24ab83f5e59->enter($__internal_5f4c38a47f622cc5e81f17c7f72cb02cb0f666f2b4823cd33cf8e24ab83f5e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365402d140e524699cdee0f583784483b9e2651a0e10330e9d2447d00e4d2637->leave($__internal_365402d140e524699cdee0f583784483b9e2651a0e10330e9d2447d00e4d2637_prof);

        
        $__internal_5f4c38a47f622cc5e81f17c7f72cb02cb0f666f2b4823cd33cf8e24ab83f5e59->leave($__internal_5f4c38a47f622cc5e81f17c7f72cb02cb0f666f2b4823cd33cf8e24ab83f5e59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3538c133dc4490354d9c808bb89ef28b66b460efad9b54c97e9962a9c4f4f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3538c133dc4490354d9c808bb89ef28b66b460efad9b54c97e9962a9c4f4f51->enter($__internal_a3538c133dc4490354d9c808bb89ef28b66b460efad9b54c97e9962a9c4f4f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36bf5076b72059a397b4d6616fee573560229307d7253d2fbda74341a1754f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bf5076b72059a397b4d6616fee573560229307d7253d2fbda74341a1754f96->enter($__internal_36bf5076b72059a397b4d6616fee573560229307d7253d2fbda74341a1754f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36bf5076b72059a397b4d6616fee573560229307d7253d2fbda74341a1754f96->leave($__internal_36bf5076b72059a397b4d6616fee573560229307d7253d2fbda74341a1754f96_prof);

        
        $__internal_a3538c133dc4490354d9c808bb89ef28b66b460efad9b54c97e9962a9c4f4f51->leave($__internal_a3538c133dc4490354d9c808bb89ef28b66b460efad9b54c97e9962a9c4f4f51_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterproduct:edit.html.twig";
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
", "MarketingBundle:newsletterproduct:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterproduct/edit.html.twig");
    }
}
