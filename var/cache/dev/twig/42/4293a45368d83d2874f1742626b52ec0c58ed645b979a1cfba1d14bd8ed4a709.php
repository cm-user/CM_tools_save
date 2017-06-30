<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_932d9df873d089996f3726fbc1c58f1c12dcdbbb0e508b257fbfc72ea93e80d4 extends Twig_Template
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
        $__internal_66b978a1132114007bcd3ce283f39801136cfaaaab51eba65e9bddc7b4e2a0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b978a1132114007bcd3ce283f39801136cfaaaab51eba65e9bddc7b4e2a0f5->enter($__internal_66b978a1132114007bcd3ce283f39801136cfaaaab51eba65e9bddc7b4e2a0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1eccf8743e9babae42f0bd699ec3e3742f9a1f7c042fb5c4d09e635f2b468e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eccf8743e9babae42f0bd699ec3e3742f9a1f7c042fb5c4d09e635f2b468e4a->enter($__internal_1eccf8743e9babae42f0bd699ec3e3742f9a1f7c042fb5c4d09e635f2b468e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_66b978a1132114007bcd3ce283f39801136cfaaaab51eba65e9bddc7b4e2a0f5->leave($__internal_66b978a1132114007bcd3ce283f39801136cfaaaab51eba65e9bddc7b4e2a0f5_prof);

        
        $__internal_1eccf8743e9babae42f0bd699ec3e3742f9a1f7c042fb5c4d09e635f2b468e4a->leave($__internal_1eccf8743e9babae42f0bd699ec3e3742f9a1f7c042fb5c4d09e635f2b468e4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
