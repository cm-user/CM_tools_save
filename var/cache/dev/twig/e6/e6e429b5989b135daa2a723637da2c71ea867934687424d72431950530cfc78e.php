<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d9f6183cd8bf7696d700987eb1a45937694f4d7bcec1d9122a178fcf150ee3ab extends Twig_Template
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
        $__internal_0ec48a5a8fe09a8285fa19a581164b6a5cf4ed461405e1116720d2beae1de73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec48a5a8fe09a8285fa19a581164b6a5cf4ed461405e1116720d2beae1de73c->enter($__internal_0ec48a5a8fe09a8285fa19a581164b6a5cf4ed461405e1116720d2beae1de73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_aefb7f95608b1cd55d67ef957a125a924e8d7ff96ea445396bdea038b5bbe846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefb7f95608b1cd55d67ef957a125a924e8d7ff96ea445396bdea038b5bbe846->enter($__internal_aefb7f95608b1cd55d67ef957a125a924e8d7ff96ea445396bdea038b5bbe846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0ec48a5a8fe09a8285fa19a581164b6a5cf4ed461405e1116720d2beae1de73c->leave($__internal_0ec48a5a8fe09a8285fa19a581164b6a5cf4ed461405e1116720d2beae1de73c_prof);

        
        $__internal_aefb7f95608b1cd55d67ef957a125a924e8d7ff96ea445396bdea038b5bbe846->leave($__internal_aefb7f95608b1cd55d67ef957a125a924e8d7ff96ea445396bdea038b5bbe846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
