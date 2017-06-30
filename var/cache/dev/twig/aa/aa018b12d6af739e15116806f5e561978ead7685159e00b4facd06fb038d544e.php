<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ac0b2059824e6d9d09eb700d8868ceb4bfe5bf8d591c63e7d33e651b23466a49 extends Twig_Template
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
        $__internal_d45e8c145a0be2cb4d5eb02105ff56ed7699dca7e646165e903010b860bb3992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45e8c145a0be2cb4d5eb02105ff56ed7699dca7e646165e903010b860bb3992->enter($__internal_d45e8c145a0be2cb4d5eb02105ff56ed7699dca7e646165e903010b860bb3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c92ebe3dd149cf4f37472a7168d59cdd75d43a18a37e7b7bf1dfd626c027eb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92ebe3dd149cf4f37472a7168d59cdd75d43a18a37e7b7bf1dfd626c027eb1a->enter($__internal_c92ebe3dd149cf4f37472a7168d59cdd75d43a18a37e7b7bf1dfd626c027eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d45e8c145a0be2cb4d5eb02105ff56ed7699dca7e646165e903010b860bb3992->leave($__internal_d45e8c145a0be2cb4d5eb02105ff56ed7699dca7e646165e903010b860bb3992_prof);

        
        $__internal_c92ebe3dd149cf4f37472a7168d59cdd75d43a18a37e7b7bf1dfd626c027eb1a->leave($__internal_c92ebe3dd149cf4f37472a7168d59cdd75d43a18a37e7b7bf1dfd626c027eb1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
