<?php

/* PictureCrawlerBundle:Search:search.html.twig */
class __TwigTemplate_0c2231c5492d0e74b4299019b43b6b3b8dcaff6ea979e39d812389b5dac5e10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PictureCrawlerBundle:Search:search.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6246cc123818700dd996eb226894033dd746b4ad1919ed482a7df2667861b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6246cc123818700dd996eb226894033dd746b4ad1919ed482a7df2667861b7->enter($__internal_9d6246cc123818700dd996eb226894033dd746b4ad1919ed482a7df2667861b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PictureCrawlerBundle:Search:search.html.twig"));

        $__internal_1c7b63b30d296781243e7511c6863e66cc30b16c78431044e912f727fabef4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7b63b30d296781243e7511c6863e66cc30b16c78431044e912f727fabef4d8->enter($__internal_1c7b63b30d296781243e7511c6863e66cc30b16c78431044e912f727fabef4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PictureCrawlerBundle:Search:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6246cc123818700dd996eb226894033dd746b4ad1919ed482a7df2667861b7->leave($__internal_9d6246cc123818700dd996eb226894033dd746b4ad1919ed482a7df2667861b7_prof);

        
        $__internal_1c7b63b30d296781243e7511c6863e66cc30b16c78431044e912f727fabef4d8->leave($__internal_1c7b63b30d296781243e7511c6863e66cc30b16c78431044e912f727fabef4d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16bfcd6fec1ed2c57abb7e9106fdcad5bb64dcb5f391e138f4ea8d4607edc873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bfcd6fec1ed2c57abb7e9106fdcad5bb64dcb5f391e138f4ea8d4607edc873->enter($__internal_16bfcd6fec1ed2c57abb7e9106fdcad5bb64dcb5f391e138f4ea8d4607edc873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3bff47e82db180ad8a4808ea075df5d0d84223818f611eb1a45c1bc228f5f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bff47e82db180ad8a4808ea075df5d0d84223818f611eb1a45c1bc228f5f43->enter($__internal_e3bff47e82db180ad8a4808ea075df5d0d84223818f611eb1a45c1bc228f5f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Téléchargement des images</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

    <div id=\"result\">
        <div id=\"alert\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\"></div>
        <div id=\"url\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
    </div>

";
        
        $__internal_e3bff47e82db180ad8a4808ea075df5d0d84223818f611eb1a45c1bc228f5f43->leave($__internal_e3bff47e82db180ad8a4808ea075df5d0d84223818f611eb1a45c1bc228f5f43_prof);

        
        $__internal_16bfcd6fec1ed2c57abb7e9106fdcad5bb64dcb5f391e138f4ea8d4607edc873->leave($__internal_16bfcd6fec1ed2c57abb7e9106fdcad5bb64dcb5f391e138f4ea8d4607edc873_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c224554b245af30a202364f26bf3f8bf33f8267f97fd4eebc37cfcfc9bf85654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c224554b245af30a202364f26bf3f8bf33f8267f97fd4eebc37cfcfc9bf85654->enter($__internal_c224554b245af30a202364f26bf3f8bf33f8267f97fd4eebc37cfcfc9bf85654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a463318aa8e7a5b6c26eb3f45d06ae095b4cc7682a9d3e2df18894babbedcf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a463318aa8e7a5b6c26eb3f45d06ae095b4cc7682a9d3e2df18894babbedcf76->enter($__internal_a463318aa8e7a5b6c26eb3f45d06ae095b4cc7682a9d3e2df18894babbedcf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script type=\"application/javascript\">
        \$(document).ready(function () {

            \$('#search_url button').on('click', function (e) {
                \$(\"#alert\").empty().hide();
                \$(\"#url\").empty().hide();
                e.preventDefault();
                var searchUrl = \$('#search_url input').val();
                \$.post({
                    url: '";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("picture_crawler_ajax");
        echo "',
                    data: {
                        url: searchUrl
                    },
                    dataType : 'json'
                }, function (data) {
                    if (typeof data.error != \"undefined\") {
                        \$(\"#alert\").html(\"<p>\"+data.error+\"</p>\").show();
                    }else if (typeof data.data != \"undefined\") {
                        var links = '';
                        \$(data.data).each(function(index, value){
                            links += toUrl(value);
                        });
                        \$(\"#url\").html(links).show();
                    }
                });
            });
        });

        function toUrl(a){
            return '<p><a href=\"'+a+'\" target=\"_blank\">'+a+'</a></p>';
        }
    </script>
";
        
        $__internal_a463318aa8e7a5b6c26eb3f45d06ae095b4cc7682a9d3e2df18894babbedcf76->leave($__internal_a463318aa8e7a5b6c26eb3f45d06ae095b4cc7682a9d3e2df18894babbedcf76_prof);

        
        $__internal_c224554b245af30a202364f26bf3f8bf33f8267f97fd4eebc37cfcfc9bf85654->leave($__internal_c224554b245af30a202364f26bf3f8bf33f8267f97fd4eebc37cfcfc9bf85654_prof);

    }

    public function getTemplateName()
    {
        return "PictureCrawlerBundle:Search:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  81 => 17,  72 => 16,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Téléchargement des images</h1>

    {{ form(form) }}

    <div id=\"result\">
        <div id=\"alert\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\"></div>
        <div id=\"url\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
    </div>

{% endblock %}


{%  block javascripts %}
    <script type=\"application/javascript\">
        \$(document).ready(function () {

            \$('#search_url button').on('click', function (e) {
                \$(\"#alert\").empty().hide();
                \$(\"#url\").empty().hide();
                e.preventDefault();
                var searchUrl = \$('#search_url input').val();
                \$.post({
                    url: '{{ path(\"picture_crawler_ajax\") }}',
                    data: {
                        url: searchUrl
                    },
                    dataType : 'json'
                }, function (data) {
                    if (typeof data.error != \"undefined\") {
                        \$(\"#alert\").html(\"<p>\"+data.error+\"</p>\").show();
                    }else if (typeof data.data != \"undefined\") {
                        var links = '';
                        \$(data.data).each(function(index, value){
                            links += toUrl(value);
                        });
                        \$(\"#url\").html(links).show();
                    }
                });
            });
        });

        function toUrl(a){
            return '<p><a href=\"'+a+'\" target=\"_blank\">'+a+'</a></p>';
        }
    </script>
{% endblock %}", "PictureCrawlerBundle:Search:search.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\PictureCrawlerBundle/Resources/views/Search/search.html.twig");
    }
}
