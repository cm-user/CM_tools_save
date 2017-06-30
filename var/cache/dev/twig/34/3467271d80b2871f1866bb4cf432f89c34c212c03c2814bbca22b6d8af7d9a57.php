<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d61401c6e4746a1658c345c333414cf7440e409c70add67a41027d05207245b1 extends Twig_Template
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
        $__internal_8614bae7a4ea379976b1080625d3a44e0b30063ad824338a92a7c463df7da2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8614bae7a4ea379976b1080625d3a44e0b30063ad824338a92a7c463df7da2fb->enter($__internal_8614bae7a4ea379976b1080625d3a44e0b30063ad824338a92a7c463df7da2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e1a677339b4b1775622e2d0478df4730a841eb0fff2f763d4925081f35ccc19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a677339b4b1775622e2d0478df4730a841eb0fff2f763d4925081f35ccc19a->enter($__internal_e1a677339b4b1775622e2d0478df4730a841eb0fff2f763d4925081f35ccc19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8614bae7a4ea379976b1080625d3a44e0b30063ad824338a92a7c463df7da2fb->leave($__internal_8614bae7a4ea379976b1080625d3a44e0b30063ad824338a92a7c463df7da2fb_prof);

        
        $__internal_e1a677339b4b1775622e2d0478df4730a841eb0fff2f763d4925081f35ccc19a->leave($__internal_e1a677339b4b1775622e2d0478df4730a841eb0fff2f763d4925081f35ccc19a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
