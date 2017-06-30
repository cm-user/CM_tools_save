<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_52d544c09389c4f35e30c0c0d9116417ec9de23219c54a47398594491df60ecf extends Twig_Template
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
        $__internal_232027a94002ec8f002f2b7c7d28016a88f6a454985baad07bf5b58046b8ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232027a94002ec8f002f2b7c7d28016a88f6a454985baad07bf5b58046b8ffc0->enter($__internal_232027a94002ec8f002f2b7c7d28016a88f6a454985baad07bf5b58046b8ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a42fb509060bf842ba2a674daaf24667c026572d64bf2f3a3f933961210787fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42fb509060bf842ba2a674daaf24667c026572d64bf2f3a3f933961210787fd->enter($__internal_a42fb509060bf842ba2a674daaf24667c026572d64bf2f3a3f933961210787fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_232027a94002ec8f002f2b7c7d28016a88f6a454985baad07bf5b58046b8ffc0->leave($__internal_232027a94002ec8f002f2b7c7d28016a88f6a454985baad07bf5b58046b8ffc0_prof);

        
        $__internal_a42fb509060bf842ba2a674daaf24667c026572d64bf2f3a3f933961210787fd->leave($__internal_a42fb509060bf842ba2a674daaf24667c026572d64bf2f3a3f933961210787fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
