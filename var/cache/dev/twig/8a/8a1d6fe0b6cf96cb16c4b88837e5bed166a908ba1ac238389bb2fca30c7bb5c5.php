<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9f1e128536870906b975c730a6c03bb6116413ad589faa66754aba87a0099bfa extends Twig_Template
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
        $__internal_2efb69a22b984cce7820ebdf3a4e2ee03cfcbf1bf31a1c85888bbf5a6e8f8945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efb69a22b984cce7820ebdf3a4e2ee03cfcbf1bf31a1c85888bbf5a6e8f8945->enter($__internal_2efb69a22b984cce7820ebdf3a4e2ee03cfcbf1bf31a1c85888bbf5a6e8f8945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5717b18118e8d861fc5e9d3c7d988df74b4e0673bc8e31d6ca7ef49b1b356a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5717b18118e8d861fc5e9d3c7d988df74b4e0673bc8e31d6ca7ef49b1b356a38->enter($__internal_5717b18118e8d861fc5e9d3c7d988df74b4e0673bc8e31d6ca7ef49b1b356a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2efb69a22b984cce7820ebdf3a4e2ee03cfcbf1bf31a1c85888bbf5a6e8f8945->leave($__internal_2efb69a22b984cce7820ebdf3a4e2ee03cfcbf1bf31a1c85888bbf5a6e8f8945_prof);

        
        $__internal_5717b18118e8d861fc5e9d3c7d988df74b4e0673bc8e31d6ca7ef49b1b356a38->leave($__internal_5717b18118e8d861fc5e9d3c7d988df74b4e0673bc8e31d6ca7ef49b1b356a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
