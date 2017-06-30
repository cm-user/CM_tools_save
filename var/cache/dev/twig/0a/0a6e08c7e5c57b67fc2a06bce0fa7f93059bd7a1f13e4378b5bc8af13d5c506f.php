<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5dca0e995ab3e0682c09070a3c06493ab4df3ffce6b103fad4d712a3f2862b05 extends Twig_Template
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
        $__internal_7ee89e00ee3d4637f25eb53ba0eb525ee779c0345b6dcd3438fb9c907967fbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee89e00ee3d4637f25eb53ba0eb525ee779c0345b6dcd3438fb9c907967fbab->enter($__internal_7ee89e00ee3d4637f25eb53ba0eb525ee779c0345b6dcd3438fb9c907967fbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0b5efacba66168243d7bd1bd2eb1c53ce40bb9192abdae52fb95921b52b78877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5efacba66168243d7bd1bd2eb1c53ce40bb9192abdae52fb95921b52b78877->enter($__internal_0b5efacba66168243d7bd1bd2eb1c53ce40bb9192abdae52fb95921b52b78877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7ee89e00ee3d4637f25eb53ba0eb525ee779c0345b6dcd3438fb9c907967fbab->leave($__internal_7ee89e00ee3d4637f25eb53ba0eb525ee779c0345b6dcd3438fb9c907967fbab_prof);

        
        $__internal_0b5efacba66168243d7bd1bd2eb1c53ce40bb9192abdae52fb95921b52b78877->leave($__internal_0b5efacba66168243d7bd1bd2eb1c53ce40bb9192abdae52fb95921b52b78877_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
