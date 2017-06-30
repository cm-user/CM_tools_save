<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3cab73641216cc38a1f123cb5022d0d90adfec763275e0430185772a4ae69f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_beb4e0df4e6a515f0f8cbf154d2d2996fac4b83a371e5fac4c2d7f36d198940d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb4e0df4e6a515f0f8cbf154d2d2996fac4b83a371e5fac4c2d7f36d198940d->enter($__internal_beb4e0df4e6a515f0f8cbf154d2d2996fac4b83a371e5fac4c2d7f36d198940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3797edd2737ae20635858240a10fd3746394536e98251803122092e9b438cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3797edd2737ae20635858240a10fd3746394536e98251803122092e9b438cba->enter($__internal_d3797edd2737ae20635858240a10fd3746394536e98251803122092e9b438cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb4e0df4e6a515f0f8cbf154d2d2996fac4b83a371e5fac4c2d7f36d198940d->leave($__internal_beb4e0df4e6a515f0f8cbf154d2d2996fac4b83a371e5fac4c2d7f36d198940d_prof);

        
        $__internal_d3797edd2737ae20635858240a10fd3746394536e98251803122092e9b438cba->leave($__internal_d3797edd2737ae20635858240a10fd3746394536e98251803122092e9b438cba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9999e983797021369b7d3a32f0a69b73b1241a23e49fa9fc1bdb8c21366e30c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9999e983797021369b7d3a32f0a69b73b1241a23e49fa9fc1bdb8c21366e30c9->enter($__internal_9999e983797021369b7d3a32f0a69b73b1241a23e49fa9fc1bdb8c21366e30c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ddf7578707de879cde2d268e07b66d932486fef2d2bff0d49e1803c35afee058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf7578707de879cde2d268e07b66d932486fef2d2bff0d49e1803c35afee058->enter($__internal_ddf7578707de879cde2d268e07b66d932486fef2d2bff0d49e1803c35afee058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ddf7578707de879cde2d268e07b66d932486fef2d2bff0d49e1803c35afee058->leave($__internal_ddf7578707de879cde2d268e07b66d932486fef2d2bff0d49e1803c35afee058_prof);

        
        $__internal_9999e983797021369b7d3a32f0a69b73b1241a23e49fa9fc1bdb8c21366e30c9->leave($__internal_9999e983797021369b7d3a32f0a69b73b1241a23e49fa9fc1bdb8c21366e30c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63f5e0ce4639414ae707460bf01e2c03f21d5be460ad04f533827abdc30dab63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f5e0ce4639414ae707460bf01e2c03f21d5be460ad04f533827abdc30dab63->enter($__internal_63f5e0ce4639414ae707460bf01e2c03f21d5be460ad04f533827abdc30dab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cec14e0cd95320f5cdfe99626b5d8d72409ec95d9f5201bbbb42d64ec41ab63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec14e0cd95320f5cdfe99626b5d8d72409ec95d9f5201bbbb42d64ec41ab63c->enter($__internal_cec14e0cd95320f5cdfe99626b5d8d72409ec95d9f5201bbbb42d64ec41ab63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cec14e0cd95320f5cdfe99626b5d8d72409ec95d9f5201bbbb42d64ec41ab63c->leave($__internal_cec14e0cd95320f5cdfe99626b5d8d72409ec95d9f5201bbbb42d64ec41ab63c_prof);

        
        $__internal_63f5e0ce4639414ae707460bf01e2c03f21d5be460ad04f533827abdc30dab63->leave($__internal_63f5e0ce4639414ae707460bf01e2c03f21d5be460ad04f533827abdc30dab63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38a2a8f0257f8a16bb13e19cfc20d19405cbc8c282200ba3baf6501dbec554ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a2a8f0257f8a16bb13e19cfc20d19405cbc8c282200ba3baf6501dbec554ee->enter($__internal_38a2a8f0257f8a16bb13e19cfc20d19405cbc8c282200ba3baf6501dbec554ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23cb97822ee79c8d5a08cfa9aa866afe1f15204de893e11e3d6d38f27d12689c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cb97822ee79c8d5a08cfa9aa866afe1f15204de893e11e3d6d38f27d12689c->enter($__internal_23cb97822ee79c8d5a08cfa9aa866afe1f15204de893e11e3d6d38f27d12689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23cb97822ee79c8d5a08cfa9aa866afe1f15204de893e11e3d6d38f27d12689c->leave($__internal_23cb97822ee79c8d5a08cfa9aa866afe1f15204de893e11e3d6d38f27d12689c_prof);

        
        $__internal_38a2a8f0257f8a16bb13e19cfc20d19405cbc8c282200ba3baf6501dbec554ee->leave($__internal_38a2a8f0257f8a16bb13e19cfc20d19405cbc8c282200ba3baf6501dbec554ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
