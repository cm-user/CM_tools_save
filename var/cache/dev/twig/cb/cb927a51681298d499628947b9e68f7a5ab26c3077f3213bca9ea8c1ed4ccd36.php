<?php

/* @Marketing/newsletterproduct/new.html.twig */
class __TwigTemplate_b7e1b35f535443798e689dd94ebd310d0d29e144d80e43f7a0dd1d2402bdaace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterproduct/new.html.twig", 1);
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
        $__internal_e58bbfa11c6fd78c6896000f2340c55051c6db50b6e7e3303950019dde821741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58bbfa11c6fd78c6896000f2340c55051c6db50b6e7e3303950019dde821741->enter($__internal_e58bbfa11c6fd78c6896000f2340c55051c6db50b6e7e3303950019dde821741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/new.html.twig"));

        $__internal_60e7fbdd73d42ad6d54c3beb5eccd70e1e498c18245842f349b443a80ec394b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e7fbdd73d42ad6d54c3beb5eccd70e1e498c18245842f349b443a80ec394b9->enter($__internal_60e7fbdd73d42ad6d54c3beb5eccd70e1e498c18245842f349b443a80ec394b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58bbfa11c6fd78c6896000f2340c55051c6db50b6e7e3303950019dde821741->leave($__internal_e58bbfa11c6fd78c6896000f2340c55051c6db50b6e7e3303950019dde821741_prof);

        
        $__internal_60e7fbdd73d42ad6d54c3beb5eccd70e1e498c18245842f349b443a80ec394b9->leave($__internal_60e7fbdd73d42ad6d54c3beb5eccd70e1e498c18245842f349b443a80ec394b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0cc81004f0c32749073d767db179259f5a6c773fa0de339c348bac927bc2783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cc81004f0c32749073d767db179259f5a6c773fa0de339c348bac927bc2783->enter($__internal_e0cc81004f0c32749073d767db179259f5a6c773fa0de339c348bac927bc2783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13f932e99c2a68dea052db9d75613a3237259dbbea22752cce25e5b16c533f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f932e99c2a68dea052db9d75613a3237259dbbea22752cce25e5b16c533f1e->enter($__internal_13f932e99c2a68dea052db9d75613a3237259dbbea22752cce25e5b16c533f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProduct creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_13f932e99c2a68dea052db9d75613a3237259dbbea22752cce25e5b16c533f1e->leave($__internal_13f932e99c2a68dea052db9d75613a3237259dbbea22752cce25e5b16c533f1e_prof);

        
        $__internal_e0cc81004f0c32749073d767db179259f5a6c773fa0de339c348bac927bc2783->leave($__internal_e0cc81004f0c32749073d767db179259f5a6c773fa0de339c348bac927bc2783_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterproduct/new.html.twig";
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
    <h1>NewsletterProduct creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterproduct_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterproduct/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterproduct\\new.html.twig");
    }
}
