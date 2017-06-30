<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_51297ef8a0db24e2308cd6ab5d76629977fa8c66a5c18c0c607302cb3c1333b9 extends Twig_Template
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
        $__internal_dd70cba2e837b35edcf2e89659a1d120099184bfd93dc511bcbe97345bd003a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd70cba2e837b35edcf2e89659a1d120099184bfd93dc511bcbe97345bd003a6->enter($__internal_dd70cba2e837b35edcf2e89659a1d120099184bfd93dc511bcbe97345bd003a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c7874260cec622097941cd1a5da4b8217ff19fc338848cdb08af4e2a3732ea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7874260cec622097941cd1a5da4b8217ff19fc338848cdb08af4e2a3732ea72->enter($__internal_c7874260cec622097941cd1a5da4b8217ff19fc338848cdb08af4e2a3732ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dd70cba2e837b35edcf2e89659a1d120099184bfd93dc511bcbe97345bd003a6->leave($__internal_dd70cba2e837b35edcf2e89659a1d120099184bfd93dc511bcbe97345bd003a6_prof);

        
        $__internal_c7874260cec622097941cd1a5da4b8217ff19fc338848cdb08af4e2a3732ea72->leave($__internal_c7874260cec622097941cd1a5da4b8217ff19fc338848cdb08af4e2a3732ea72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
