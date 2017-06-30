<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ba326a1b27bc7c1c730780f3738b0029a54ee2a466e1c4dc57ee3f9e63ec655b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238634a9e3342a9facc30ccbf6b8403571c444a4e425221516784b640cf08952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238634a9e3342a9facc30ccbf6b8403571c444a4e425221516784b640cf08952->enter($__internal_238634a9e3342a9facc30ccbf6b8403571c444a4e425221516784b640cf08952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_399bf11d4300761269f42268e7a26ab366b5a9a6c31d6dfdeedb6a5c95ddcf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399bf11d4300761269f42268e7a26ab366b5a9a6c31d6dfdeedb6a5c95ddcf89->enter($__internal_399bf11d4300761269f42268e7a26ab366b5a9a6c31d6dfdeedb6a5c95ddcf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_238634a9e3342a9facc30ccbf6b8403571c444a4e425221516784b640cf08952->leave($__internal_238634a9e3342a9facc30ccbf6b8403571c444a4e425221516784b640cf08952_prof);

        
        $__internal_399bf11d4300761269f42268e7a26ab366b5a9a6c31d6dfdeedb6a5c95ddcf89->leave($__internal_399bf11d4300761269f42268e7a26ab366b5a9a6c31d6dfdeedb6a5c95ddcf89_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f32d0c512a488d09fb124736e1d1522a76275d01073b92a0a4e498558af0e029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32d0c512a488d09fb124736e1d1522a76275d01073b92a0a4e498558af0e029->enter($__internal_f32d0c512a488d09fb124736e1d1522a76275d01073b92a0a4e498558af0e029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0754768b573b410e37ef33da50bd6288dd97a03aa6a0194fd40e5be68fe81e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0754768b573b410e37ef33da50bd6288dd97a03aa6a0194fd40e5be68fe81e14->enter($__internal_0754768b573b410e37ef33da50bd6288dd97a03aa6a0194fd40e5be68fe81e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0754768b573b410e37ef33da50bd6288dd97a03aa6a0194fd40e5be68fe81e14->leave($__internal_0754768b573b410e37ef33da50bd6288dd97a03aa6a0194fd40e5be68fe81e14_prof);

        
        $__internal_f32d0c512a488d09fb124736e1d1522a76275d01073b92a0a4e498558af0e029->leave($__internal_f32d0c512a488d09fb124736e1d1522a76275d01073b92a0a4e498558af0e029_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
