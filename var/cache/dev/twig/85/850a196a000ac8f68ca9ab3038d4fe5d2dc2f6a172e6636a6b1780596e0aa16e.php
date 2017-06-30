<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_de68fb2ab3171e6446e55b05f0bd65b424a091ccdf27e5bb62f0182212de8a7d extends Twig_Template
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
        $__internal_4a5233b68e4c204330b4258127fa0575783e9d62497148fe56d2ea4c06b48637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5233b68e4c204330b4258127fa0575783e9d62497148fe56d2ea4c06b48637->enter($__internal_4a5233b68e4c204330b4258127fa0575783e9d62497148fe56d2ea4c06b48637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c0e6d8e040a989bbe5b5d44e341dd398854d5b01c38f480376cb37d1e6c48c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e6d8e040a989bbe5b5d44e341dd398854d5b01c38f480376cb37d1e6c48c14->enter($__internal_c0e6d8e040a989bbe5b5d44e341dd398854d5b01c38f480376cb37d1e6c48c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4a5233b68e4c204330b4258127fa0575783e9d62497148fe56d2ea4c06b48637->leave($__internal_4a5233b68e4c204330b4258127fa0575783e9d62497148fe56d2ea4c06b48637_prof);

        
        $__internal_c0e6d8e040a989bbe5b5d44e341dd398854d5b01c38f480376cb37d1e6c48c14->leave($__internal_c0e6d8e040a989bbe5b5d44e341dd398854d5b01c38f480376cb37d1e6c48c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
