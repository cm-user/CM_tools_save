<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a64c565939a8f1345306fac1f381ffe2fc93fc44441da89795b0e5a756cba113 extends Twig_Template
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
        $__internal_f27d8afcc753b52c65c33bc3b8a1a49ead9812a32f1ccf8b6aed7843ca0ff4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27d8afcc753b52c65c33bc3b8a1a49ead9812a32f1ccf8b6aed7843ca0ff4b4->enter($__internal_f27d8afcc753b52c65c33bc3b8a1a49ead9812a32f1ccf8b6aed7843ca0ff4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_73d5e405e214cd4808cc8427fb54fbd23fd67dab3d0500eee9939ca7d7f90842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d5e405e214cd4808cc8427fb54fbd23fd67dab3d0500eee9939ca7d7f90842->enter($__internal_73d5e405e214cd4808cc8427fb54fbd23fd67dab3d0500eee9939ca7d7f90842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f27d8afcc753b52c65c33bc3b8a1a49ead9812a32f1ccf8b6aed7843ca0ff4b4->leave($__internal_f27d8afcc753b52c65c33bc3b8a1a49ead9812a32f1ccf8b6aed7843ca0ff4b4_prof);

        
        $__internal_73d5e405e214cd4808cc8427fb54fbd23fd67dab3d0500eee9939ca7d7f90842->leave($__internal_73d5e405e214cd4808cc8427fb54fbd23fd67dab3d0500eee9939ca7d7f90842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
