<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3e8fc563eb32ccbab8f0128ade849af0a7915392826792d04c41184053b9a1fc extends Twig_Template
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
        $__internal_92749baf404a7ef5f3c5538c58de8d6431107a348d913322716e13d8966a45eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92749baf404a7ef5f3c5538c58de8d6431107a348d913322716e13d8966a45eb->enter($__internal_92749baf404a7ef5f3c5538c58de8d6431107a348d913322716e13d8966a45eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1ff6fb9c6e654bd9c9f4b46003710be56566e1c4d682da742bf0d3ce0b221250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff6fb9c6e654bd9c9f4b46003710be56566e1c4d682da742bf0d3ce0b221250->enter($__internal_1ff6fb9c6e654bd9c9f4b46003710be56566e1c4d682da742bf0d3ce0b221250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_92749baf404a7ef5f3c5538c58de8d6431107a348d913322716e13d8966a45eb->leave($__internal_92749baf404a7ef5f3c5538c58de8d6431107a348d913322716e13d8966a45eb_prof);

        
        $__internal_1ff6fb9c6e654bd9c9f4b46003710be56566e1c4d682da742bf0d3ce0b221250->leave($__internal_1ff6fb9c6e654bd9c9f4b46003710be56566e1c4d682da742bf0d3ce0b221250_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
