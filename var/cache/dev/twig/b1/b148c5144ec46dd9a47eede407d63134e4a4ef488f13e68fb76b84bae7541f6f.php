<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_45b4a73c6b2bb05b256b9f46d44bef8df6baaa5b61013241e3715ff7623c775e extends Twig_Template
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
        $__internal_d4354f168d8b23ebacc370e1dca31ef6fc0fa55b1034799172549599c6a30b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4354f168d8b23ebacc370e1dca31ef6fc0fa55b1034799172549599c6a30b07->enter($__internal_d4354f168d8b23ebacc370e1dca31ef6fc0fa55b1034799172549599c6a30b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_16f3cf60e86f9f23ad0e54cd35023f58a9f64b79dcd4b7e62f78eb6f10c76aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f3cf60e86f9f23ad0e54cd35023f58a9f64b79dcd4b7e62f78eb6f10c76aee->enter($__internal_16f3cf60e86f9f23ad0e54cd35023f58a9f64b79dcd4b7e62f78eb6f10c76aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d4354f168d8b23ebacc370e1dca31ef6fc0fa55b1034799172549599c6a30b07->leave($__internal_d4354f168d8b23ebacc370e1dca31ef6fc0fa55b1034799172549599c6a30b07_prof);

        
        $__internal_16f3cf60e86f9f23ad0e54cd35023f58a9f64b79dcd4b7e62f78eb6f10c76aee->leave($__internal_16f3cf60e86f9f23ad0e54cd35023f58a9f64b79dcd4b7e62f78eb6f10c76aee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
