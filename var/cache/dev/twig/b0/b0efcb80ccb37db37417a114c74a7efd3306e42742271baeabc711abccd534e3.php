<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c7b012d3c2f1630c77366c51469c884aa9d9a80f718a0475822f451cf99edbd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_979306b134b00f59922d858ddcd908c437796e4c8b20b4c023cfc1d8bf02cab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979306b134b00f59922d858ddcd908c437796e4c8b20b4c023cfc1d8bf02cab0->enter($__internal_979306b134b00f59922d858ddcd908c437796e4c8b20b4c023cfc1d8bf02cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f6436484e14ec3a9ff44caea09491756d27270db67bd014d55d545211173ad8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6436484e14ec3a9ff44caea09491756d27270db67bd014d55d545211173ad8c->enter($__internal_f6436484e14ec3a9ff44caea09491756d27270db67bd014d55d545211173ad8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_979306b134b00f59922d858ddcd908c437796e4c8b20b4c023cfc1d8bf02cab0->leave($__internal_979306b134b00f59922d858ddcd908c437796e4c8b20b4c023cfc1d8bf02cab0_prof);

        
        $__internal_f6436484e14ec3a9ff44caea09491756d27270db67bd014d55d545211173ad8c->leave($__internal_f6436484e14ec3a9ff44caea09491756d27270db67bd014d55d545211173ad8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
