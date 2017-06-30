<?php

/* @Marketing/shopconfiguration/edit.html.twig */
class __TwigTemplate_b9bc6649cff72cc2ba5021559076197c582133c557f61dc1e608a7529a689384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shopconfiguration/edit.html.twig", 1);
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
        $__internal_1a212e3146e2f9bdecb2eb2becb67be385a5a7f63ef6c382661eafcb9efd135a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a212e3146e2f9bdecb2eb2becb67be385a5a7f63ef6c382661eafcb9efd135a->enter($__internal_1a212e3146e2f9bdecb2eb2becb67be385a5a7f63ef6c382661eafcb9efd135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/edit.html.twig"));

        $__internal_f0c0b079a6d85821a7f50dade093b20b5c2251d3f05bd5252fd3db047dd73acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c0b079a6d85821a7f50dade093b20b5c2251d3f05bd5252fd3db047dd73acf->enter($__internal_f0c0b079a6d85821a7f50dade093b20b5c2251d3f05bd5252fd3db047dd73acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a212e3146e2f9bdecb2eb2becb67be385a5a7f63ef6c382661eafcb9efd135a->leave($__internal_1a212e3146e2f9bdecb2eb2becb67be385a5a7f63ef6c382661eafcb9efd135a_prof);

        
        $__internal_f0c0b079a6d85821a7f50dade093b20b5c2251d3f05bd5252fd3db047dd73acf->leave($__internal_f0c0b079a6d85821a7f50dade093b20b5c2251d3f05bd5252fd3db047dd73acf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37c187f66a86dd7103b8fda6b050dfe6e2e23f2bbb8a27ac1ddbbbb7a1bdf89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c187f66a86dd7103b8fda6b050dfe6e2e23f2bbb8a27ac1ddbbbb7a1bdf89a->enter($__internal_37c187f66a86dd7103b8fda6b050dfe6e2e23f2bbb8a27ac1ddbbbb7a1bdf89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_269d96d3ed5027ac87fade2dfb443a432a114cfc0dfc556240e894334888ed67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269d96d3ed5027ac87fade2dfb443a432a114cfc0dfc556240e894334888ed67->enter($__internal_269d96d3ed5027ac87fade2dfb443a432a114cfc0dfc556240e894334888ed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
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
        
        $__internal_269d96d3ed5027ac87fade2dfb443a432a114cfc0dfc556240e894334888ed67->leave($__internal_269d96d3ed5027ac87fade2dfb443a432a114cfc0dfc556240e894334888ed67_prof);

        
        $__internal_37c187f66a86dd7103b8fda6b050dfe6e2e23f2bbb8a27ac1ddbbbb7a1bdf89a->leave($__internal_37c187f66a86dd7103b8fda6b050dfe6e2e23f2bbb8a27ac1ddbbbb7a1bdf89a_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shopconfiguration/edit.html.twig";
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
    <h1>ShopConfiguration edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/shopconfiguration/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shopconfiguration\\edit.html.twig");
    }
}
