<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f1fbed07213cebc5955e8d1f088440933a2bf17948cb58eaac8c43d5e81912de extends Twig_Template
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
        $__internal_2d8a17cf81700a10a993cf4bbd4025ef80bd9eedb144ce2360b2419d04d4f0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8a17cf81700a10a993cf4bbd4025ef80bd9eedb144ce2360b2419d04d4f0c7->enter($__internal_2d8a17cf81700a10a993cf4bbd4025ef80bd9eedb144ce2360b2419d04d4f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e25f31ed83c91e06d852131ee44692013793218dd7b68d602cee3f72634772bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25f31ed83c91e06d852131ee44692013793218dd7b68d602cee3f72634772bc->enter($__internal_e25f31ed83c91e06d852131ee44692013793218dd7b68d602cee3f72634772bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2d8a17cf81700a10a993cf4bbd4025ef80bd9eedb144ce2360b2419d04d4f0c7->leave($__internal_2d8a17cf81700a10a993cf4bbd4025ef80bd9eedb144ce2360b2419d04d4f0c7_prof);

        
        $__internal_e25f31ed83c91e06d852131ee44692013793218dd7b68d602cee3f72634772bc->leave($__internal_e25f31ed83c91e06d852131ee44692013793218dd7b68d602cee3f72634772bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
