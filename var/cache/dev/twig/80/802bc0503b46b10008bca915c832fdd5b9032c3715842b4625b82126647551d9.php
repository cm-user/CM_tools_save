<?php

/* @Marketing/shop/edit.html.twig */
class __TwigTemplate_f6da3358147178905a7ad5866b66a81dadb105765d58deff04a66f33aff3ea86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shop/edit.html.twig", 1);
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
        $__internal_f5a74ed0eb3fa533052e24b4f3e722d96c70e28c8047340689910468506e5173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a74ed0eb3fa533052e24b4f3e722d96c70e28c8047340689910468506e5173->enter($__internal_f5a74ed0eb3fa533052e24b4f3e722d96c70e28c8047340689910468506e5173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/edit.html.twig"));

        $__internal_cad6178b3d69feb7ca0eaec3491c135042d00a8390022651415260541df0e8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad6178b3d69feb7ca0eaec3491c135042d00a8390022651415260541df0e8c3->enter($__internal_cad6178b3d69feb7ca0eaec3491c135042d00a8390022651415260541df0e8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a74ed0eb3fa533052e24b4f3e722d96c70e28c8047340689910468506e5173->leave($__internal_f5a74ed0eb3fa533052e24b4f3e722d96c70e28c8047340689910468506e5173_prof);

        
        $__internal_cad6178b3d69feb7ca0eaec3491c135042d00a8390022651415260541df0e8c3->leave($__internal_cad6178b3d69feb7ca0eaec3491c135042d00a8390022651415260541df0e8c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3afd3c24f209317bbdb683a0cbe98927525e7c862e4e51b56577d0b72f3aa36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afd3c24f209317bbdb683a0cbe98927525e7c862e4e51b56577d0b72f3aa36f->enter($__internal_3afd3c24f209317bbdb683a0cbe98927525e7c862e4e51b56577d0b72f3aa36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_794b9c64e2725aee12cca2e74e58ad0f7ee06607c6dc9e06bc2cbf83b4cbfc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794b9c64e2725aee12cca2e74e58ad0f7ee06607c6dc9e06bc2cbf83b4cbfc74->enter($__internal_794b9c64e2725aee12cca2e74e58ad0f7ee06607c6dc9e06bc2cbf83b4cbfc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_index");
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
        
        $__internal_794b9c64e2725aee12cca2e74e58ad0f7ee06607c6dc9e06bc2cbf83b4cbfc74->leave($__internal_794b9c64e2725aee12cca2e74e58ad0f7ee06607c6dc9e06bc2cbf83b4cbfc74_prof);

        
        $__internal_3afd3c24f209317bbdb683a0cbe98927525e7c862e4e51b56577d0b72f3aa36f->leave($__internal_3afd3c24f209317bbdb683a0cbe98927525e7c862e4e51b56577d0b72f3aa36f_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shop/edit.html.twig";
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
    <h1>Shop edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('shop_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/shop/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shop\\edit.html.twig");
    }
}
