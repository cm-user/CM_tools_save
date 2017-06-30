<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_a11f57906433b0d0765a260558554679caf16c9c816656a87bb21da71103c825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
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
        $__internal_b5926b2c1b2a827d355108ba5c35475d0ce00a3ce0c6dcc98fcaab2c7d4dd1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5926b2c1b2a827d355108ba5c35475d0ce00a3ce0c6dcc98fcaab2c7d4dd1d5->enter($__internal_b5926b2c1b2a827d355108ba5c35475d0ce00a3ce0c6dcc98fcaab2c7d4dd1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_ef234846e0b4124c40669b0e222c292a9406c06f230c5d104d438bc6941ae3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef234846e0b4124c40669b0e222c292a9406c06f230c5d104d438bc6941ae3bc->enter($__internal_ef234846e0b4124c40669b0e222c292a9406c06f230c5d104d438bc6941ae3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5926b2c1b2a827d355108ba5c35475d0ce00a3ce0c6dcc98fcaab2c7d4dd1d5->leave($__internal_b5926b2c1b2a827d355108ba5c35475d0ce00a3ce0c6dcc98fcaab2c7d4dd1d5_prof);

        
        $__internal_ef234846e0b4124c40669b0e222c292a9406c06f230c5d104d438bc6941ae3bc->leave($__internal_ef234846e0b4124c40669b0e222c292a9406c06f230c5d104d438bc6941ae3bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bea10da3a1628f468c6c6c230e8ad9c4eac5ac3e9a2208f44dd9fc9167e6ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bea10da3a1628f468c6c6c230e8ad9c4eac5ac3e9a2208f44dd9fc9167e6ed3->enter($__internal_6bea10da3a1628f468c6c6c230e8ad9c4eac5ac3e9a2208f44dd9fc9167e6ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80c3c2abe7db056ac522e2dbb8b137c93b434da847abaaa59b3949f31bab6867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c3c2abe7db056ac522e2dbb8b137c93b434da847abaaa59b3949f31bab6867->enter($__internal_80c3c2abe7db056ac522e2dbb8b137c93b434da847abaaa59b3949f31bab6867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_80c3c2abe7db056ac522e2dbb8b137c93b434da847abaaa59b3949f31bab6867->leave($__internal_80c3c2abe7db056ac522e2dbb8b137c93b434da847abaaa59b3949f31bab6867_prof);

        
        $__internal_6bea10da3a1628f468c6c6c230e8ad9c4eac5ac3e9a2208f44dd9fc9167e6ed3->leave($__internal_6bea10da3a1628f468c6c6c230e8ad9c4eac5ac3e9a2208f44dd9fc9167e6ed3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f668158a00f13f445020015fd09b5f8a413098a5870b20dd92c6bc722f3ac08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f668158a00f13f445020015fd09b5f8a413098a5870b20dd92c6bc722f3ac08e->enter($__internal_f668158a00f13f445020015fd09b5f8a413098a5870b20dd92c6bc722f3ac08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70add62122f9959d2cbbcc7646eaaee69d387eb22d6c908cb8cd9645d6542ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70add62122f9959d2cbbcc7646eaaee69d387eb22d6c908cb8cd9645d6542ed8->enter($__internal_70add62122f9959d2cbbcc7646eaaee69d387eb22d6c908cb8cd9645d6542ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_70add62122f9959d2cbbcc7646eaaee69d387eb22d6c908cb8cd9645d6542ed8->leave($__internal_70add62122f9959d2cbbcc7646eaaee69d387eb22d6c908cb8cd9645d6542ed8_prof);

        
        $__internal_f668158a00f13f445020015fd09b5f8a413098a5870b20dd92c6bc722f3ac08e->leave($__internal_f668158a00f13f445020015fd09b5f8a413098a5870b20dd92c6bc722f3ac08e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7adcc048c1e560890aeeb0b626b78ac94db9e6476585aea32698f557fe587cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7adcc048c1e560890aeeb0b626b78ac94db9e6476585aea32698f557fe587cba->enter($__internal_7adcc048c1e560890aeeb0b626b78ac94db9e6476585aea32698f557fe587cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_048eaccf5f0cc75ade145f373f4ecf2866970da65db4ea798d4d5eb19fc301d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048eaccf5f0cc75ade145f373f4ecf2866970da65db4ea798d4d5eb19fc301d8->enter($__internal_048eaccf5f0cc75ade145f373f4ecf2866970da65db4ea798d4d5eb19fc301d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_048eaccf5f0cc75ade145f373f4ecf2866970da65db4ea798d4d5eb19fc301d8->leave($__internal_048eaccf5f0cc75ade145f373f4ecf2866970da65db4ea798d4d5eb19fc301d8_prof);

        
        $__internal_7adcc048c1e560890aeeb0b626b78ac94db9e6476585aea32698f557fe587cba->leave($__internal_7adcc048c1e560890aeeb0b626b78ac94db9e6476585aea32698f557fe587cba_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_403b0325a1486dd2ad488516b25111d876232d5a0d07fdf421b17daa61e429e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403b0325a1486dd2ad488516b25111d876232d5a0d07fdf421b17daa61e429e9->enter($__internal_403b0325a1486dd2ad488516b25111d876232d5a0d07fdf421b17daa61e429e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21d31a10fef2124745a72779b26c45c605844e5fd29018e1cdc31023856bf5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d31a10fef2124745a72779b26c45c605844e5fd29018e1cdc31023856bf5cb->enter($__internal_21d31a10fef2124745a72779b26c45c605844e5fd29018e1cdc31023856bf5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_21d31a10fef2124745a72779b26c45c605844e5fd29018e1cdc31023856bf5cb->leave($__internal_21d31a10fef2124745a72779b26c45c605844e5fd29018e1cdc31023856bf5cb_prof);

        
        $__internal_403b0325a1486dd2ad488516b25111d876232d5a0d07fdf421b17daa61e429e9->leave($__internal_403b0325a1486dd2ad488516b25111d876232d5a0d07fdf421b17daa61e429e9_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
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
", "CoreSphereConsoleBundle:Console:console.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle/Resources/views/Console/console.html.twig");
    }
}
