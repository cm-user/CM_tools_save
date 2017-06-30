<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_94a2e485408ae74a3f887fd3871fb4044a6cf7cbbcf48a2c765c9332bd8505d6 extends Twig_Template
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
        $__internal_50531c48d54f4d5245f72374a9b4cb391514b9c6c696212a34b00431f1a996f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50531c48d54f4d5245f72374a9b4cb391514b9c6c696212a34b00431f1a996f0->enter($__internal_50531c48d54f4d5245f72374a9b4cb391514b9c6c696212a34b00431f1a996f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4d2024e3bd1e95d7489a2c14c077eb9d85b8cfa8b30c650db4780f853d2b4781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2024e3bd1e95d7489a2c14c077eb9d85b8cfa8b30c650db4780f853d2b4781->enter($__internal_4d2024e3bd1e95d7489a2c14c077eb9d85b8cfa8b30c650db4780f853d2b4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_50531c48d54f4d5245f72374a9b4cb391514b9c6c696212a34b00431f1a996f0->leave($__internal_50531c48d54f4d5245f72374a9b4cb391514b9c6c696212a34b00431f1a996f0_prof);

        
        $__internal_4d2024e3bd1e95d7489a2c14c077eb9d85b8cfa8b30c650db4780f853d2b4781->leave($__internal_4d2024e3bd1e95d7489a2c14c077eb9d85b8cfa8b30c650db4780f853d2b4781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
