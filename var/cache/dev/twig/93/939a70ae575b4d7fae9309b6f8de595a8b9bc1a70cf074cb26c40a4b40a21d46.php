<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3d6d55a2b7415cc28f4444e7672d7251234b5b784dbf1efe4fc37eadb821938a extends Twig_Template
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
        $__internal_ba73349f80a5b2af7bce79202ad9d46b67587e7ba4cd22a765fc209e5eee8447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba73349f80a5b2af7bce79202ad9d46b67587e7ba4cd22a765fc209e5eee8447->enter($__internal_ba73349f80a5b2af7bce79202ad9d46b67587e7ba4cd22a765fc209e5eee8447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f4a4ecae85c8c88743d7a2be5f46f51435ffd7042cd509fb4af00e9a63fbe4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a4ecae85c8c88743d7a2be5f46f51435ffd7042cd509fb4af00e9a63fbe4b5->enter($__internal_f4a4ecae85c8c88743d7a2be5f46f51435ffd7042cd509fb4af00e9a63fbe4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ba73349f80a5b2af7bce79202ad9d46b67587e7ba4cd22a765fc209e5eee8447->leave($__internal_ba73349f80a5b2af7bce79202ad9d46b67587e7ba4cd22a765fc209e5eee8447_prof);

        
        $__internal_f4a4ecae85c8c88743d7a2be5f46f51435ffd7042cd509fb4af00e9a63fbe4b5->leave($__internal_f4a4ecae85c8c88743d7a2be5f46f51435ffd7042cd509fb4af00e9a63fbe4b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
