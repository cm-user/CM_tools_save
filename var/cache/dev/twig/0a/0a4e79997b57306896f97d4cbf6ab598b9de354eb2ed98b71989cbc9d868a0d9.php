<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_15cd7ca5bb6af8dc30292b96cf997d16adae26004e12db28786c0701275c2b5e extends Twig_Template
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
        $__internal_5bbe5a70d3e13d709512d3662d0ad29dde37045a02781b8128caa482a9ce8335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbe5a70d3e13d709512d3662d0ad29dde37045a02781b8128caa482a9ce8335->enter($__internal_5bbe5a70d3e13d709512d3662d0ad29dde37045a02781b8128caa482a9ce8335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_333d8293360994f543afbb147c3b360235276603b2327ad8930660f1fb3c9c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333d8293360994f543afbb147c3b360235276603b2327ad8930660f1fb3c9c87->enter($__internal_333d8293360994f543afbb147c3b360235276603b2327ad8930660f1fb3c9c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5bbe5a70d3e13d709512d3662d0ad29dde37045a02781b8128caa482a9ce8335->leave($__internal_5bbe5a70d3e13d709512d3662d0ad29dde37045a02781b8128caa482a9ce8335_prof);

        
        $__internal_333d8293360994f543afbb147c3b360235276603b2327ad8930660f1fb3c9c87->leave($__internal_333d8293360994f543afbb147c3b360235276603b2327ad8930660f1fb3c9c87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
