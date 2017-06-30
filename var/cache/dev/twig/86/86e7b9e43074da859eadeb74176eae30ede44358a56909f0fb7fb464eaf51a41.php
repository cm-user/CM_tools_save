<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_178d7ea1982bba70e0b22ab8e0fc3071c76dc08a1bccc74daa00f5afd0f6f002 extends Twig_Template
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
        $__internal_9cc55d19b2b7590bceac76737ee2d3e8331aed67eb4fb3d37d791f79e83e5af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc55d19b2b7590bceac76737ee2d3e8331aed67eb4fb3d37d791f79e83e5af3->enter($__internal_9cc55d19b2b7590bceac76737ee2d3e8331aed67eb4fb3d37d791f79e83e5af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_de40e9341aa41ea02adaffecc187774ee9eba241733e9a605bf5314a3cd35455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de40e9341aa41ea02adaffecc187774ee9eba241733e9a605bf5314a3cd35455->enter($__internal_de40e9341aa41ea02adaffecc187774ee9eba241733e9a605bf5314a3cd35455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9cc55d19b2b7590bceac76737ee2d3e8331aed67eb4fb3d37d791f79e83e5af3->leave($__internal_9cc55d19b2b7590bceac76737ee2d3e8331aed67eb4fb3d37d791f79e83e5af3_prof);

        
        $__internal_de40e9341aa41ea02adaffecc187774ee9eba241733e9a605bf5314a3cd35455->leave($__internal_de40e9341aa41ea02adaffecc187774ee9eba241733e9a605bf5314a3cd35455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
