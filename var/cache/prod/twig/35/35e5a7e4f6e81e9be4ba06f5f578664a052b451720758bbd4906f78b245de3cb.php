<?php

/* @PictureCrawler/Search/search.html.twig */
class __TwigTemplate_fd84f85099f0a86fcf51656dd29dcd5b39dae5150f207700f86893e4a245fea7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Téléchargement des images</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

    <div id=\"result\">
        <div id=\"alert\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\"></div>
        <div id=\"url\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
    </div>

";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  62 => 26,  51 => 17,  48 => 16,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PictureCrawler/Search/search.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\PictureCrawlerBundle\\Resources\\views\\Search\\search.html.twig");
    }
}
