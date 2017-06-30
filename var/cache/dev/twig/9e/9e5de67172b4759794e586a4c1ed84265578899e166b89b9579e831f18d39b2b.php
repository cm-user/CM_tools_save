<?php

/* MarketingBundle:shop:new.html.twig */
class __TwigTemplate_1abf00d98b766269f10548c9d3d87db6b268d119c4575908a82a7f8c44b9b4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shop:new.html.twig", 1);
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
        $__internal_1909f1b96e8887fa44b40e1811229dc492c6589d480f1ed1f8237438856e908b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1909f1b96e8887fa44b40e1811229dc492c6589d480f1ed1f8237438856e908b->enter($__internal_1909f1b96e8887fa44b40e1811229dc492c6589d480f1ed1f8237438856e908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:new.html.twig"));

        $__internal_4843a34ada425e2c97fe4b36bc4de3bdcda66e4de7560148f1318194743bf36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4843a34ada425e2c97fe4b36bc4de3bdcda66e4de7560148f1318194743bf36f->enter($__internal_4843a34ada425e2c97fe4b36bc4de3bdcda66e4de7560148f1318194743bf36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1909f1b96e8887fa44b40e1811229dc492c6589d480f1ed1f8237438856e908b->leave($__internal_1909f1b96e8887fa44b40e1811229dc492c6589d480f1ed1f8237438856e908b_prof);

        
        $__internal_4843a34ada425e2c97fe4b36bc4de3bdcda66e4de7560148f1318194743bf36f->leave($__internal_4843a34ada425e2c97fe4b36bc4de3bdcda66e4de7560148f1318194743bf36f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb7214bec9a5c567a4884b3d19b095c5882d5fe056082aff06b1d58d44c953b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7214bec9a5c567a4884b3d19b095c5882d5fe056082aff06b1d58d44c953b1->enter($__internal_cb7214bec9a5c567a4884b3d19b095c5882d5fe056082aff06b1d58d44c953b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c006d25982ad6971dfeba5fc8a95feb7ddbb755bc99947b1bb146de6a0d13d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c006d25982ad6971dfeba5fc8a95feb7ddbb755bc99947b1bb146de6a0d13d51->enter($__internal_c006d25982ad6971dfeba5fc8a95feb7ddbb755bc99947b1bb146de6a0d13d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c006d25982ad6971dfeba5fc8a95feb7ddbb755bc99947b1bb146de6a0d13d51->leave($__internal_c006d25982ad6971dfeba5fc8a95feb7ddbb755bc99947b1bb146de6a0d13d51_prof);

        
        $__internal_cb7214bec9a5c567a4884b3d19b095c5882d5fe056082aff06b1d58d44c953b1->leave($__internal_cb7214bec9a5c567a4884b3d19b095c5882d5fe056082aff06b1d58d44c953b1_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shop:new.html.twig";
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
    <h1>Shop creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('shop_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:shop:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shop/new.html.twig");
    }
}
