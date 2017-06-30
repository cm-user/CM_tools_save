<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_009d936001a5138c2bad90be1ed2fd692550f3b54831260a37d1ae664cee5b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2998bd8576606ed7252624663ba6d47e400ca43a980a40f9c32031fb4d475aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2998bd8576606ed7252624663ba6d47e400ca43a980a40f9c32031fb4d475aa7->enter($__internal_2998bd8576606ed7252624663ba6d47e400ca43a980a40f9c32031fb4d475aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ecaaebddcbcf8d3eea3a79391c806aa25655f9246a7b3f3e42444df1b439980a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaaebddcbcf8d3eea3a79391c806aa25655f9246a7b3f3e42444df1b439980a->enter($__internal_ecaaebddcbcf8d3eea3a79391c806aa25655f9246a7b3f3e42444df1b439980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2998bd8576606ed7252624663ba6d47e400ca43a980a40f9c32031fb4d475aa7->leave($__internal_2998bd8576606ed7252624663ba6d47e400ca43a980a40f9c32031fb4d475aa7_prof);

        
        $__internal_ecaaebddcbcf8d3eea3a79391c806aa25655f9246a7b3f3e42444df1b439980a->leave($__internal_ecaaebddcbcf8d3eea3a79391c806aa25655f9246a7b3f3e42444df1b439980a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8043fb70915832d3283054def3ed0feb215c649fbb5350d21ec10dcf5e50c359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8043fb70915832d3283054def3ed0feb215c649fbb5350d21ec10dcf5e50c359->enter($__internal_8043fb70915832d3283054def3ed0feb215c649fbb5350d21ec10dcf5e50c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bf15c80c420947c6ab1cb550334386f262a3435419ff66ed5e0a392dd7306e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf15c80c420947c6ab1cb550334386f262a3435419ff66ed5e0a392dd7306e4->enter($__internal_4bf15c80c420947c6ab1cb550334386f262a3435419ff66ed5e0a392dd7306e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4bf15c80c420947c6ab1cb550334386f262a3435419ff66ed5e0a392dd7306e4->leave($__internal_4bf15c80c420947c6ab1cb550334386f262a3435419ff66ed5e0a392dd7306e4_prof);

        
        $__internal_8043fb70915832d3283054def3ed0feb215c649fbb5350d21ec10dcf5e50c359->leave($__internal_8043fb70915832d3283054def3ed0feb215c649fbb5350d21ec10dcf5e50c359_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53511de056dfaa4b086c8b1f6eb580cc46d3db67d4efda4921e6aff0a670790c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53511de056dfaa4b086c8b1f6eb580cc46d3db67d4efda4921e6aff0a670790c->enter($__internal_53511de056dfaa4b086c8b1f6eb580cc46d3db67d4efda4921e6aff0a670790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1010f1dfd9dbca196227d68ec29f2dfe2489f3ded0ca56264bd01d8d703f24b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1010f1dfd9dbca196227d68ec29f2dfe2489f3ded0ca56264bd01d8d703f24b2->enter($__internal_1010f1dfd9dbca196227d68ec29f2dfe2489f3ded0ca56264bd01d8d703f24b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1010f1dfd9dbca196227d68ec29f2dfe2489f3ded0ca56264bd01d8d703f24b2->leave($__internal_1010f1dfd9dbca196227d68ec29f2dfe2489f3ded0ca56264bd01d8d703f24b2_prof);

        
        $__internal_53511de056dfaa4b086c8b1f6eb580cc46d3db67d4efda4921e6aff0a670790c->leave($__internal_53511de056dfaa4b086c8b1f6eb580cc46d3db67d4efda4921e6aff0a670790c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
