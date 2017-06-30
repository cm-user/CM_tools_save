<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5f75b1e9ed630bbfb691adcc6fdea7b33e4afa6e7f34b82ff8b0afc274496bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795ba27d70437b0dba0012376f8ca3dee6fdd975433c6af13b7f6a7d3eab9301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795ba27d70437b0dba0012376f8ca3dee6fdd975433c6af13b7f6a7d3eab9301->enter($__internal_795ba27d70437b0dba0012376f8ca3dee6fdd975433c6af13b7f6a7d3eab9301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d7298d45563078b74f95b96ab28e3a07c493d812cc126f222cbc84d8debced98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7298d45563078b74f95b96ab28e3a07c493d812cc126f222cbc84d8debced98->enter($__internal_d7298d45563078b74f95b96ab28e3a07c493d812cc126f222cbc84d8debced98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795ba27d70437b0dba0012376f8ca3dee6fdd975433c6af13b7f6a7d3eab9301->leave($__internal_795ba27d70437b0dba0012376f8ca3dee6fdd975433c6af13b7f6a7d3eab9301_prof);

        
        $__internal_d7298d45563078b74f95b96ab28e3a07c493d812cc126f222cbc84d8debced98->leave($__internal_d7298d45563078b74f95b96ab28e3a07c493d812cc126f222cbc84d8debced98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dddc53b5fd901734d104e3ec3d9dda19de08307a3229805c1aca355f07b97e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dddc53b5fd901734d104e3ec3d9dda19de08307a3229805c1aca355f07b97e3->enter($__internal_7dddc53b5fd901734d104e3ec3d9dda19de08307a3229805c1aca355f07b97e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a5e78d50c8cb6669c57b6d96c6a554f3806eb3f6e77cc65f320a65c28553faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5e78d50c8cb6669c57b6d96c6a554f3806eb3f6e77cc65f320a65c28553faf->enter($__internal_4a5e78d50c8cb6669c57b6d96c6a554f3806eb3f6e77cc65f320a65c28553faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a5e78d50c8cb6669c57b6d96c6a554f3806eb3f6e77cc65f320a65c28553faf->leave($__internal_4a5e78d50c8cb6669c57b6d96c6a554f3806eb3f6e77cc65f320a65c28553faf_prof);

        
        $__internal_7dddc53b5fd901734d104e3ec3d9dda19de08307a3229805c1aca355f07b97e3->leave($__internal_7dddc53b5fd901734d104e3ec3d9dda19de08307a3229805c1aca355f07b97e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0a8084fae9cd771804aafb4082b0a605eedfb428c8e5f5d8a946d370f61cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a8084fae9cd771804aafb4082b0a605eedfb428c8e5f5d8a946d370f61cf4a->enter($__internal_b0a8084fae9cd771804aafb4082b0a605eedfb428c8e5f5d8a946d370f61cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11a08a94b2fde49ed76e6ea316cd39af126dbf23227ed09fb5318e67a4488e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a08a94b2fde49ed76e6ea316cd39af126dbf23227ed09fb5318e67a4488e41->enter($__internal_11a08a94b2fde49ed76e6ea316cd39af126dbf23227ed09fb5318e67a4488e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11a08a94b2fde49ed76e6ea316cd39af126dbf23227ed09fb5318e67a4488e41->leave($__internal_11a08a94b2fde49ed76e6ea316cd39af126dbf23227ed09fb5318e67a4488e41_prof);

        
        $__internal_b0a8084fae9cd771804aafb4082b0a605eedfb428c8e5f5d8a946d370f61cf4a->leave($__internal_b0a8084fae9cd771804aafb4082b0a605eedfb428c8e5f5d8a946d370f61cf4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2834cd9e3156506d5db6ec5a5cc2293d36b2ffd1aed20551e328825519a627ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2834cd9e3156506d5db6ec5a5cc2293d36b2ffd1aed20551e328825519a627ea->enter($__internal_2834cd9e3156506d5db6ec5a5cc2293d36b2ffd1aed20551e328825519a627ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64dcdfe13409b8e044e064606b6ba9e723478e8522a9e55f3fd0b748084b2c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dcdfe13409b8e044e064606b6ba9e723478e8522a9e55f3fd0b748084b2c0d->enter($__internal_64dcdfe13409b8e044e064606b6ba9e723478e8522a9e55f3fd0b748084b2c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64dcdfe13409b8e044e064606b6ba9e723478e8522a9e55f3fd0b748084b2c0d->leave($__internal_64dcdfe13409b8e044e064606b6ba9e723478e8522a9e55f3fd0b748084b2c0d_prof);

        
        $__internal_2834cd9e3156506d5db6ec5a5cc2293d36b2ffd1aed20551e328825519a627ea->leave($__internal_2834cd9e3156506d5db6ec5a5cc2293d36b2ffd1aed20551e328825519a627ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
