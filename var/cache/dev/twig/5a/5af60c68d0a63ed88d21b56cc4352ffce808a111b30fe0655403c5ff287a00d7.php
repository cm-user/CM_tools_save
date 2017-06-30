<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1cf3fd312df32213f24a59a244ca1b45556791c0bb993b99d395e65d2dc9c1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_81cc6546be160e29644f69762b7ee1b252e62ee9d74cfba01f357270bf99ef51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cc6546be160e29644f69762b7ee1b252e62ee9d74cfba01f357270bf99ef51->enter($__internal_81cc6546be160e29644f69762b7ee1b252e62ee9d74cfba01f357270bf99ef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_658b7d8aafe21b9082bfe424041f8b91fe5e1de8298ec9ee07331ad9b9fcc66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658b7d8aafe21b9082bfe424041f8b91fe5e1de8298ec9ee07331ad9b9fcc66e->enter($__internal_658b7d8aafe21b9082bfe424041f8b91fe5e1de8298ec9ee07331ad9b9fcc66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cc6546be160e29644f69762b7ee1b252e62ee9d74cfba01f357270bf99ef51->leave($__internal_81cc6546be160e29644f69762b7ee1b252e62ee9d74cfba01f357270bf99ef51_prof);

        
        $__internal_658b7d8aafe21b9082bfe424041f8b91fe5e1de8298ec9ee07331ad9b9fcc66e->leave($__internal_658b7d8aafe21b9082bfe424041f8b91fe5e1de8298ec9ee07331ad9b9fcc66e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_492289ccd47d0d7cc3fdbe59659a296d402a03a59618cefaeebbb585eeac2728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492289ccd47d0d7cc3fdbe59659a296d402a03a59618cefaeebbb585eeac2728->enter($__internal_492289ccd47d0d7cc3fdbe59659a296d402a03a59618cefaeebbb585eeac2728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f25538615125eb12e72955b1c42541f70b842dee419f5103c30388826ba2fa79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25538615125eb12e72955b1c42541f70b842dee419f5103c30388826ba2fa79->enter($__internal_f25538615125eb12e72955b1c42541f70b842dee419f5103c30388826ba2fa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f25538615125eb12e72955b1c42541f70b842dee419f5103c30388826ba2fa79->leave($__internal_f25538615125eb12e72955b1c42541f70b842dee419f5103c30388826ba2fa79_prof);

        
        $__internal_492289ccd47d0d7cc3fdbe59659a296d402a03a59618cefaeebbb585eeac2728->leave($__internal_492289ccd47d0d7cc3fdbe59659a296d402a03a59618cefaeebbb585eeac2728_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9c88fe57f91704deb53fc349d24d86581a7e7d27b3f79b0e65a6714c6f9e605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c88fe57f91704deb53fc349d24d86581a7e7d27b3f79b0e65a6714c6f9e605->enter($__internal_c9c88fe57f91704deb53fc349d24d86581a7e7d27b3f79b0e65a6714c6f9e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d4ba5fa4d1e8cb1ca9b6226d2218bd611fca56a6f2d096b30e784856aba6924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4ba5fa4d1e8cb1ca9b6226d2218bd611fca56a6f2d096b30e784856aba6924->enter($__internal_8d4ba5fa4d1e8cb1ca9b6226d2218bd611fca56a6f2d096b30e784856aba6924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d4ba5fa4d1e8cb1ca9b6226d2218bd611fca56a6f2d096b30e784856aba6924->leave($__internal_8d4ba5fa4d1e8cb1ca9b6226d2218bd611fca56a6f2d096b30e784856aba6924_prof);

        
        $__internal_c9c88fe57f91704deb53fc349d24d86581a7e7d27b3f79b0e65a6714c6f9e605->leave($__internal_c9c88fe57f91704deb53fc349d24d86581a7e7d27b3f79b0e65a6714c6f9e605_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
