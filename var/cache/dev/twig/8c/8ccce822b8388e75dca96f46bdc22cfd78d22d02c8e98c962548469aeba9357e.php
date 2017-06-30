<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b1d7ede269ef89d44fa4be421cff97c150cb4174ed4dd84e90b632864100333a extends Twig_Template
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
        $__internal_6e0b32ced2e8d649fc67c78d8a536d0c5ff085b2cb2615a74b98ba0a871ab8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0b32ced2e8d649fc67c78d8a536d0c5ff085b2cb2615a74b98ba0a871ab8af->enter($__internal_6e0b32ced2e8d649fc67c78d8a536d0c5ff085b2cb2615a74b98ba0a871ab8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_77162b71a94f7fac05ed27007ab0688f99bbdf04d765f2fccae6529bc0bf1d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77162b71a94f7fac05ed27007ab0688f99bbdf04d765f2fccae6529bc0bf1d75->enter($__internal_77162b71a94f7fac05ed27007ab0688f99bbdf04d765f2fccae6529bc0bf1d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6e0b32ced2e8d649fc67c78d8a536d0c5ff085b2cb2615a74b98ba0a871ab8af->leave($__internal_6e0b32ced2e8d649fc67c78d8a536d0c5ff085b2cb2615a74b98ba0a871ab8af_prof);

        
        $__internal_77162b71a94f7fac05ed27007ab0688f99bbdf04d765f2fccae6529bc0bf1d75->leave($__internal_77162b71a94f7fac05ed27007ab0688f99bbdf04d765f2fccae6529bc0bf1d75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
