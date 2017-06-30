<?php

/* MarketingBundle:newsletterprovider:new.html.twig */
class __TwigTemplate_5d30260a28116c651a31837f06ce0a2c4ebd26d2c80f41f31fe500da19abd77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterprovider:new.html.twig", 1);
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
        $__internal_6ff65568d3f55a87eb09ad1d6c8362dbbd3dc0dd70b335161dc73ce5bb47213e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff65568d3f55a87eb09ad1d6c8362dbbd3dc0dd70b335161dc73ce5bb47213e->enter($__internal_6ff65568d3f55a87eb09ad1d6c8362dbbd3dc0dd70b335161dc73ce5bb47213e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:new.html.twig"));

        $__internal_34163b6af3c86bd0b25c88199b1d7ae84234a419b918198b547b1aeb3725619a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34163b6af3c86bd0b25c88199b1d7ae84234a419b918198b547b1aeb3725619a->enter($__internal_34163b6af3c86bd0b25c88199b1d7ae84234a419b918198b547b1aeb3725619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff65568d3f55a87eb09ad1d6c8362dbbd3dc0dd70b335161dc73ce5bb47213e->leave($__internal_6ff65568d3f55a87eb09ad1d6c8362dbbd3dc0dd70b335161dc73ce5bb47213e_prof);

        
        $__internal_34163b6af3c86bd0b25c88199b1d7ae84234a419b918198b547b1aeb3725619a->leave($__internal_34163b6af3c86bd0b25c88199b1d7ae84234a419b918198b547b1aeb3725619a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_289ecc7fef163cf1fecc448c90216de5e3acd2b778d3f6216692586c2c799a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289ecc7fef163cf1fecc448c90216de5e3acd2b778d3f6216692586c2c799a3b->enter($__internal_289ecc7fef163cf1fecc448c90216de5e3acd2b778d3f6216692586c2c799a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7657bc842294f56c3618c03e7af2e2a54f1194a717ef300b4e7c850fe380bfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7657bc842294f56c3618c03e7af2e2a54f1194a717ef300b4e7c850fe380bfad->enter($__internal_7657bc842294f56c3618c03e7af2e2a54f1194a717ef300b4e7c850fe380bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7657bc842294f56c3618c03e7af2e2a54f1194a717ef300b4e7c850fe380bfad->leave($__internal_7657bc842294f56c3618c03e7af2e2a54f1194a717ef300b4e7c850fe380bfad_prof);

        
        $__internal_289ecc7fef163cf1fecc448c90216de5e3acd2b778d3f6216692586c2c799a3b->leave($__internal_289ecc7fef163cf1fecc448c90216de5e3acd2b778d3f6216692586c2c799a3b_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterprovider:new.html.twig";
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
    <h1>NewsletterProvider creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterprovider_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterprovider:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterprovider/new.html.twig");
    }
}
