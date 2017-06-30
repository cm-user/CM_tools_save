<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7624bf2cb978cb64f5f50cbfcdfbe1fa50dec9bc07eaa8b1c9631dfb4c68d88c extends Twig_Template
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
        $__internal_4f636e32c114eff123d6eca6fd5f67d0269815873118901d2394d9b71afad00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f636e32c114eff123d6eca6fd5f67d0269815873118901d2394d9b71afad00c->enter($__internal_4f636e32c114eff123d6eca6fd5f67d0269815873118901d2394d9b71afad00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f33b2410d2453de71467c7ecb825ef44a5896f913ef4e4c1785789b327be60de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33b2410d2453de71467c7ecb825ef44a5896f913ef4e4c1785789b327be60de->enter($__internal_f33b2410d2453de71467c7ecb825ef44a5896f913ef4e4c1785789b327be60de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4f636e32c114eff123d6eca6fd5f67d0269815873118901d2394d9b71afad00c->leave($__internal_4f636e32c114eff123d6eca6fd5f67d0269815873118901d2394d9b71afad00c_prof);

        
        $__internal_f33b2410d2453de71467c7ecb825ef44a5896f913ef4e4c1785789b327be60de->leave($__internal_f33b2410d2453de71467c7ecb825ef44a5896f913ef4e4c1785789b327be60de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
