<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2e680f8747f5bdcd9e72d55a4a7b98d5348f6134c22ced79400da1452221a749 extends Twig_Template
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
        $__internal_fa492e2565aa761bac836bcd5949fdc1d5ff1f99e900bffd3d4e089d1e6faaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa492e2565aa761bac836bcd5949fdc1d5ff1f99e900bffd3d4e089d1e6faaa4->enter($__internal_fa492e2565aa761bac836bcd5949fdc1d5ff1f99e900bffd3d4e089d1e6faaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_763d39626a8e7b3bd6ab39b68460faa9c6d8623d355f3eb02ed43ab69dfd0f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763d39626a8e7b3bd6ab39b68460faa9c6d8623d355f3eb02ed43ab69dfd0f9e->enter($__internal_763d39626a8e7b3bd6ab39b68460faa9c6d8623d355f3eb02ed43ab69dfd0f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fa492e2565aa761bac836bcd5949fdc1d5ff1f99e900bffd3d4e089d1e6faaa4->leave($__internal_fa492e2565aa761bac836bcd5949fdc1d5ff1f99e900bffd3d4e089d1e6faaa4_prof);

        
        $__internal_763d39626a8e7b3bd6ab39b68460faa9c6d8623d355f3eb02ed43ab69dfd0f9e->leave($__internal_763d39626a8e7b3bd6ab39b68460faa9c6d8623d355f3eb02ed43ab69dfd0f9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
