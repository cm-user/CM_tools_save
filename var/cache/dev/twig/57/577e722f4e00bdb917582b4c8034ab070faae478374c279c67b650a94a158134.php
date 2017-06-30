<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cc83d549c9c0af5fbe22b5466677fb55bc4270ff853c8b2bb0f87b5af41cba65 extends Twig_Template
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
        $__internal_954ecc0bfe1e839017eaebfa8897239a7c5229240bd7e57ee0bdda5c2605c3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954ecc0bfe1e839017eaebfa8897239a7c5229240bd7e57ee0bdda5c2605c3a1->enter($__internal_954ecc0bfe1e839017eaebfa8897239a7c5229240bd7e57ee0bdda5c2605c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_569d322868fdf1cb185f15ace760eb52aac8bb0b8040b9fab6b082c4a58c8d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569d322868fdf1cb185f15ace760eb52aac8bb0b8040b9fab6b082c4a58c8d77->enter($__internal_569d322868fdf1cb185f15ace760eb52aac8bb0b8040b9fab6b082c4a58c8d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_954ecc0bfe1e839017eaebfa8897239a7c5229240bd7e57ee0bdda5c2605c3a1->leave($__internal_954ecc0bfe1e839017eaebfa8897239a7c5229240bd7e57ee0bdda5c2605c3a1_prof);

        
        $__internal_569d322868fdf1cb185f15ace760eb52aac8bb0b8040b9fab6b082c4a58c8d77->leave($__internal_569d322868fdf1cb185f15ace760eb52aac8bb0b8040b9fab6b082c4a58c8d77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
