<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2f4c6e7fb53b0c2402e1197e4d5655fd0efd43baf64e4dc16f930c76a806a875 extends Twig_Template
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
        $__internal_e1fb36c7eb465d7a0e78719805bdbfe4f6811a5b23b0d1f0bcc76954d50f5b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fb36c7eb465d7a0e78719805bdbfe4f6811a5b23b0d1f0bcc76954d50f5b28->enter($__internal_e1fb36c7eb465d7a0e78719805bdbfe4f6811a5b23b0d1f0bcc76954d50f5b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a235644a58522e0f09180fc9caff7ded2955060f426ba7eeb04beb29ef8fc252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a235644a58522e0f09180fc9caff7ded2955060f426ba7eeb04beb29ef8fc252->enter($__internal_a235644a58522e0f09180fc9caff7ded2955060f426ba7eeb04beb29ef8fc252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e1fb36c7eb465d7a0e78719805bdbfe4f6811a5b23b0d1f0bcc76954d50f5b28->leave($__internal_e1fb36c7eb465d7a0e78719805bdbfe4f6811a5b23b0d1f0bcc76954d50f5b28_prof);

        
        $__internal_a235644a58522e0f09180fc9caff7ded2955060f426ba7eeb04beb29ef8fc252->leave($__internal_a235644a58522e0f09180fc9caff7ded2955060f426ba7eeb04beb29ef8fc252_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
