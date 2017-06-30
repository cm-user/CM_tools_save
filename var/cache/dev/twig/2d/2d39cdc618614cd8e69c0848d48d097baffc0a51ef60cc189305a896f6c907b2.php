<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d1f578a01ed713d40280145154ad81675bbbdc156fe870c074cc49cf82818f14 extends Twig_Template
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
        $__internal_db0649cb30f01ad5d6f9b28d9ddc1d048aef11055736ef5b07590c08c0f1874a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0649cb30f01ad5d6f9b28d9ddc1d048aef11055736ef5b07590c08c0f1874a->enter($__internal_db0649cb30f01ad5d6f9b28d9ddc1d048aef11055736ef5b07590c08c0f1874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_352956f1d17ffef55555afa178ee1603435b2bd9d1212e0a8d1efc4ba7b663e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352956f1d17ffef55555afa178ee1603435b2bd9d1212e0a8d1efc4ba7b663e0->enter($__internal_352956f1d17ffef55555afa178ee1603435b2bd9d1212e0a8d1efc4ba7b663e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db0649cb30f01ad5d6f9b28d9ddc1d048aef11055736ef5b07590c08c0f1874a->leave($__internal_db0649cb30f01ad5d6f9b28d9ddc1d048aef11055736ef5b07590c08c0f1874a_prof);

        
        $__internal_352956f1d17ffef55555afa178ee1603435b2bd9d1212e0a8d1efc4ba7b663e0->leave($__internal_352956f1d17ffef55555afa178ee1603435b2bd9d1212e0a8d1efc4ba7b663e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
