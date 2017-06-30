<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_be268259388029f157e6489a2bbdffec44ae9728df280735c4203f1bb62844a7 extends Twig_Template
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
        $__internal_f5ce1791acac4b9bbbfdda1a3d1334c09c6c1a67f6374834d464d22220058ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ce1791acac4b9bbbfdda1a3d1334c09c6c1a67f6374834d464d22220058ba9->enter($__internal_f5ce1791acac4b9bbbfdda1a3d1334c09c6c1a67f6374834d464d22220058ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_35559d4a1ec0b4b88d2364b1032b39dffd76dda442ab2c1690dc3723bd43a438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35559d4a1ec0b4b88d2364b1032b39dffd76dda442ab2c1690dc3723bd43a438->enter($__internal_35559d4a1ec0b4b88d2364b1032b39dffd76dda442ab2c1690dc3723bd43a438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f5ce1791acac4b9bbbfdda1a3d1334c09c6c1a67f6374834d464d22220058ba9->leave($__internal_f5ce1791acac4b9bbbfdda1a3d1334c09c6c1a67f6374834d464d22220058ba9_prof);

        
        $__internal_35559d4a1ec0b4b88d2364b1032b39dffd76dda442ab2c1690dc3723bd43a438->leave($__internal_35559d4a1ec0b4b88d2364b1032b39dffd76dda442ab2c1690dc3723bd43a438_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
