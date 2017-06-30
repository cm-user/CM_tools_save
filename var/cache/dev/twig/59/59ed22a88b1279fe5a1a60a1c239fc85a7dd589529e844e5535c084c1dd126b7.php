<?php

/* MarketingBundle:provider:new.html.twig */
class __TwigTemplate_490058a387ad772805e40e7cda78627b66cee14396cdeac964dbe74130b7db28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:provider:new.html.twig", 1);
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
        $__internal_9a471ab75ab57f81d55d8f4c78650d9dbee48f061bc4b40d2cfa644ae8d25617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a471ab75ab57f81d55d8f4c78650d9dbee48f061bc4b40d2cfa644ae8d25617->enter($__internal_9a471ab75ab57f81d55d8f4c78650d9dbee48f061bc4b40d2cfa644ae8d25617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:new.html.twig"));

        $__internal_e9604c44803b1de3c8b318f8935265c559df041319c541754b56bc235eb2db87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9604c44803b1de3c8b318f8935265c559df041319c541754b56bc235eb2db87->enter($__internal_e9604c44803b1de3c8b318f8935265c559df041319c541754b56bc235eb2db87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a471ab75ab57f81d55d8f4c78650d9dbee48f061bc4b40d2cfa644ae8d25617->leave($__internal_9a471ab75ab57f81d55d8f4c78650d9dbee48f061bc4b40d2cfa644ae8d25617_prof);

        
        $__internal_e9604c44803b1de3c8b318f8935265c559df041319c541754b56bc235eb2db87->leave($__internal_e9604c44803b1de3c8b318f8935265c559df041319c541754b56bc235eb2db87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c88a2181691bf79c2eb3d5bd0e469c3c76fcec78f44716ea18f28f7ca6c6c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c88a2181691bf79c2eb3d5bd0e469c3c76fcec78f44716ea18f28f7ca6c6c0d->enter($__internal_0c88a2181691bf79c2eb3d5bd0e469c3c76fcec78f44716ea18f28f7ca6c6c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61daded86e78d98225dc1d81f4212819149f28cac90fce831317a578097fdfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61daded86e78d98225dc1d81f4212819149f28cac90fce831317a578097fdfa6->enter($__internal_61daded86e78d98225dc1d81f4212819149f28cac90fce831317a578097fdfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_61daded86e78d98225dc1d81f4212819149f28cac90fce831317a578097fdfa6->leave($__internal_61daded86e78d98225dc1d81f4212819149f28cac90fce831317a578097fdfa6_prof);

        
        $__internal_0c88a2181691bf79c2eb3d5bd0e469c3c76fcec78f44716ea18f28f7ca6c6c0d->leave($__internal_0c88a2181691bf79c2eb3d5bd0e469c3c76fcec78f44716ea18f28f7ca6c6c0d_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:provider:new.html.twig";
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
    <h1>Provider creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:provider:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/provider/new.html.twig");
    }
}
