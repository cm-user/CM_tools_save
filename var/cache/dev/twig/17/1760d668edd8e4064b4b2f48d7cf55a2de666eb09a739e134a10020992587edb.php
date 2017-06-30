<?php

/* @CoreSphereConsole/Console/terminal.html.twig */
class __TwigTemplate_97df709cc269bb78122a966fe8582f43bd84f05c735d0bdb73742a4b3ee48601 extends Twig_Template
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
        $__internal_9ecd6fc6dddfb55fed1e848929713a417d5293595bfa560a42e14bc4efc29b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecd6fc6dddfb55fed1e848929713a417d5293595bfa560a42e14bc4efc29b0d->enter($__internal_9ecd6fc6dddfb55fed1e848929713a417d5293595bfa560a42e14bc4efc29b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/terminal.html.twig"));

        $__internal_7957dd7b1b9c63800b96279a4dc38b23dbf01c45ddce586cdb40092f7b8b418e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7957dd7b1b9c63800b96279a4dc38b23dbf01c45ddce586cdb40092f7b8b418e->enter($__internal_7957dd7b1b9c63800b96279a4dc38b23dbf01c45ddce586cdb40092f7b8b418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, ($context["working_dir"] ?? $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, ($context["environment"] ?? $this->getContext($context, "environment")), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_9ecd6fc6dddfb55fed1e848929713a417d5293595bfa560a42e14bc4efc29b0d->leave($__internal_9ecd6fc6dddfb55fed1e848929713a417d5293595bfa560a42e14bc4efc29b0d_prof);

        
        $__internal_7957dd7b1b9c63800b96279a4dc38b23dbf01c45ddce586cdb40092f7b8b418e->leave($__internal_7957dd7b1b9c63800b96279a4dc38b23dbf01c45ddce586cdb40092f7b8b418e_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "@CoreSphereConsole/Console/terminal.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\terminal.html.twig");
    }
}
