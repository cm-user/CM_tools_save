<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e8d738dcbabe96f0a26fad0aec3dd4519e88cbd09456ac874eca46713040a5ee extends Twig_Template
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
        $__internal_4d07ef7eadecd38055350719658a48a073bdb3d4e45c892ddfad48fc9352f5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d07ef7eadecd38055350719658a48a073bdb3d4e45c892ddfad48fc9352f5cd->enter($__internal_4d07ef7eadecd38055350719658a48a073bdb3d4e45c892ddfad48fc9352f5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_84461f3fce782140192aa18194825cec76010be759a7a1e3bd1bf86185aa4f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84461f3fce782140192aa18194825cec76010be759a7a1e3bd1bf86185aa4f10->enter($__internal_84461f3fce782140192aa18194825cec76010be759a7a1e3bd1bf86185aa4f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4d07ef7eadecd38055350719658a48a073bdb3d4e45c892ddfad48fc9352f5cd->leave($__internal_4d07ef7eadecd38055350719658a48a073bdb3d4e45c892ddfad48fc9352f5cd_prof);

        
        $__internal_84461f3fce782140192aa18194825cec76010be759a7a1e3bd1bf86185aa4f10->leave($__internal_84461f3fce782140192aa18194825cec76010be759a7a1e3bd1bf86185aa4f10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
