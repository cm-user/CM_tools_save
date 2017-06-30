<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_32a67c5f79f2bb3ca7d714ab2e26ea57d25cd987afa7ccf82d263206686b9d32 extends Twig_Template
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
        $__internal_b0f35d0bede134d64b5ae124e31f14318c4e600cb1b2739f844c4fab20f7b7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f35d0bede134d64b5ae124e31f14318c4e600cb1b2739f844c4fab20f7b7b9->enter($__internal_b0f35d0bede134d64b5ae124e31f14318c4e600cb1b2739f844c4fab20f7b7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7d371e355d69f3f914837d441b0f0644760f32c245df77eb794872973e2d04f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d371e355d69f3f914837d441b0f0644760f32c245df77eb794872973e2d04f8->enter($__internal_7d371e355d69f3f914837d441b0f0644760f32c245df77eb794872973e2d04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b0f35d0bede134d64b5ae124e31f14318c4e600cb1b2739f844c4fab20f7b7b9->leave($__internal_b0f35d0bede134d64b5ae124e31f14318c4e600cb1b2739f844c4fab20f7b7b9_prof);

        
        $__internal_7d371e355d69f3f914837d441b0f0644760f32c245df77eb794872973e2d04f8->leave($__internal_7d371e355d69f3f914837d441b0f0644760f32c245df77eb794872973e2d04f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
