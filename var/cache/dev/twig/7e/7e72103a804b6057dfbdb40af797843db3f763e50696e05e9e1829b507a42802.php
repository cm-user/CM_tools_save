<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b48b12bccd385600844c2e00282d64393e0e910829610716714bf87803a0e1a1 extends Twig_Template
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
        $__internal_d7a762b42a879e7bcf01eebef18479326d1a3475c1ac844b0b3f4d6d58f26830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a762b42a879e7bcf01eebef18479326d1a3475c1ac844b0b3f4d6d58f26830->enter($__internal_d7a762b42a879e7bcf01eebef18479326d1a3475c1ac844b0b3f4d6d58f26830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fd30706f0df189fc2bdd910592c15ffe58a9894ff306d468220cd808873b2bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd30706f0df189fc2bdd910592c15ffe58a9894ff306d468220cd808873b2bfc->enter($__internal_fd30706f0df189fc2bdd910592c15ffe58a9894ff306d468220cd808873b2bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d7a762b42a879e7bcf01eebef18479326d1a3475c1ac844b0b3f4d6d58f26830->leave($__internal_d7a762b42a879e7bcf01eebef18479326d1a3475c1ac844b0b3f4d6d58f26830_prof);

        
        $__internal_fd30706f0df189fc2bdd910592c15ffe58a9894ff306d468220cd808873b2bfc->leave($__internal_fd30706f0df189fc2bdd910592c15ffe58a9894ff306d468220cd808873b2bfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
