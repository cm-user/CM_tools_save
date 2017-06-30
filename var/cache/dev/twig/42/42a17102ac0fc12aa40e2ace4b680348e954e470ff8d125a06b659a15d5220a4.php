<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9f517c64170515014f0f99f9568f7194042d41db1d328350e0dba9371d6be76b extends Twig_Template
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
        $__internal_81a400c534d88a529687055a684c03f6579f526da52a0342dd4f827108a3e148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a400c534d88a529687055a684c03f6579f526da52a0342dd4f827108a3e148->enter($__internal_81a400c534d88a529687055a684c03f6579f526da52a0342dd4f827108a3e148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_78845c89a3f0af00e05e8f97b0ee5a06966fa3d27280c568806ac314e8b7e617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78845c89a3f0af00e05e8f97b0ee5a06966fa3d27280c568806ac314e8b7e617->enter($__internal_78845c89a3f0af00e05e8f97b0ee5a06966fa3d27280c568806ac314e8b7e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81a400c534d88a529687055a684c03f6579f526da52a0342dd4f827108a3e148->leave($__internal_81a400c534d88a529687055a684c03f6579f526da52a0342dd4f827108a3e148_prof);

        
        $__internal_78845c89a3f0af00e05e8f97b0ee5a06966fa3d27280c568806ac314e8b7e617->leave($__internal_78845c89a3f0af00e05e8f97b0ee5a06966fa3d27280c568806ac314e8b7e617_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
