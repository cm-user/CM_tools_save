<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d2a3c972e3868264cd8f182e60d78750394bc8078c9ca5f817d25d634d17e2a0 extends Twig_Template
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
        $__internal_56ed376a49e5e5c9838367da12ca457a53ce9f03e07cdae8bc2e11e2308b7edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ed376a49e5e5c9838367da12ca457a53ce9f03e07cdae8bc2e11e2308b7edb->enter($__internal_56ed376a49e5e5c9838367da12ca457a53ce9f03e07cdae8bc2e11e2308b7edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e3936071a19efe4c1319655e4b0fa06e40d4e3efe5eeb42c2df35c4786f48a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3936071a19efe4c1319655e4b0fa06e40d4e3efe5eeb42c2df35c4786f48a62->enter($__internal_e3936071a19efe4c1319655e4b0fa06e40d4e3efe5eeb42c2df35c4786f48a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_56ed376a49e5e5c9838367da12ca457a53ce9f03e07cdae8bc2e11e2308b7edb->leave($__internal_56ed376a49e5e5c9838367da12ca457a53ce9f03e07cdae8bc2e11e2308b7edb_prof);

        
        $__internal_e3936071a19efe4c1319655e4b0fa06e40d4e3efe5eeb42c2df35c4786f48a62->leave($__internal_e3936071a19efe4c1319655e4b0fa06e40d4e3efe5eeb42c2df35c4786f48a62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
