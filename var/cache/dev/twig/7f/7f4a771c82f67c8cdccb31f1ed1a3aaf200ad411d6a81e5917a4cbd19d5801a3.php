<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fe8de53987843eb704da27d2c168797e72b4bfa07ea78ad3f741e888635c49ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_84944b7e7a48efbf97bb5b55f9002a0d2a70c2ea5d57b5eeddec26eadd1353d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84944b7e7a48efbf97bb5b55f9002a0d2a70c2ea5d57b5eeddec26eadd1353d4->enter($__internal_84944b7e7a48efbf97bb5b55f9002a0d2a70c2ea5d57b5eeddec26eadd1353d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e2275b665b92011070df3d61a95225836482b866bff404c1c7c47299dcb5ac14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2275b665b92011070df3d61a95225836482b866bff404c1c7c47299dcb5ac14->enter($__internal_e2275b665b92011070df3d61a95225836482b866bff404c1c7c47299dcb5ac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84944b7e7a48efbf97bb5b55f9002a0d2a70c2ea5d57b5eeddec26eadd1353d4->leave($__internal_84944b7e7a48efbf97bb5b55f9002a0d2a70c2ea5d57b5eeddec26eadd1353d4_prof);

        
        $__internal_e2275b665b92011070df3d61a95225836482b866bff404c1c7c47299dcb5ac14->leave($__internal_e2275b665b92011070df3d61a95225836482b866bff404c1c7c47299dcb5ac14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79a9d60c517c6f42ca7ffc0a06bf86a903a9d422f4053c182e95ad4e2af6ca04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a9d60c517c6f42ca7ffc0a06bf86a903a9d422f4053c182e95ad4e2af6ca04->enter($__internal_79a9d60c517c6f42ca7ffc0a06bf86a903a9d422f4053c182e95ad4e2af6ca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eca0289d13de852223676dcb3e6087a60dc7d582ed79d97c5990e845c7fe00cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca0289d13de852223676dcb3e6087a60dc7d582ed79d97c5990e845c7fe00cd->enter($__internal_eca0289d13de852223676dcb3e6087a60dc7d582ed79d97c5990e845c7fe00cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eca0289d13de852223676dcb3e6087a60dc7d582ed79d97c5990e845c7fe00cd->leave($__internal_eca0289d13de852223676dcb3e6087a60dc7d582ed79d97c5990e845c7fe00cd_prof);

        
        $__internal_79a9d60c517c6f42ca7ffc0a06bf86a903a9d422f4053c182e95ad4e2af6ca04->leave($__internal_79a9d60c517c6f42ca7ffc0a06bf86a903a9d422f4053c182e95ad4e2af6ca04_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2231134d7194270700b7e76d777c79ada6cb5545a37c05add68b1fd8f2c94af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2231134d7194270700b7e76d777c79ada6cb5545a37c05add68b1fd8f2c94af->enter($__internal_a2231134d7194270700b7e76d777c79ada6cb5545a37c05add68b1fd8f2c94af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c60cac3f3ac1cef0de85982a5bdc34bb69ac79920783a1c7e7de291c2ad333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c60cac3f3ac1cef0de85982a5bdc34bb69ac79920783a1c7e7de291c2ad333e->enter($__internal_4c60cac3f3ac1cef0de85982a5bdc34bb69ac79920783a1c7e7de291c2ad333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c60cac3f3ac1cef0de85982a5bdc34bb69ac79920783a1c7e7de291c2ad333e->leave($__internal_4c60cac3f3ac1cef0de85982a5bdc34bb69ac79920783a1c7e7de291c2ad333e_prof);

        
        $__internal_a2231134d7194270700b7e76d777c79ada6cb5545a37c05add68b1fd8f2c94af->leave($__internal_a2231134d7194270700b7e76d777c79ada6cb5545a37c05add68b1fd8f2c94af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6754fbfd8ea2e0d9e785f5373035a2829022c125ba67bf5f6a47fcfe29c190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6754fbfd8ea2e0d9e785f5373035a2829022c125ba67bf5f6a47fcfe29c190->enter($__internal_2a6754fbfd8ea2e0d9e785f5373035a2829022c125ba67bf5f6a47fcfe29c190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db39f0b6e5941d1cbf2d8f00c231f12b30a852bd80da46eb0ee136f056257126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db39f0b6e5941d1cbf2d8f00c231f12b30a852bd80da46eb0ee136f056257126->enter($__internal_db39f0b6e5941d1cbf2d8f00c231f12b30a852bd80da46eb0ee136f056257126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_db39f0b6e5941d1cbf2d8f00c231f12b30a852bd80da46eb0ee136f056257126->leave($__internal_db39f0b6e5941d1cbf2d8f00c231f12b30a852bd80da46eb0ee136f056257126_prof);

        
        $__internal_2a6754fbfd8ea2e0d9e785f5373035a2829022c125ba67bf5f6a47fcfe29c190->leave($__internal_2a6754fbfd8ea2e0d9e785f5373035a2829022c125ba67bf5f6a47fcfe29c190_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
