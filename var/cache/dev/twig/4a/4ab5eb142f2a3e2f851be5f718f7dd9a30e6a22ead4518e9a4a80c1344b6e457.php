<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_09a3be19b5171d88b77df7b2ee26d360360505a9030e889696c6714e94950d81 extends Twig_Template
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
        $__internal_4f9ef5755471d1bf01ef580e852dd3b44f8d6c1c4faf01dddd219590e0c762a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9ef5755471d1bf01ef580e852dd3b44f8d6c1c4faf01dddd219590e0c762a5->enter($__internal_4f9ef5755471d1bf01ef580e852dd3b44f8d6c1c4faf01dddd219590e0c762a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d8c766f887130cc14632f9ee6034d063e6ba5e61a1afa9b2fe9e22f0d1897a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c766f887130cc14632f9ee6034d063e6ba5e61a1afa9b2fe9e22f0d1897a77->enter($__internal_d8c766f887130cc14632f9ee6034d063e6ba5e61a1afa9b2fe9e22f0d1897a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4f9ef5755471d1bf01ef580e852dd3b44f8d6c1c4faf01dddd219590e0c762a5->leave($__internal_4f9ef5755471d1bf01ef580e852dd3b44f8d6c1c4faf01dddd219590e0c762a5_prof);

        
        $__internal_d8c766f887130cc14632f9ee6034d063e6ba5e61a1afa9b2fe9e22f0d1897a77->leave($__internal_d8c766f887130cc14632f9ee6034d063e6ba5e61a1afa9b2fe9e22f0d1897a77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
