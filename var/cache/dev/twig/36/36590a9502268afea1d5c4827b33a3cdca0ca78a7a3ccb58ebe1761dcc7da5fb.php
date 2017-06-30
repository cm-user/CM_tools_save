<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_46afa9865f6abe333d8c4c201f21115c618d45c15d6e09ded54c4f10f2c71e01 extends Twig_Template
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
        $__internal_4816e5df2149570964267b57389aabe9975e4c6dca10ca4e7b0b984e8ea46635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4816e5df2149570964267b57389aabe9975e4c6dca10ca4e7b0b984e8ea46635->enter($__internal_4816e5df2149570964267b57389aabe9975e4c6dca10ca4e7b0b984e8ea46635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c965d21c0d2fb87fe458452e1e1555eeef1996f3e62b86a232237ac005357c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c965d21c0d2fb87fe458452e1e1555eeef1996f3e62b86a232237ac005357c4c->enter($__internal_c965d21c0d2fb87fe458452e1e1555eeef1996f3e62b86a232237ac005357c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4816e5df2149570964267b57389aabe9975e4c6dca10ca4e7b0b984e8ea46635->leave($__internal_4816e5df2149570964267b57389aabe9975e4c6dca10ca4e7b0b984e8ea46635_prof);

        
        $__internal_c965d21c0d2fb87fe458452e1e1555eeef1996f3e62b86a232237ac005357c4c->leave($__internal_c965d21c0d2fb87fe458452e1e1555eeef1996f3e62b86a232237ac005357c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
