<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1fe853f23660bbcb627e1635c632498c2e6bf7149f312a15120d74c298a2b85c extends Twig_Template
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
        $__internal_171b6b5bee2d32f98df40e7735f3f4769a711e110ac41ceeb9d8e3b90cab3bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171b6b5bee2d32f98df40e7735f3f4769a711e110ac41ceeb9d8e3b90cab3bb0->enter($__internal_171b6b5bee2d32f98df40e7735f3f4769a711e110ac41ceeb9d8e3b90cab3bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_75bebb14c27ab9fbf9deb3d7a78934f4e735e96fd8e42729d386f5e3b162baf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bebb14c27ab9fbf9deb3d7a78934f4e735e96fd8e42729d386f5e3b162baf8->enter($__internal_75bebb14c27ab9fbf9deb3d7a78934f4e735e96fd8e42729d386f5e3b162baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_171b6b5bee2d32f98df40e7735f3f4769a711e110ac41ceeb9d8e3b90cab3bb0->leave($__internal_171b6b5bee2d32f98df40e7735f3f4769a711e110ac41ceeb9d8e3b90cab3bb0_prof);

        
        $__internal_75bebb14c27ab9fbf9deb3d7a78934f4e735e96fd8e42729d386f5e3b162baf8->leave($__internal_75bebb14c27ab9fbf9deb3d7a78934f4e735e96fd8e42729d386f5e3b162baf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
