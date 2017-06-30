<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d1cfe101322f51bcb8dbf56b515ffa69274f351e754ab41bfc71a5dab5bb312c extends Twig_Template
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
        $__internal_2369746cbdb6e1419b18251ee8ea97895f60eda8843a6691dac1b63a10a8215c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2369746cbdb6e1419b18251ee8ea97895f60eda8843a6691dac1b63a10a8215c->enter($__internal_2369746cbdb6e1419b18251ee8ea97895f60eda8843a6691dac1b63a10a8215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8bfe384293d74fab64c0d1ec564f7eb90ef5c1829a1652dbbb9cb4237043df79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfe384293d74fab64c0d1ec564f7eb90ef5c1829a1652dbbb9cb4237043df79->enter($__internal_8bfe384293d74fab64c0d1ec564f7eb90ef5c1829a1652dbbb9cb4237043df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2369746cbdb6e1419b18251ee8ea97895f60eda8843a6691dac1b63a10a8215c->leave($__internal_2369746cbdb6e1419b18251ee8ea97895f60eda8843a6691dac1b63a10a8215c_prof);

        
        $__internal_8bfe384293d74fab64c0d1ec564f7eb90ef5c1829a1652dbbb9cb4237043df79->leave($__internal_8bfe384293d74fab64c0d1ec564f7eb90ef5c1829a1652dbbb9cb4237043df79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
