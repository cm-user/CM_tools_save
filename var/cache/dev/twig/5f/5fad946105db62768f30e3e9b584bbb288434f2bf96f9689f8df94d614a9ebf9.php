<?php

/* MarketingBundle:shopconfiguration:new.html.twig */
class __TwigTemplate_236a48deef34d5a40206c9e35382d7344df42bba768766010534113b168a7585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shopconfiguration:new.html.twig", 1);
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
        $__internal_63d2f74255bc16f4630df6adea480fe96ea0e87bfba9bd602c542787905cdedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d2f74255bc16f4630df6adea480fe96ea0e87bfba9bd602c542787905cdedf->enter($__internal_63d2f74255bc16f4630df6adea480fe96ea0e87bfba9bd602c542787905cdedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:new.html.twig"));

        $__internal_3e43f01e214c7b212b77f3c2253da9b4c235b25ed97704341006790676825acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e43f01e214c7b212b77f3c2253da9b4c235b25ed97704341006790676825acd->enter($__internal_3e43f01e214c7b212b77f3c2253da9b4c235b25ed97704341006790676825acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d2f74255bc16f4630df6adea480fe96ea0e87bfba9bd602c542787905cdedf->leave($__internal_63d2f74255bc16f4630df6adea480fe96ea0e87bfba9bd602c542787905cdedf_prof);

        
        $__internal_3e43f01e214c7b212b77f3c2253da9b4c235b25ed97704341006790676825acd->leave($__internal_3e43f01e214c7b212b77f3c2253da9b4c235b25ed97704341006790676825acd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73d3d687757d6185f5bf166adbdc29fb9c178fecf4f2a50befcbfc5015c24385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d3d687757d6185f5bf166adbdc29fb9c178fecf4f2a50befcbfc5015c24385->enter($__internal_73d3d687757d6185f5bf166adbdc29fb9c178fecf4f2a50befcbfc5015c24385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e5e343deaf8b85d6e19744107a4375d31c94c9bfb5555a0d5f0844ca382747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5e343deaf8b85d6e19744107a4375d31c94c9bfb5555a0d5f0844ca382747c->enter($__internal_9e5e343deaf8b85d6e19744107a4375d31c94c9bfb5555a0d5f0844ca382747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9e5e343deaf8b85d6e19744107a4375d31c94c9bfb5555a0d5f0844ca382747c->leave($__internal_9e5e343deaf8b85d6e19744107a4375d31c94c9bfb5555a0d5f0844ca382747c_prof);

        
        $__internal_73d3d687757d6185f5bf166adbdc29fb9c178fecf4f2a50befcbfc5015c24385->leave($__internal_73d3d687757d6185f5bf166adbdc29fb9c178fecf4f2a50befcbfc5015c24385_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shopconfiguration:new.html.twig";
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
    <h1>ShopConfiguration creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:shopconfiguration:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shopconfiguration/new.html.twig");
    }
}
