<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f63d8dbd24b6de93e1f4c989075d1730eb440974f38f0aca286e6a9836e61cfc extends Twig_Template
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
        $__internal_2737ddfed379f9f1065e58266166c6decbe3c7d74d29e9996b367e4c664d3e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2737ddfed379f9f1065e58266166c6decbe3c7d74d29e9996b367e4c664d3e7c->enter($__internal_2737ddfed379f9f1065e58266166c6decbe3c7d74d29e9996b367e4c664d3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6e4e9ff42b73fd0d26486797d11608ff8a343cc52452575d9c4b79859c33d0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4e9ff42b73fd0d26486797d11608ff8a343cc52452575d9c4b79859c33d0e1->enter($__internal_6e4e9ff42b73fd0d26486797d11608ff8a343cc52452575d9c4b79859c33d0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2737ddfed379f9f1065e58266166c6decbe3c7d74d29e9996b367e4c664d3e7c->leave($__internal_2737ddfed379f9f1065e58266166c6decbe3c7d74d29e9996b367e4c664d3e7c_prof);

        
        $__internal_6e4e9ff42b73fd0d26486797d11608ff8a343cc52452575d9c4b79859c33d0e1->leave($__internal_6e4e9ff42b73fd0d26486797d11608ff8a343cc52452575d9c4b79859c33d0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
