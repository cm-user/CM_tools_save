<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f9e204c1d13ac164738a25820aa85420d6d2b08339f0fa6c56886080cd3234db extends Twig_Template
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
        $__internal_630fd999fc0f472fbcf35368327664ee52acd9e19ce4de68bbc3d22d24541304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630fd999fc0f472fbcf35368327664ee52acd9e19ce4de68bbc3d22d24541304->enter($__internal_630fd999fc0f472fbcf35368327664ee52acd9e19ce4de68bbc3d22d24541304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ff66af6316f7aeef2a356b7e986ec444ae03f9fe12153a9983e5f0c8dd5bbac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff66af6316f7aeef2a356b7e986ec444ae03f9fe12153a9983e5f0c8dd5bbac6->enter($__internal_ff66af6316f7aeef2a356b7e986ec444ae03f9fe12153a9983e5f0c8dd5bbac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_630fd999fc0f472fbcf35368327664ee52acd9e19ce4de68bbc3d22d24541304->leave($__internal_630fd999fc0f472fbcf35368327664ee52acd9e19ce4de68bbc3d22d24541304_prof);

        
        $__internal_ff66af6316f7aeef2a356b7e986ec444ae03f9fe12153a9983e5f0c8dd5bbac6->leave($__internal_ff66af6316f7aeef2a356b7e986ec444ae03f9fe12153a9983e5f0c8dd5bbac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
