<?php

/* MarketingBundle:modelnewsletter:edit.html.twig */
class __TwigTemplate_2bc56b885a679a1136cf528837d391bafa4b5d89bade3b874542decca09e796f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:modelnewsletter:edit.html.twig", 1);
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
        $__internal_e64209ad3b6e24bcaf599e1a2deebc0cd5b90417507e7ddef2553dcb683d0b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64209ad3b6e24bcaf599e1a2deebc0cd5b90417507e7ddef2553dcb683d0b76->enter($__internal_e64209ad3b6e24bcaf599e1a2deebc0cd5b90417507e7ddef2553dcb683d0b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:edit.html.twig"));

        $__internal_e81b981ab77a8c994bcecc8e6a0b5facab2bf935f4957e78860d1f62502664ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81b981ab77a8c994bcecc8e6a0b5facab2bf935f4957e78860d1f62502664ef->enter($__internal_e81b981ab77a8c994bcecc8e6a0b5facab2bf935f4957e78860d1f62502664ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64209ad3b6e24bcaf599e1a2deebc0cd5b90417507e7ddef2553dcb683d0b76->leave($__internal_e64209ad3b6e24bcaf599e1a2deebc0cd5b90417507e7ddef2553dcb683d0b76_prof);

        
        $__internal_e81b981ab77a8c994bcecc8e6a0b5facab2bf935f4957e78860d1f62502664ef->leave($__internal_e81b981ab77a8c994bcecc8e6a0b5facab2bf935f4957e78860d1f62502664ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb06c90d81f2b920c6e56bdff71e938df4c259057346201e88716d96fab635cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb06c90d81f2b920c6e56bdff71e938df4c259057346201e88716d96fab635cc->enter($__internal_bb06c90d81f2b920c6e56bdff71e938df4c259057346201e88716d96fab635cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9457fb0bcb47ea9ba6c855da2f38bc4d49f1d43160bbf360c4b5e0b9e154319c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9457fb0bcb47ea9ba6c855da2f38bc4d49f1d43160bbf360c4b5e0b9e154319c->enter($__internal_9457fb0bcb47ea9ba6c855da2f38bc4d49f1d43160bbf360c4b5e0b9e154319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_index");
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
        
        $__internal_9457fb0bcb47ea9ba6c855da2f38bc4d49f1d43160bbf360c4b5e0b9e154319c->leave($__internal_9457fb0bcb47ea9ba6c855da2f38bc4d49f1d43160bbf360c4b5e0b9e154319c_prof);

        
        $__internal_bb06c90d81f2b920c6e56bdff71e938df4c259057346201e88716d96fab635cc->leave($__internal_bb06c90d81f2b920c6e56bdff71e938df4c259057346201e88716d96fab635cc_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:modelnewsletter:edit.html.twig";
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
    <h1>ModelNewsletter edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('modelnewsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:modelnewsletter:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/modelnewsletter/edit.html.twig");
    }
}
