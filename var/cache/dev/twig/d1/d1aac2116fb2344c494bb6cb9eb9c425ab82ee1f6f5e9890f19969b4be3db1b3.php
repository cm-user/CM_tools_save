<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f40d96f0ca16c64e0984c5fd0cebecacd4886ec3d60c5fb1595e9cf6f9b00bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_524d49e8a66fb155f6af3419c12aa8f0146117c1d2b74a2c9dae8556d442fa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524d49e8a66fb155f6af3419c12aa8f0146117c1d2b74a2c9dae8556d442fa43->enter($__internal_524d49e8a66fb155f6af3419c12aa8f0146117c1d2b74a2c9dae8556d442fa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_101ec8c72a9de0f157df9148de987d483e3ee32dac9553aec3c272f47b7eab59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101ec8c72a9de0f157df9148de987d483e3ee32dac9553aec3c272f47b7eab59->enter($__internal_101ec8c72a9de0f157df9148de987d483e3ee32dac9553aec3c272f47b7eab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524d49e8a66fb155f6af3419c12aa8f0146117c1d2b74a2c9dae8556d442fa43->leave($__internal_524d49e8a66fb155f6af3419c12aa8f0146117c1d2b74a2c9dae8556d442fa43_prof);

        
        $__internal_101ec8c72a9de0f157df9148de987d483e3ee32dac9553aec3c272f47b7eab59->leave($__internal_101ec8c72a9de0f157df9148de987d483e3ee32dac9553aec3c272f47b7eab59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc4e15e6c3d58bb9543f616d58ecf01e4e6d3e6fff3b884dc7308ebadb7e13b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4e15e6c3d58bb9543f616d58ecf01e4e6d3e6fff3b884dc7308ebadb7e13b4->enter($__internal_fc4e15e6c3d58bb9543f616d58ecf01e4e6d3e6fff3b884dc7308ebadb7e13b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed45667863607e5f7c6a6ff038de68ffbd0e9b3410a0f67d155032fe37a65b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed45667863607e5f7c6a6ff038de68ffbd0e9b3410a0f67d155032fe37a65b1e->enter($__internal_ed45667863607e5f7c6a6ff038de68ffbd0e9b3410a0f67d155032fe37a65b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ed45667863607e5f7c6a6ff038de68ffbd0e9b3410a0f67d155032fe37a65b1e->leave($__internal_ed45667863607e5f7c6a6ff038de68ffbd0e9b3410a0f67d155032fe37a65b1e_prof);

        
        $__internal_fc4e15e6c3d58bb9543f616d58ecf01e4e6d3e6fff3b884dc7308ebadb7e13b4->leave($__internal_fc4e15e6c3d58bb9543f616d58ecf01e4e6d3e6fff3b884dc7308ebadb7e13b4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_905dbe9684c8aeac54dc0666c1be1c1312a340d52e07f6be4f97301ab5d3e937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905dbe9684c8aeac54dc0666c1be1c1312a340d52e07f6be4f97301ab5d3e937->enter($__internal_905dbe9684c8aeac54dc0666c1be1c1312a340d52e07f6be4f97301ab5d3e937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c9270ed56b29a68652b6c6bd027495f64477f46c35e05383e2db2f5ede63aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9270ed56b29a68652b6c6bd027495f64477f46c35e05383e2db2f5ede63aa6->enter($__internal_1c9270ed56b29a68652b6c6bd027495f64477f46c35e05383e2db2f5ede63aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c9270ed56b29a68652b6c6bd027495f64477f46c35e05383e2db2f5ede63aa6->leave($__internal_1c9270ed56b29a68652b6c6bd027495f64477f46c35e05383e2db2f5ede63aa6_prof);

        
        $__internal_905dbe9684c8aeac54dc0666c1be1c1312a340d52e07f6be4f97301ab5d3e937->leave($__internal_905dbe9684c8aeac54dc0666c1be1c1312a340d52e07f6be4f97301ab5d3e937_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e82852770b0107f88c4b71e0356d98d05f943b39ca15ff54b0667bdde29f75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e82852770b0107f88c4b71e0356d98d05f943b39ca15ff54b0667bdde29f75d->enter($__internal_4e82852770b0107f88c4b71e0356d98d05f943b39ca15ff54b0667bdde29f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_248aece35883442691275315e4b6baf5bfa60d7d77ad275e7a5861d399979c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248aece35883442691275315e4b6baf5bfa60d7d77ad275e7a5861d399979c42->enter($__internal_248aece35883442691275315e4b6baf5bfa60d7d77ad275e7a5861d399979c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_248aece35883442691275315e4b6baf5bfa60d7d77ad275e7a5861d399979c42->leave($__internal_248aece35883442691275315e4b6baf5bfa60d7d77ad275e7a5861d399979c42_prof);

        
        $__internal_4e82852770b0107f88c4b71e0356d98d05f943b39ca15ff54b0667bdde29f75d->leave($__internal_4e82852770b0107f88c4b71e0356d98d05f943b39ca15ff54b0667bdde29f75d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
