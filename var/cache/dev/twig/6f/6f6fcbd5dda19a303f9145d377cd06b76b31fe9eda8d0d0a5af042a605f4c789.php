<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2aead81fd99782aa851539df9b84b42a32aaf8280a4fea17e4250aa373f1335a extends Twig_Template
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
        $__internal_8795de8d2b099f16c8e06c4c14deb0c6d6377c2042686857d501888f5659c931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8795de8d2b099f16c8e06c4c14deb0c6d6377c2042686857d501888f5659c931->enter($__internal_8795de8d2b099f16c8e06c4c14deb0c6d6377c2042686857d501888f5659c931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_59e13b2e96f8f6ed24db7e25a456d978c8f505ea028a6e2304f6e318cf68607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e13b2e96f8f6ed24db7e25a456d978c8f505ea028a6e2304f6e318cf68607d->enter($__internal_59e13b2e96f8f6ed24db7e25a456d978c8f505ea028a6e2304f6e318cf68607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8795de8d2b099f16c8e06c4c14deb0c6d6377c2042686857d501888f5659c931->leave($__internal_8795de8d2b099f16c8e06c4c14deb0c6d6377c2042686857d501888f5659c931_prof);

        
        $__internal_59e13b2e96f8f6ed24db7e25a456d978c8f505ea028a6e2304f6e318cf68607d->leave($__internal_59e13b2e96f8f6ed24db7e25a456d978c8f505ea028a6e2304f6e318cf68607d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
