<?php

/* @Marketing/shopconfiguration/new.html.twig */
class __TwigTemplate_8a14275602c8029b81f7e857710c94110dcb4c39bb17b37cbb7f0763f5b9e01c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shopconfiguration/new.html.twig", 1);
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
        $__internal_1d6ddb3fcb8b389625e54fa5e70d6aac8f76e2e324e48a9d5026d6bc6ea53462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6ddb3fcb8b389625e54fa5e70d6aac8f76e2e324e48a9d5026d6bc6ea53462->enter($__internal_1d6ddb3fcb8b389625e54fa5e70d6aac8f76e2e324e48a9d5026d6bc6ea53462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/new.html.twig"));

        $__internal_df2531fa5ed2e73ad1f7672a89f38975a38f32bf26171c84d1550c39ab6fdd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2531fa5ed2e73ad1f7672a89f38975a38f32bf26171c84d1550c39ab6fdd3b->enter($__internal_df2531fa5ed2e73ad1f7672a89f38975a38f32bf26171c84d1550c39ab6fdd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d6ddb3fcb8b389625e54fa5e70d6aac8f76e2e324e48a9d5026d6bc6ea53462->leave($__internal_1d6ddb3fcb8b389625e54fa5e70d6aac8f76e2e324e48a9d5026d6bc6ea53462_prof);

        
        $__internal_df2531fa5ed2e73ad1f7672a89f38975a38f32bf26171c84d1550c39ab6fdd3b->leave($__internal_df2531fa5ed2e73ad1f7672a89f38975a38f32bf26171c84d1550c39ab6fdd3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab0b97cf02eaffabf4233336036cda374446d0697eb48f1e1ba4dea5ec81162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab0b97cf02eaffabf4233336036cda374446d0697eb48f1e1ba4dea5ec81162->enter($__internal_0ab0b97cf02eaffabf4233336036cda374446d0697eb48f1e1ba4dea5ec81162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b41504ec89a83fcdd23e462a323a3616f51dc4304fb79827493a74e345138a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b41504ec89a83fcdd23e462a323a3616f51dc4304fb79827493a74e345138a5->enter($__internal_6b41504ec89a83fcdd23e462a323a3616f51dc4304fb79827493a74e345138a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6b41504ec89a83fcdd23e462a323a3616f51dc4304fb79827493a74e345138a5->leave($__internal_6b41504ec89a83fcdd23e462a323a3616f51dc4304fb79827493a74e345138a5_prof);

        
        $__internal_0ab0b97cf02eaffabf4233336036cda374446d0697eb48f1e1ba4dea5ec81162->leave($__internal_0ab0b97cf02eaffabf4233336036cda374446d0697eb48f1e1ba4dea5ec81162_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shopconfiguration/new.html.twig";
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
    <h1>ShopConfiguration creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/shopconfiguration/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shopconfiguration\\new.html.twig");
    }
}
