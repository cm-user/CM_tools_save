<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e17dbbaf9f2716376b94ff98801a481e4e627ce6f46221bf9c2b8abfb023b361 extends Twig_Template
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
        $__internal_c1615dc7acb6d64f3bf1fcc0da1ff73ca5a7db183e86233a6c5323eb76c7b80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1615dc7acb6d64f3bf1fcc0da1ff73ca5a7db183e86233a6c5323eb76c7b80e->enter($__internal_c1615dc7acb6d64f3bf1fcc0da1ff73ca5a7db183e86233a6c5323eb76c7b80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7d2c30bc3c597815cf04cdec17c8308759f7202894d30e6122583c5fba1c90cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2c30bc3c597815cf04cdec17c8308759f7202894d30e6122583c5fba1c90cb->enter($__internal_7d2c30bc3c597815cf04cdec17c8308759f7202894d30e6122583c5fba1c90cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c1615dc7acb6d64f3bf1fcc0da1ff73ca5a7db183e86233a6c5323eb76c7b80e->leave($__internal_c1615dc7acb6d64f3bf1fcc0da1ff73ca5a7db183e86233a6c5323eb76c7b80e_prof);

        
        $__internal_7d2c30bc3c597815cf04cdec17c8308759f7202894d30e6122583c5fba1c90cb->leave($__internal_7d2c30bc3c597815cf04cdec17c8308759f7202894d30e6122583c5fba1c90cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
