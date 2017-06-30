<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c2f7d9c22b5c2abc5ccc74f1401ef780290e9cb9894432ad806b6be14aaa30f4 extends Twig_Template
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
        $__internal_2a316bf6a28d56eb8b4a8df15b6a3deb1095361e79c959894d15d5da274e2c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a316bf6a28d56eb8b4a8df15b6a3deb1095361e79c959894d15d5da274e2c09->enter($__internal_2a316bf6a28d56eb8b4a8df15b6a3deb1095361e79c959894d15d5da274e2c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a9d1fda66841cb8108aafc6de00db8265e54a29bc951576db8d2aa313787b905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d1fda66841cb8108aafc6de00db8265e54a29bc951576db8d2aa313787b905->enter($__internal_a9d1fda66841cb8108aafc6de00db8265e54a29bc951576db8d2aa313787b905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2a316bf6a28d56eb8b4a8df15b6a3deb1095361e79c959894d15d5da274e2c09->leave($__internal_2a316bf6a28d56eb8b4a8df15b6a3deb1095361e79c959894d15d5da274e2c09_prof);

        
        $__internal_a9d1fda66841cb8108aafc6de00db8265e54a29bc951576db8d2aa313787b905->leave($__internal_a9d1fda66841cb8108aafc6de00db8265e54a29bc951576db8d2aa313787b905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
