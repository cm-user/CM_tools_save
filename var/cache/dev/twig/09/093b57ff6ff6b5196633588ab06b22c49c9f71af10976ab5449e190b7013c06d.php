<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_acba0f8d3a23facec664e1edb3a207a4e0242f259567fbaca29df00057de725b extends Twig_Template
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
        $__internal_14a2fb3d216189cccb6bdc0670addfb6b583d70cf3732db3152490a4622d5dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a2fb3d216189cccb6bdc0670addfb6b583d70cf3732db3152490a4622d5dd9->enter($__internal_14a2fb3d216189cccb6bdc0670addfb6b583d70cf3732db3152490a4622d5dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b036f0f65ab96b2b7977192c4e05888c7531c3e685ea30bf472d31e3280649ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b036f0f65ab96b2b7977192c4e05888c7531c3e685ea30bf472d31e3280649ec->enter($__internal_b036f0f65ab96b2b7977192c4e05888c7531c3e685ea30bf472d31e3280649ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_14a2fb3d216189cccb6bdc0670addfb6b583d70cf3732db3152490a4622d5dd9->leave($__internal_14a2fb3d216189cccb6bdc0670addfb6b583d70cf3732db3152490a4622d5dd9_prof);

        
        $__internal_b036f0f65ab96b2b7977192c4e05888c7531c3e685ea30bf472d31e3280649ec->leave($__internal_b036f0f65ab96b2b7977192c4e05888c7531c3e685ea30bf472d31e3280649ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
