<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_d384aad0c5656bbd0260519fe1eb1ae180e007502101cb24bffad4578165e8c8 extends Twig_Template
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
        $__internal_7429824d11e8392c13a67d7fa57a03504c65b11c235687f3c290a332c94cbf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7429824d11e8392c13a67d7fa57a03504c65b11c235687f3c290a332c94cbf66->enter($__internal_7429824d11e8392c13a67d7fa57a03504c65b11c235687f3c290a332c94cbf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_b768f082bfaefbf34f5b810b7f7986a3b1c215be2d6e0ee7fdda8d8a6781c611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b768f082bfaefbf34f5b810b7f7986a3b1c215be2d6e0ee7fdda8d8a6781c611->enter($__internal_b768f082bfaefbf34f5b810b7f7986a3b1c215be2d6e0ee7fdda8d8a6781c611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7429824d11e8392c13a67d7fa57a03504c65b11c235687f3c290a332c94cbf66->leave($__internal_7429824d11e8392c13a67d7fa57a03504c65b11c235687f3c290a332c94cbf66_prof);

        
        $__internal_b768f082bfaefbf34f5b810b7f7986a3b1c215be2d6e0ee7fdda8d8a6781c611->leave($__internal_b768f082bfaefbf34f5b810b7f7986a3b1c215be2d6e0ee7fdda8d8a6781c611_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
