<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dce05c16e974c68d4ae491e079f4af4686ad94309cefc6ea84b2d4ef19ab66cf extends Twig_Template
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
        $__internal_6e09b5c74e719c8407c06d8829aae0a801c2aaaedf2eed129075307e7a398532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e09b5c74e719c8407c06d8829aae0a801c2aaaedf2eed129075307e7a398532->enter($__internal_6e09b5c74e719c8407c06d8829aae0a801c2aaaedf2eed129075307e7a398532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ad9561558fbb1954c5036d88f4ad5ee0227d0af8709380000dd9962bf0feda96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9561558fbb1954c5036d88f4ad5ee0227d0af8709380000dd9962bf0feda96->enter($__internal_ad9561558fbb1954c5036d88f4ad5ee0227d0af8709380000dd9962bf0feda96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e09b5c74e719c8407c06d8829aae0a801c2aaaedf2eed129075307e7a398532->leave($__internal_6e09b5c74e719c8407c06d8829aae0a801c2aaaedf2eed129075307e7a398532_prof);

        
        $__internal_ad9561558fbb1954c5036d88f4ad5ee0227d0af8709380000dd9962bf0feda96->leave($__internal_ad9561558fbb1954c5036d88f4ad5ee0227d0af8709380000dd9962bf0feda96_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0edf556fb27ca194d058aa108cbeb3c9b24e9f98bb3d50568125d08144dff76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edf556fb27ca194d058aa108cbeb3c9b24e9f98bb3d50568125d08144dff76f->enter($__internal_0edf556fb27ca194d058aa108cbeb3c9b24e9f98bb3d50568125d08144dff76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fe6850d0b4c1eebc96fd07d5485b06ffe3b4a8ad0e0aae05937f9911219b9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe6850d0b4c1eebc96fd07d5485b06ffe3b4a8ad0e0aae05937f9911219b9e1->enter($__internal_5fe6850d0b4c1eebc96fd07d5485b06ffe3b4a8ad0e0aae05937f9911219b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5fe6850d0b4c1eebc96fd07d5485b06ffe3b4a8ad0e0aae05937f9911219b9e1->leave($__internal_5fe6850d0b4c1eebc96fd07d5485b06ffe3b4a8ad0e0aae05937f9911219b9e1_prof);

        
        $__internal_0edf556fb27ca194d058aa108cbeb3c9b24e9f98bb3d50568125d08144dff76f->leave($__internal_0edf556fb27ca194d058aa108cbeb3c9b24e9f98bb3d50568125d08144dff76f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
