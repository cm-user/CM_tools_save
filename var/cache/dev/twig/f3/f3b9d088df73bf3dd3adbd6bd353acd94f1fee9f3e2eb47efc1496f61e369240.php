<?php

/* @Marketing/newslettermenu/new.html.twig */
class __TwigTemplate_fa8fd91cdf1e35d229301be56ba8284e2aee0984b0ba238b7e425d9a92c8c604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newslettermenu/new.html.twig", 1);
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
        $__internal_edb72854975a7a6cd4feb130472741d51f71eec7d3ac1df9e2b2b1dbc6da0862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb72854975a7a6cd4feb130472741d51f71eec7d3ac1df9e2b2b1dbc6da0862->enter($__internal_edb72854975a7a6cd4feb130472741d51f71eec7d3ac1df9e2b2b1dbc6da0862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/new.html.twig"));

        $__internal_7ff98c7958e4dc74a276850cd14f43c641bc83adaf158c0e3cec9af26b87e774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff98c7958e4dc74a276850cd14f43c641bc83adaf158c0e3cec9af26b87e774->enter($__internal_7ff98c7958e4dc74a276850cd14f43c641bc83adaf158c0e3cec9af26b87e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb72854975a7a6cd4feb130472741d51f71eec7d3ac1df9e2b2b1dbc6da0862->leave($__internal_edb72854975a7a6cd4feb130472741d51f71eec7d3ac1df9e2b2b1dbc6da0862_prof);

        
        $__internal_7ff98c7958e4dc74a276850cd14f43c641bc83adaf158c0e3cec9af26b87e774->leave($__internal_7ff98c7958e4dc74a276850cd14f43c641bc83adaf158c0e3cec9af26b87e774_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_038d395c597b7f7c6a3792941b119165a272e30c50379ac282ce5f39ef898759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038d395c597b7f7c6a3792941b119165a272e30c50379ac282ce5f39ef898759->enter($__internal_038d395c597b7f7c6a3792941b119165a272e30c50379ac282ce5f39ef898759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4e5089d9e0f08b67f80d5cf570d742a5b941673a87eab6747571c14bccd06b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e5089d9e0f08b67f80d5cf570d742a5b941673a87eab6747571c14bccd06b6->enter($__internal_d4e5089d9e0f08b67f80d5cf570d742a5b941673a87eab6747571c14bccd06b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d4e5089d9e0f08b67f80d5cf570d742a5b941673a87eab6747571c14bccd06b6->leave($__internal_d4e5089d9e0f08b67f80d5cf570d742a5b941673a87eab6747571c14bccd06b6_prof);

        
        $__internal_038d395c597b7f7c6a3792941b119165a272e30c50379ac282ce5f39ef898759->leave($__internal_038d395c597b7f7c6a3792941b119165a272e30c50379ac282ce5f39ef898759_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newslettermenu/new.html.twig";
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
    <h1>NewsletterMenu creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newslettermenu_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/newslettermenu/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newslettermenu\\new.html.twig");
    }
}
