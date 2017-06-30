<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_6d23428ee11b2247f66463de4affb88dece326832a8f393bd71044a53f839a6d extends Twig_Template
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
        $__internal_6c2b3d674ca0ed417514178e0465b21206b188f4054be6b37954282186e08b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2b3d674ca0ed417514178e0465b21206b188f4054be6b37954282186e08b8f->enter($__internal_6c2b3d674ca0ed417514178e0465b21206b188f4054be6b37954282186e08b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_50ed47ee401e9d50b8be0aa017fbcee6997f6b99fd5c5d4c903bb31e6f36fb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ed47ee401e9d50b8be0aa017fbcee6997f6b99fd5c5d4c903bb31e6f36fb90->enter($__internal_50ed47ee401e9d50b8be0aa017fbcee6997f6b99fd5c5d4c903bb31e6f36fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6c2b3d674ca0ed417514178e0465b21206b188f4054be6b37954282186e08b8f->leave($__internal_6c2b3d674ca0ed417514178e0465b21206b188f4054be6b37954282186e08b8f_prof);

        
        $__internal_50ed47ee401e9d50b8be0aa017fbcee6997f6b99fd5c5d4c903bb31e6f36fb90->leave($__internal_50ed47ee401e9d50b8be0aa017fbcee6997f6b99fd5c5d4c903bb31e6f36fb90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
