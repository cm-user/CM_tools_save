<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_b41439dadaca980b16e8807e425e5da27b857a67c25f8938c83a298b0ae6212c extends Twig_Template
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
        $__internal_74b6b81b36d64b59456c4f138264fb6faaa4e100aeff5f9386a5a46a104c45a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b6b81b36d64b59456c4f138264fb6faaa4e100aeff5f9386a5a46a104c45a6->enter($__internal_74b6b81b36d64b59456c4f138264fb6faaa4e100aeff5f9386a5a46a104c45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4d9d0bb04a090f363dacb8d2e16f3d4f895fa3b5fc1e247b4822ce1e7913b7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9d0bb04a090f363dacb8d2e16f3d4f895fa3b5fc1e247b4822ce1e7913b7fa->enter($__internal_4d9d0bb04a090f363dacb8d2e16f3d4f895fa3b5fc1e247b4822ce1e7913b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_74b6b81b36d64b59456c4f138264fb6faaa4e100aeff5f9386a5a46a104c45a6->leave($__internal_74b6b81b36d64b59456c4f138264fb6faaa4e100aeff5f9386a5a46a104c45a6_prof);

        
        $__internal_4d9d0bb04a090f363dacb8d2e16f3d4f895fa3b5fc1e247b4822ce1e7913b7fa->leave($__internal_4d9d0bb04a090f363dacb8d2e16f3d4f895fa3b5fc1e247b4822ce1e7913b7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
