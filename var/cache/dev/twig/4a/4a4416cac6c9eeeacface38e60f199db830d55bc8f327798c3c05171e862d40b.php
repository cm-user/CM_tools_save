<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_75045a52689f1842f60359ccc66bfb6fc185339d2a0c65442318671290a714a9 extends Twig_Template
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
        $__internal_8bbc488eb8b6a1dc5449bbfd4d1e93c4e4b151abbf967f8c6859b0c873f5785a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbc488eb8b6a1dc5449bbfd4d1e93c4e4b151abbf967f8c6859b0c873f5785a->enter($__internal_8bbc488eb8b6a1dc5449bbfd4d1e93c4e4b151abbf967f8c6859b0c873f5785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_af2a477364cbe293467a8a9372ff75069a2a2f7437c84d68e46e11cb18e440a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2a477364cbe293467a8a9372ff75069a2a2f7437c84d68e46e11cb18e440a1->enter($__internal_af2a477364cbe293467a8a9372ff75069a2a2f7437c84d68e46e11cb18e440a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8bbc488eb8b6a1dc5449bbfd4d1e93c4e4b151abbf967f8c6859b0c873f5785a->leave($__internal_8bbc488eb8b6a1dc5449bbfd4d1e93c4e4b151abbf967f8c6859b0c873f5785a_prof);

        
        $__internal_af2a477364cbe293467a8a9372ff75069a2a2f7437c84d68e46e11cb18e440a1->leave($__internal_af2a477364cbe293467a8a9372ff75069a2a2f7437c84d68e46e11cb18e440a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
