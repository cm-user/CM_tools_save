<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3a19cabcbd69ce32f129065ac590ae2bf6b0c037c297159beb874df5a138fa87 extends Twig_Template
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
        $__internal_8ea479c0d507167cdac406276cf7821209130f8675b280b97f825b510682fcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea479c0d507167cdac406276cf7821209130f8675b280b97f825b510682fcd9->enter($__internal_8ea479c0d507167cdac406276cf7821209130f8675b280b97f825b510682fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_14db6898e889013c0a1c6392073f5292f790ed180bf88700078f7142c8f8eb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14db6898e889013c0a1c6392073f5292f790ed180bf88700078f7142c8f8eb29->enter($__internal_14db6898e889013c0a1c6392073f5292f790ed180bf88700078f7142c8f8eb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8ea479c0d507167cdac406276cf7821209130f8675b280b97f825b510682fcd9->leave($__internal_8ea479c0d507167cdac406276cf7821209130f8675b280b97f825b510682fcd9_prof);

        
        $__internal_14db6898e889013c0a1c6392073f5292f790ed180bf88700078f7142c8f8eb29->leave($__internal_14db6898e889013c0a1c6392073f5292f790ed180bf88700078f7142c8f8eb29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
