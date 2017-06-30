<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2a7e9ae631a2cc9936de992219e8c7c22a99b82e95ddb40558f44c27cb50f4d6 extends Twig_Template
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
        $__internal_80abed42b9f9406dda9d22b044d06d62d0d9ca4d35852cbad933558be6eb12f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80abed42b9f9406dda9d22b044d06d62d0d9ca4d35852cbad933558be6eb12f4->enter($__internal_80abed42b9f9406dda9d22b044d06d62d0d9ca4d35852cbad933558be6eb12f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5f755771638e2b411d4a0d592e04ec750f89ca2746ea8df91e43a9bcafc7b987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f755771638e2b411d4a0d592e04ec750f89ca2746ea8df91e43a9bcafc7b987->enter($__internal_5f755771638e2b411d4a0d592e04ec750f89ca2746ea8df91e43a9bcafc7b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_80abed42b9f9406dda9d22b044d06d62d0d9ca4d35852cbad933558be6eb12f4->leave($__internal_80abed42b9f9406dda9d22b044d06d62d0d9ca4d35852cbad933558be6eb12f4_prof);

        
        $__internal_5f755771638e2b411d4a0d592e04ec750f89ca2746ea8df91e43a9bcafc7b987->leave($__internal_5f755771638e2b411d4a0d592e04ec750f89ca2746ea8df91e43a9bcafc7b987_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
