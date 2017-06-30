<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_941096fcb045dc30712cfccd31c0c4848a43d3b0528fb0b8bb9d08448942e29c extends Twig_Template
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
        $__internal_e063c60c8348d607986f3fc6fd6eb988283e0cd18ac52796af5b0e0de2988fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e063c60c8348d607986f3fc6fd6eb988283e0cd18ac52796af5b0e0de2988fe0->enter($__internal_e063c60c8348d607986f3fc6fd6eb988283e0cd18ac52796af5b0e0de2988fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_edbcea3578f08b37273526a52f3d4786354fc2df74fe667693175c1a2f1d4278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbcea3578f08b37273526a52f3d4786354fc2df74fe667693175c1a2f1d4278->enter($__internal_edbcea3578f08b37273526a52f3d4786354fc2df74fe667693175c1a2f1d4278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e063c60c8348d607986f3fc6fd6eb988283e0cd18ac52796af5b0e0de2988fe0->leave($__internal_e063c60c8348d607986f3fc6fd6eb988283e0cd18ac52796af5b0e0de2988fe0_prof);

        
        $__internal_edbcea3578f08b37273526a52f3d4786354fc2df74fe667693175c1a2f1d4278->leave($__internal_edbcea3578f08b37273526a52f3d4786354fc2df74fe667693175c1a2f1d4278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
