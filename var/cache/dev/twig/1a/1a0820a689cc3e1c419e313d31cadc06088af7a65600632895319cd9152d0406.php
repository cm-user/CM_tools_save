<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_b2cd698ecf7b65e4bad0cf36f60e258b36d8ca0625cd92f9ca1d781b21578e69 extends Twig_Template
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
        $__internal_722b207c2907fc7e1c838627fcbfd749f66a53d9ea5d71c5d251d9f80c6c44a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722b207c2907fc7e1c838627fcbfd749f66a53d9ea5d71c5d251d9f80c6c44a7->enter($__internal_722b207c2907fc7e1c838627fcbfd749f66a53d9ea5d71c5d251d9f80c6c44a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8f96363100694e5ce2791f36f5473a953ea74be87d07c2db5cd7852e9e75d6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f96363100694e5ce2791f36f5473a953ea74be87d07c2db5cd7852e9e75d6c9->enter($__internal_8f96363100694e5ce2791f36f5473a953ea74be87d07c2db5cd7852e9e75d6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_722b207c2907fc7e1c838627fcbfd749f66a53d9ea5d71c5d251d9f80c6c44a7->leave($__internal_722b207c2907fc7e1c838627fcbfd749f66a53d9ea5d71c5d251d9f80c6c44a7_prof);

        
        $__internal_8f96363100694e5ce2791f36f5473a953ea74be87d07c2db5cd7852e9e75d6c9->leave($__internal_8f96363100694e5ce2791f36f5473a953ea74be87d07c2db5cd7852e9e75d6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
