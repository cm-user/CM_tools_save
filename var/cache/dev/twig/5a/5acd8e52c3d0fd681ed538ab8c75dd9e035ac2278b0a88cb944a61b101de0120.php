<?php

/* @CoreSphereConsole/Console/console.html.twig */
class __TwigTemplate_6dd242804929c796ffdf8bb5424bddcb0e845ee3ecf2251de6e36541be2183a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "@CoreSphereConsole/Console/console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a893f3ac434851138eb50e026210b31799bded890c6585629e61acf117f1440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a893f3ac434851138eb50e026210b31799bded890c6585629e61acf117f1440->enter($__internal_6a893f3ac434851138eb50e026210b31799bded890c6585629e61acf117f1440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_e1bd06dd5f59a7da93d07fd898885d359c175a1d757dd9cd9fbb78c0ef0eb425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bd06dd5f59a7da93d07fd898885d359c175a1d757dd9cd9fbb78c0ef0eb425->enter($__internal_e1bd06dd5f59a7da93d07fd898885d359c175a1d757dd9cd9fbb78c0ef0eb425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a893f3ac434851138eb50e026210b31799bded890c6585629e61acf117f1440->leave($__internal_6a893f3ac434851138eb50e026210b31799bded890c6585629e61acf117f1440_prof);

        
        $__internal_e1bd06dd5f59a7da93d07fd898885d359c175a1d757dd9cd9fbb78c0ef0eb425->leave($__internal_e1bd06dd5f59a7da93d07fd898885d359c175a1d757dd9cd9fbb78c0ef0eb425_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_092afd4936142172ee5fa8a104ac0d3d61d0a6a4a6ab3fcd5fbcf3e87741f565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092afd4936142172ee5fa8a104ac0d3d61d0a6a4a6ab3fcd5fbcf3e87741f565->enter($__internal_092afd4936142172ee5fa8a104ac0d3d61d0a6a4a6ab3fcd5fbcf3e87741f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_498c8531e6d53b12b51bf81a3228f16a080715750295d19f35d41db6d4d9740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498c8531e6d53b12b51bf81a3228f16a080715750295d19f35d41db6d4d9740b->enter($__internal_498c8531e6d53b12b51bf81a3228f16a080715750295d19f35d41db6d4d9740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_498c8531e6d53b12b51bf81a3228f16a080715750295d19f35d41db6d4d9740b->leave($__internal_498c8531e6d53b12b51bf81a3228f16a080715750295d19f35d41db6d4d9740b_prof);

        
        $__internal_092afd4936142172ee5fa8a104ac0d3d61d0a6a4a6ab3fcd5fbcf3e87741f565->leave($__internal_092afd4936142172ee5fa8a104ac0d3d61d0a6a4a6ab3fcd5fbcf3e87741f565_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_289cd83bb1d14ab16b7f6a69b661d9ee17b64219eb551ac7908036d80d6653de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289cd83bb1d14ab16b7f6a69b661d9ee17b64219eb551ac7908036d80d6653de->enter($__internal_289cd83bb1d14ab16b7f6a69b661d9ee17b64219eb551ac7908036d80d6653de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_809399ccb6256380d6275573dece844c8435e042135b5490f50ca7e74c0faae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809399ccb6256380d6275573dece844c8435e042135b5490f50ca7e74c0faae0->enter($__internal_809399ccb6256380d6275573dece844c8435e042135b5490f50ca7e74c0faae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_809399ccb6256380d6275573dece844c8435e042135b5490f50ca7e74c0faae0->leave($__internal_809399ccb6256380d6275573dece844c8435e042135b5490f50ca7e74c0faae0_prof);

        
        $__internal_289cd83bb1d14ab16b7f6a69b661d9ee17b64219eb551ac7908036d80d6653de->leave($__internal_289cd83bb1d14ab16b7f6a69b661d9ee17b64219eb551ac7908036d80d6653de_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9e2466b3b59f94e46dc6a44cbdcaadae597790f9f203c17e5a9054a4368f0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e2466b3b59f94e46dc6a44cbdcaadae597790f9f203c17e5a9054a4368f0ef->enter($__internal_b9e2466b3b59f94e46dc6a44cbdcaadae597790f9f203c17e5a9054a4368f0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a10b43c9e6112dc7dc8360683c004b7f34c8087e8c002414332419f8131c047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a10b43c9e6112dc7dc8360683c004b7f34c8087e8c002414332419f8131c047->enter($__internal_2a10b43c9e6112dc7dc8360683c004b7f34c8087e8c002414332419f8131c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_2a10b43c9e6112dc7dc8360683c004b7f34c8087e8c002414332419f8131c047->leave($__internal_2a10b43c9e6112dc7dc8360683c004b7f34c8087e8c002414332419f8131c047_prof);

        
        $__internal_b9e2466b3b59f94e46dc6a44cbdcaadae597790f9f203c17e5a9054a4368f0ef->leave($__internal_b9e2466b3b59f94e46dc6a44cbdcaadae597790f9f203c17e5a9054a4368f0ef_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8db08b843da2353528f8c3cc43445eae554237f980616fe139b778e4bed2aadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db08b843da2353528f8c3cc43445eae554237f980616fe139b778e4bed2aadf->enter($__internal_8db08b843da2353528f8c3cc43445eae554237f980616fe139b778e4bed2aadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d6756b7b3a8074fe2fd97744c23feaee275e833dcdcc640478c5dd1b31c1877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6756b7b3a8074fe2fd97744c23feaee275e833dcdcc640478c5dd1b31c1877->enter($__internal_2d6756b7b3a8074fe2fd97744c23feaee275e833dcdcc640478c5dd1b31c1877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter(($context["commands"] ?? $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, ($context["environment"] ?? $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_2d6756b7b3a8074fe2fd97744c23feaee275e833dcdcc640478c5dd1b31c1877->leave($__internal_2d6756b7b3a8074fe2fd97744c23feaee275e833dcdcc640478c5dd1b31c1877_prof);

        
        $__internal_8db08b843da2353528f8c3cc43445eae554237f980616fe139b778e4bed2aadf->leave($__internal_8db08b843da2353528f8c3cc43445eae554237f980616fe139b778e4bed2aadf_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "@CoreSphereConsole/Console/console.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\console.html.twig");
    }
}
