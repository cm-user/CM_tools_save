<?php

/* MarketingBundle:provider:edit.html.twig */
class __TwigTemplate_0345053b9fd4982966c01a6855e2d1d41e8634331f2ec8ad480e6bd15f2d67ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:provider:edit.html.twig", 1);
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
        $__internal_1f9789e9f34cd39ac0cd4c9ea9f60afffa01b87d922cc564e998f56d83b87d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9789e9f34cd39ac0cd4c9ea9f60afffa01b87d922cc564e998f56d83b87d43->enter($__internal_1f9789e9f34cd39ac0cd4c9ea9f60afffa01b87d922cc564e998f56d83b87d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:edit.html.twig"));

        $__internal_a68118c2afb0da30378dd6c92d88eb3306976505e27be462fffb151f89cfedb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68118c2afb0da30378dd6c92d88eb3306976505e27be462fffb151f89cfedb5->enter($__internal_a68118c2afb0da30378dd6c92d88eb3306976505e27be462fffb151f89cfedb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9789e9f34cd39ac0cd4c9ea9f60afffa01b87d922cc564e998f56d83b87d43->leave($__internal_1f9789e9f34cd39ac0cd4c9ea9f60afffa01b87d922cc564e998f56d83b87d43_prof);

        
        $__internal_a68118c2afb0da30378dd6c92d88eb3306976505e27be462fffb151f89cfedb5->leave($__internal_a68118c2afb0da30378dd6c92d88eb3306976505e27be462fffb151f89cfedb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_add3546475609e47dfb0e7585c467856ad2beb0a432bafae4745d2de156a99f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add3546475609e47dfb0e7585c467856ad2beb0a432bafae4745d2de156a99f8->enter($__internal_add3546475609e47dfb0e7585c467856ad2beb0a432bafae4745d2de156a99f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72f967f61070427fcd384e12c618052d2c22969020aa25b53853d53b9e741268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f967f61070427fcd384e12c618052d2c22969020aa25b53853d53b9e741268->enter($__internal_72f967f61070427fcd384e12c618052d2c22969020aa25b53853d53b9e741268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
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
        
        $__internal_72f967f61070427fcd384e12c618052d2c22969020aa25b53853d53b9e741268->leave($__internal_72f967f61070427fcd384e12c618052d2c22969020aa25b53853d53b9e741268_prof);

        
        $__internal_add3546475609e47dfb0e7585c467856ad2beb0a432bafae4745d2de156a99f8->leave($__internal_add3546475609e47dfb0e7585c467856ad2beb0a432bafae4745d2de156a99f8_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:provider:edit.html.twig";
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
    <h1>Provider edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:provider:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/provider/edit.html.twig");
    }
}
