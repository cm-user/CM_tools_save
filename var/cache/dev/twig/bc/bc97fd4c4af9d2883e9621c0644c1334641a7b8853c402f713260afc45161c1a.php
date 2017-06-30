<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_66694fd45683d05c3553cba79c5cd431919832509069a4906513d41d9ecea70c extends Twig_Template
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
        $__internal_d63fafba4a53f37edcf17a53b46b511c37019c2d4c5bd2b085813eafc8914bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63fafba4a53f37edcf17a53b46b511c37019c2d4c5bd2b085813eafc8914bdb->enter($__internal_d63fafba4a53f37edcf17a53b46b511c37019c2d4c5bd2b085813eafc8914bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_83c172292c517b90f608432281a636bf640c7562881ec7890b5fecc911c17b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c172292c517b90f608432281a636bf640c7562881ec7890b5fecc911c17b09->enter($__internal_83c172292c517b90f608432281a636bf640c7562881ec7890b5fecc911c17b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d63fafba4a53f37edcf17a53b46b511c37019c2d4c5bd2b085813eafc8914bdb->leave($__internal_d63fafba4a53f37edcf17a53b46b511c37019c2d4c5bd2b085813eafc8914bdb_prof);

        
        $__internal_83c172292c517b90f608432281a636bf640c7562881ec7890b5fecc911c17b09->leave($__internal_83c172292c517b90f608432281a636bf640c7562881ec7890b5fecc911c17b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
