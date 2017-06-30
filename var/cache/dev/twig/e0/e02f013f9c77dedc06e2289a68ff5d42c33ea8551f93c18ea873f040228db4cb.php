<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8f1b62ec3310de56594bd84af5be19babe9b14155def6e10e6e54c6beefbc0b3 extends Twig_Template
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
        $__internal_72668d500a2bce31af622adc9926f09068aca97a35c64edf30a97213b128742f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72668d500a2bce31af622adc9926f09068aca97a35c64edf30a97213b128742f->enter($__internal_72668d500a2bce31af622adc9926f09068aca97a35c64edf30a97213b128742f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e0edc675037c9b74892269d6e1c09c98e02787a1af85e102b146dc14257a859a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0edc675037c9b74892269d6e1c09c98e02787a1af85e102b146dc14257a859a->enter($__internal_e0edc675037c9b74892269d6e1c09c98e02787a1af85e102b146dc14257a859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_72668d500a2bce31af622adc9926f09068aca97a35c64edf30a97213b128742f->leave($__internal_72668d500a2bce31af622adc9926f09068aca97a35c64edf30a97213b128742f_prof);

        
        $__internal_e0edc675037c9b74892269d6e1c09c98e02787a1af85e102b146dc14257a859a->leave($__internal_e0edc675037c9b74892269d6e1c09c98e02787a1af85e102b146dc14257a859a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
