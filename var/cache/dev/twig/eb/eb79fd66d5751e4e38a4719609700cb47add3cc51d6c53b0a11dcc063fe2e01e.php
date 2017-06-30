<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fa34730f1e9f73ae2c180501a0421ad7ea391708c3e09237a092ae5f7e99cde6 extends Twig_Template
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
        $__internal_d30251a9f9ae03706806b85ac60c980dae14f0675e5451f3d532b0be99978a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30251a9f9ae03706806b85ac60c980dae14f0675e5451f3d532b0be99978a29->enter($__internal_d30251a9f9ae03706806b85ac60c980dae14f0675e5451f3d532b0be99978a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_84da3c357e14bd17d701cb5dfd3e2792c16385ab5f1fc0dce1edcee7e88bfc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84da3c357e14bd17d701cb5dfd3e2792c16385ab5f1fc0dce1edcee7e88bfc88->enter($__internal_84da3c357e14bd17d701cb5dfd3e2792c16385ab5f1fc0dce1edcee7e88bfc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d30251a9f9ae03706806b85ac60c980dae14f0675e5451f3d532b0be99978a29->leave($__internal_d30251a9f9ae03706806b85ac60c980dae14f0675e5451f3d532b0be99978a29_prof);

        
        $__internal_84da3c357e14bd17d701cb5dfd3e2792c16385ab5f1fc0dce1edcee7e88bfc88->leave($__internal_84da3c357e14bd17d701cb5dfd3e2792c16385ab5f1fc0dce1edcee7e88bfc88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
