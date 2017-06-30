<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3a74fd3d6fbd36a1b0bc3f46f1e3edc3f7775aea1b66de3ea9b379c0c36b1bae extends Twig_Template
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
        $__internal_b35635d51853f16fd1a51c818e14e051d2e06311e99970946318a0b95799f3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35635d51853f16fd1a51c818e14e051d2e06311e99970946318a0b95799f3a5->enter($__internal_b35635d51853f16fd1a51c818e14e051d2e06311e99970946318a0b95799f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_609296e811eb30fb8495c04c21cb7e736115da15f8ed7b52625956cd74e55a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609296e811eb30fb8495c04c21cb7e736115da15f8ed7b52625956cd74e55a82->enter($__internal_609296e811eb30fb8495c04c21cb7e736115da15f8ed7b52625956cd74e55a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b35635d51853f16fd1a51c818e14e051d2e06311e99970946318a0b95799f3a5->leave($__internal_b35635d51853f16fd1a51c818e14e051d2e06311e99970946318a0b95799f3a5_prof);

        
        $__internal_609296e811eb30fb8495c04c21cb7e736115da15f8ed7b52625956cd74e55a82->leave($__internal_609296e811eb30fb8495c04c21cb7e736115da15f8ed7b52625956cd74e55a82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
