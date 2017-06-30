<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_27c46ec00d6037611f9824261d4d552cbbb9020df1512edcd84b80be82b5d280 extends Twig_Template
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
        $__internal_eed0f24597dc655eefd9e0cf2b2743074a7523493c1cb1a4cda625541ef56e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed0f24597dc655eefd9e0cf2b2743074a7523493c1cb1a4cda625541ef56e51->enter($__internal_eed0f24597dc655eefd9e0cf2b2743074a7523493c1cb1a4cda625541ef56e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9e54379066e80f40c55615f876620dfc6f8d2de34b6fe7c3cdcda79adc437c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e54379066e80f40c55615f876620dfc6f8d2de34b6fe7c3cdcda79adc437c95->enter($__internal_9e54379066e80f40c55615f876620dfc6f8d2de34b6fe7c3cdcda79adc437c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_eed0f24597dc655eefd9e0cf2b2743074a7523493c1cb1a4cda625541ef56e51->leave($__internal_eed0f24597dc655eefd9e0cf2b2743074a7523493c1cb1a4cda625541ef56e51_prof);

        
        $__internal_9e54379066e80f40c55615f876620dfc6f8d2de34b6fe7c3cdcda79adc437c95->leave($__internal_9e54379066e80f40c55615f876620dfc6f8d2de34b6fe7c3cdcda79adc437c95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
