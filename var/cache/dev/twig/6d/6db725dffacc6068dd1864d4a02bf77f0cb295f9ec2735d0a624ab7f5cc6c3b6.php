<?php

/* MarketingBundle:shop:edit.html.twig */
class __TwigTemplate_a6f85ed363b9e0258449a0f9755cda9aa1212838cbc14e5b8162b9bc092cb4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shop:edit.html.twig", 1);
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
        $__internal_670dfffca20cdc1486e3cc664e9fcc018c29a0ee4e938ee5d8e563a20b7ab9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670dfffca20cdc1486e3cc664e9fcc018c29a0ee4e938ee5d8e563a20b7ab9c6->enter($__internal_670dfffca20cdc1486e3cc664e9fcc018c29a0ee4e938ee5d8e563a20b7ab9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:edit.html.twig"));

        $__internal_304f6846cde1792a4250d81532117c8b242d0b06d0d03bfaf8409ff9298afeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304f6846cde1792a4250d81532117c8b242d0b06d0d03bfaf8409ff9298afeca->enter($__internal_304f6846cde1792a4250d81532117c8b242d0b06d0d03bfaf8409ff9298afeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670dfffca20cdc1486e3cc664e9fcc018c29a0ee4e938ee5d8e563a20b7ab9c6->leave($__internal_670dfffca20cdc1486e3cc664e9fcc018c29a0ee4e938ee5d8e563a20b7ab9c6_prof);

        
        $__internal_304f6846cde1792a4250d81532117c8b242d0b06d0d03bfaf8409ff9298afeca->leave($__internal_304f6846cde1792a4250d81532117c8b242d0b06d0d03bfaf8409ff9298afeca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b25c7a6c8c8edbe17715a83a38167ddac0834c89146abccd412ac669d306f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b25c7a6c8c8edbe17715a83a38167ddac0834c89146abccd412ac669d306f16->enter($__internal_6b25c7a6c8c8edbe17715a83a38167ddac0834c89146abccd412ac669d306f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86d17990f69eeff4c642639a9528b47711e9b04e0f31dc8dbb72a8fc8686f92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d17990f69eeff4c642639a9528b47711e9b04e0f31dc8dbb72a8fc8686f92c->enter($__internal_86d17990f69eeff4c642639a9528b47711e9b04e0f31dc8dbb72a8fc8686f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86d17990f69eeff4c642639a9528b47711e9b04e0f31dc8dbb72a8fc8686f92c->leave($__internal_86d17990f69eeff4c642639a9528b47711e9b04e0f31dc8dbb72a8fc8686f92c_prof);

        
        $__internal_6b25c7a6c8c8edbe17715a83a38167ddac0834c89146abccd412ac669d306f16->leave($__internal_6b25c7a6c8c8edbe17715a83a38167ddac0834c89146abccd412ac669d306f16_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shop:edit.html.twig";
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
", "MarketingBundle:shop:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shop/edit.html.twig");
    }
}
