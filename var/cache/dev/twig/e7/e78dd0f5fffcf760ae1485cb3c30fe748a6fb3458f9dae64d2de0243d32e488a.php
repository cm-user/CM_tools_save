<?php

/* @Marketing/newsletterheader/new.html.twig */
class __TwigTemplate_5e1d37e1a1798bd700096b475aa825e50fe2e2f03f61c5ab74f813c3fb86acab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterheader/new.html.twig", 1);
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
        $__internal_08fa8609d04da6db9ecb38d3d0c99ec8285efedf0f3fe9db64f369287a99ff7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fa8609d04da6db9ecb38d3d0c99ec8285efedf0f3fe9db64f369287a99ff7b->enter($__internal_08fa8609d04da6db9ecb38d3d0c99ec8285efedf0f3fe9db64f369287a99ff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/new.html.twig"));

        $__internal_d30f14fa7c2579c0b0f2bea565cbceb972a7271186d67f19580814fc75561569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30f14fa7c2579c0b0f2bea565cbceb972a7271186d67f19580814fc75561569->enter($__internal_d30f14fa7c2579c0b0f2bea565cbceb972a7271186d67f19580814fc75561569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08fa8609d04da6db9ecb38d3d0c99ec8285efedf0f3fe9db64f369287a99ff7b->leave($__internal_08fa8609d04da6db9ecb38d3d0c99ec8285efedf0f3fe9db64f369287a99ff7b_prof);

        
        $__internal_d30f14fa7c2579c0b0f2bea565cbceb972a7271186d67f19580814fc75561569->leave($__internal_d30f14fa7c2579c0b0f2bea565cbceb972a7271186d67f19580814fc75561569_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea080d74f9c60bd034061e0ac60fec51d96fe480f39a6b0924e946c45b26a5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea080d74f9c60bd034061e0ac60fec51d96fe480f39a6b0924e946c45b26a5b5->enter($__internal_ea080d74f9c60bd034061e0ac60fec51d96fe480f39a6b0924e946c45b26a5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c70696cc8d4a984cc7e3088b929fbc0f083d3889e93c463bcd7c4ac3b5a123d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70696cc8d4a984cc7e3088b929fbc0f083d3889e93c463bcd7c4ac3b5a123d9->enter($__internal_c70696cc8d4a984cc7e3088b929fbc0f083d3889e93c463bcd7c4ac3b5a123d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c70696cc8d4a984cc7e3088b929fbc0f083d3889e93c463bcd7c4ac3b5a123d9->leave($__internal_c70696cc8d4a984cc7e3088b929fbc0f083d3889e93c463bcd7c4ac3b5a123d9_prof);

        
        $__internal_ea080d74f9c60bd034061e0ac60fec51d96fe480f39a6b0924e946c45b26a5b5->leave($__internal_ea080d74f9c60bd034061e0ac60fec51d96fe480f39a6b0924e946c45b26a5b5_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterheader/new.html.twig";
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
    <h1>NewsletterHeader creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterheader_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterheader/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterheader\\new.html.twig");
    }
}
