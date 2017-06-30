<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d86505a61e7e5324b0347f33e04ad861f8c839ede4a7cb3c0b63d8e555925a59 extends Twig_Template
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
        $__internal_2577d9744a53b1e1e1f0dfe8a3cac1d4f7d1e717ea3b00299be358873ec1d404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2577d9744a53b1e1e1f0dfe8a3cac1d4f7d1e717ea3b00299be358873ec1d404->enter($__internal_2577d9744a53b1e1e1f0dfe8a3cac1d4f7d1e717ea3b00299be358873ec1d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_130033b23e97a56978639582af0f165289c2cc345937b5739df933373bf99c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130033b23e97a56978639582af0f165289c2cc345937b5739df933373bf99c0d->enter($__internal_130033b23e97a56978639582af0f165289c2cc345937b5739df933373bf99c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2577d9744a53b1e1e1f0dfe8a3cac1d4f7d1e717ea3b00299be358873ec1d404->leave($__internal_2577d9744a53b1e1e1f0dfe8a3cac1d4f7d1e717ea3b00299be358873ec1d404_prof);

        
        $__internal_130033b23e97a56978639582af0f165289c2cc345937b5739df933373bf99c0d->leave($__internal_130033b23e97a56978639582af0f165289c2cc345937b5739df933373bf99c0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
