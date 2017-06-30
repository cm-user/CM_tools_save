<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b25f46b479ebab644d785323cf5a239127d209f16c07a53962c180b6f1853757 extends Twig_Template
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
        $__internal_08f355fa502b4ad3dc9d68c65327df7052a6affe9d4545e2de8f3e4a99910c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f355fa502b4ad3dc9d68c65327df7052a6affe9d4545e2de8f3e4a99910c27->enter($__internal_08f355fa502b4ad3dc9d68c65327df7052a6affe9d4545e2de8f3e4a99910c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c9231d2ebd9852d3a847ce1837d01ca0fd44ed803f73bf516b21edcd46e86e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9231d2ebd9852d3a847ce1837d01ca0fd44ed803f73bf516b21edcd46e86e8b->enter($__internal_c9231d2ebd9852d3a847ce1837d01ca0fd44ed803f73bf516b21edcd46e86e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_08f355fa502b4ad3dc9d68c65327df7052a6affe9d4545e2de8f3e4a99910c27->leave($__internal_08f355fa502b4ad3dc9d68c65327df7052a6affe9d4545e2de8f3e4a99910c27_prof);

        
        $__internal_c9231d2ebd9852d3a847ce1837d01ca0fd44ed803f73bf516b21edcd46e86e8b->leave($__internal_c9231d2ebd9852d3a847ce1837d01ca0fd44ed803f73bf516b21edcd46e86e8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
