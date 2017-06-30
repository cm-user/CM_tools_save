<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6c551b0ad9db0c6073313df12dfe9afe844a0e2a39d1e5672e8d01330e0b8f60 extends Twig_Template
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
        $__internal_fd6bc8db238c35f56e8c66e4c4791636e96c787fb628b3aea71e5ac83a352b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6bc8db238c35f56e8c66e4c4791636e96c787fb628b3aea71e5ac83a352b5a->enter($__internal_fd6bc8db238c35f56e8c66e4c4791636e96c787fb628b3aea71e5ac83a352b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7a6f58ed7e292eb4231519dbcc101bd103e27f619a34d764ea574cc9b8818d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6f58ed7e292eb4231519dbcc101bd103e27f619a34d764ea574cc9b8818d3d->enter($__internal_7a6f58ed7e292eb4231519dbcc101bd103e27f619a34d764ea574cc9b8818d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fd6bc8db238c35f56e8c66e4c4791636e96c787fb628b3aea71e5ac83a352b5a->leave($__internal_fd6bc8db238c35f56e8c66e4c4791636e96c787fb628b3aea71e5ac83a352b5a_prof);

        
        $__internal_7a6f58ed7e292eb4231519dbcc101bd103e27f619a34d764ea574cc9b8818d3d->leave($__internal_7a6f58ed7e292eb4231519dbcc101bd103e27f619a34d764ea574cc9b8818d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
