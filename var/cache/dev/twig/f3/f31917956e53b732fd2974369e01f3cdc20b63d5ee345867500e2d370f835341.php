<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_45e4a24960e869b6921ef8c64ef58373217f9f7557cfe061e055aa3a3c67416d extends Twig_Template
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
        $__internal_dd2b6bce2d37bca4570be393f928312fa2b60ad87001f46e548fa74391c43408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2b6bce2d37bca4570be393f928312fa2b60ad87001f46e548fa74391c43408->enter($__internal_dd2b6bce2d37bca4570be393f928312fa2b60ad87001f46e548fa74391c43408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b3ccf770c127060e77ffe53004b6c64d5c679a21c1063772ae488e95de86b8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ccf770c127060e77ffe53004b6c64d5c679a21c1063772ae488e95de86b8f6->enter($__internal_b3ccf770c127060e77ffe53004b6c64d5c679a21c1063772ae488e95de86b8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dd2b6bce2d37bca4570be393f928312fa2b60ad87001f46e548fa74391c43408->leave($__internal_dd2b6bce2d37bca4570be393f928312fa2b60ad87001f46e548fa74391c43408_prof);

        
        $__internal_b3ccf770c127060e77ffe53004b6c64d5c679a21c1063772ae488e95de86b8f6->leave($__internal_b3ccf770c127060e77ffe53004b6c64d5c679a21c1063772ae488e95de86b8f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
