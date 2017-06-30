<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f939b047f24dca574859fa270f66d749e40de2d4011b44802c1c07161448a6c1 extends Twig_Template
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
        $__internal_bec4c63228ede46f51f122670b20ad5a3fe1e039e8a8b8f273a3ecad4645dbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec4c63228ede46f51f122670b20ad5a3fe1e039e8a8b8f273a3ecad4645dbdf->enter($__internal_bec4c63228ede46f51f122670b20ad5a3fe1e039e8a8b8f273a3ecad4645dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_35b3ba625f5958859e6c544773bae2cb1aa7bc9e86ab984728908e5a7d58ecd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b3ba625f5958859e6c544773bae2cb1aa7bc9e86ab984728908e5a7d58ecd3->enter($__internal_35b3ba625f5958859e6c544773bae2cb1aa7bc9e86ab984728908e5a7d58ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bec4c63228ede46f51f122670b20ad5a3fe1e039e8a8b8f273a3ecad4645dbdf->leave($__internal_bec4c63228ede46f51f122670b20ad5a3fe1e039e8a8b8f273a3ecad4645dbdf_prof);

        
        $__internal_35b3ba625f5958859e6c544773bae2cb1aa7bc9e86ab984728908e5a7d58ecd3->leave($__internal_35b3ba625f5958859e6c544773bae2cb1aa7bc9e86ab984728908e5a7d58ecd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
