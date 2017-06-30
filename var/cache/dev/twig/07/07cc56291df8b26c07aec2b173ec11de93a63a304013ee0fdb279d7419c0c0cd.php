<?php

/* @PictureCrawler/Search/search.html.twig */
class __TwigTemplate_2df31d876b0feabbef6314d0b37c66e65285156c9370a856d548a171d29d91ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@PictureCrawler/Search/search.html.twig", 1);
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
        $__internal_6d106d8a5c67f95a6d42f1a5fee3e97bd7d75defa3b5d8f014feb9c633dd3f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d106d8a5c67f95a6d42f1a5fee3e97bd7d75defa3b5d8f014feb9c633dd3f7f->enter($__internal_6d106d8a5c67f95a6d42f1a5fee3e97bd7d75defa3b5d8f014feb9c633dd3f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PictureCrawler/Search/search.html.twig"));

        $__internal_bf13a27c15fb186001e907e41b9e568d2f813b8285ad0b3d9772bab44f2c19fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf13a27c15fb186001e907e41b9e568d2f813b8285ad0b3d9772bab44f2c19fe->enter($__internal_bf13a27c15fb186001e907e41b9e568d2f813b8285ad0b3d9772bab44f2c19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PictureCrawler/Search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d106d8a5c67f95a6d42f1a5fee3e97bd7d75defa3b5d8f014feb9c633dd3f7f->leave($__internal_6d106d8a5c67f95a6d42f1a5fee3e97bd7d75defa3b5d8f014feb9c633dd3f7f_prof);

        
        $__internal_bf13a27c15fb186001e907e41b9e568d2f813b8285ad0b3d9772bab44f2c19fe->leave($__internal_bf13a27c15fb186001e907e41b9e568d2f813b8285ad0b3d9772bab44f2c19fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00192d56c0b27afa2b952f1eb965e5ddb3847a8cd79702f8fb971a7a73ccec6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00192d56c0b27afa2b952f1eb965e5ddb3847a8cd79702f8fb971a7a73ccec6d->enter($__internal_00192d56c0b27afa2b952f1eb965e5ddb3847a8cd79702f8fb971a7a73ccec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b552b84ecc5b62447791889b0197570da919dc0d62895c4a1408a1e28daa5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b552b84ecc5b62447791889b0197570da919dc0d62895c4a1408a1e28daa5ba->enter($__internal_6b552b84ecc5b62447791889b0197570da919dc0d62895c4a1408a1e28daa5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b552b84ecc5b62447791889b0197570da919dc0d62895c4a1408a1e28daa5ba->leave($__internal_6b552b84ecc5b62447791889b0197570da919dc0d62895c4a1408a1e28daa5ba_prof);

        
        $__internal_00192d56c0b27afa2b952f1eb965e5ddb3847a8cd79702f8fb971a7a73ccec6d->leave($__internal_00192d56c0b27afa2b952f1eb965e5ddb3847a8cd79702f8fb971a7a73ccec6d_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_682f319adef607fdbc346c2d55afb7c6da913e04ad82eb707c145dc3f64595b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682f319adef607fdbc346c2d55afb7c6da913e04ad82eb707c145dc3f64595b3->enter($__internal_682f319adef607fdbc346c2d55afb7c6da913e04ad82eb707c145dc3f64595b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f8f8a750ba0e40d51bec04be50e787c0248548fa775f5ee1af946528d040efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8f8a750ba0e40d51bec04be50e787c0248548fa775f5ee1af946528d040efd->enter($__internal_1f8f8a750ba0e40d51bec04be50e787c0248548fa775f5ee1af946528d040efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1f8f8a750ba0e40d51bec04be50e787c0248548fa775f5ee1af946528d040efd->leave($__internal_1f8f8a750ba0e40d51bec04be50e787c0248548fa775f5ee1af946528d040efd_prof);

        
        $__internal_682f319adef607fdbc346c2d55afb7c6da913e04ad82eb707c145dc3f64595b3->leave($__internal_682f319adef607fdbc346c2d55afb7c6da913e04ad82eb707c145dc3f64595b3_prof);

    }

    public function getTemplateName()
    {
        return "@PictureCrawler/Search/search.html.twig";
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
{% endblock %}", "@PictureCrawler/Search/search.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\PictureCrawlerBundle\\Resources\\views\\Search\\search.html.twig");
    }
}
