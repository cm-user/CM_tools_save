<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_890dd0e6b74b90859284aaf5d6b0c059a3ff9d07b64a0bac4643d11e01b9986d extends Twig_Template
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
        $__internal_601dd9882d74a59e3c0fb189bf9c046381bdfc364037d7b6d1aa2492d70d293a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601dd9882d74a59e3c0fb189bf9c046381bdfc364037d7b6d1aa2492d70d293a->enter($__internal_601dd9882d74a59e3c0fb189bf9c046381bdfc364037d7b6d1aa2492d70d293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_74d5f0f425435e7e9f408ead7ff1df929c2120cebd57f10410c1d989b399081b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d5f0f425435e7e9f408ead7ff1df929c2120cebd57f10410c1d989b399081b->enter($__internal_74d5f0f425435e7e9f408ead7ff1df929c2120cebd57f10410c1d989b399081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_601dd9882d74a59e3c0fb189bf9c046381bdfc364037d7b6d1aa2492d70d293a->leave($__internal_601dd9882d74a59e3c0fb189bf9c046381bdfc364037d7b6d1aa2492d70d293a_prof);

        
        $__internal_74d5f0f425435e7e9f408ead7ff1df929c2120cebd57f10410c1d989b399081b->leave($__internal_74d5f0f425435e7e9f408ead7ff1df929c2120cebd57f10410c1d989b399081b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
