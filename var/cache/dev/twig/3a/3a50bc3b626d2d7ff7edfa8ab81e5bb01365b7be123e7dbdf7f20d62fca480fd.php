<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e899b4858ed6c0fb4e6814c1ab3fc1cd654717e104c616744c5cd83e7f070f94 extends Twig_Template
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
        $__internal_d45f8218ecf5e2b974de8ed7f356b54db3d70618037c62f69c121040c0b0fc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45f8218ecf5e2b974de8ed7f356b54db3d70618037c62f69c121040c0b0fc82->enter($__internal_d45f8218ecf5e2b974de8ed7f356b54db3d70618037c62f69c121040c0b0fc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b4e0240b8f1813e74837a8b739e3f40f392440d252a0b372ece83cd7e12ba8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e0240b8f1813e74837a8b739e3f40f392440d252a0b372ece83cd7e12ba8bf->enter($__internal_b4e0240b8f1813e74837a8b739e3f40f392440d252a0b372ece83cd7e12ba8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_d45f8218ecf5e2b974de8ed7f356b54db3d70618037c62f69c121040c0b0fc82->leave($__internal_d45f8218ecf5e2b974de8ed7f356b54db3d70618037c62f69c121040c0b0fc82_prof);

        
        $__internal_b4e0240b8f1813e74837a8b739e3f40f392440d252a0b372ece83cd7e12ba8bf->leave($__internal_b4e0240b8f1813e74837a8b739e3f40f392440d252a0b372ece83cd7e12ba8bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
