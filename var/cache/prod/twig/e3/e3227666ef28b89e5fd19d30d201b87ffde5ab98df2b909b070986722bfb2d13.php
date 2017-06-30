<?php

/* base.html.twig */
class __TwigTemplate_ae1a4d27749c3b5be57159efec31bf39480f069474d6d2e7ee23c892f55eb059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex\">
    <meta name=\"googlebot\" content=\"noindex\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t<!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 23
        if (($context["ga_tracking"] ?? null)) {
            // line 24
            echo "        ";
            $this->loadTemplate("analytics.html.twig", "base.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (($context["tag_manager"] ?? null)) {
            // line 28
            echo "        ";
            $this->loadTemplate("tagmanager.html.twig", "base.html.twig", 28)->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "</head>
<body>
<div class=\"container\">
    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            ";
        // line 36
        echo "            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#admin-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">CM Marketing</a>
            </div>

            ";
        // line 47
        echo "            <div class=\"collapse navbar-collapse\" id=\"admin-navbar-collapse-1\">
                ";
        // line 48
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("UserBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "UserBundle:Menu:knp_menu.html.twig"));
        echo "
                ";
        // line 49
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("UserBundle:Builder:userMenu", array("currentClass" => "active", "template" => "UserBundle:Menu:knp_menu.html.twig"));
        echo "
            </div>
        </div>
    </div>

    <div class=\"content\" style=\"margin-top: 60px;\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "    </div>
</div>

<script type=\"application/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        echo "My first description";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  155 => 55,  150 => 15,  144 => 11,  138 => 10,  133 => 61,  131 => 60,  127 => 59,  122 => 56,  120 => 55,  111 => 49,  107 => 48,  104 => 47,  98 => 43,  89 => 36,  82 => 30,  79 => 29,  76 => 28,  74 => 27,  71 => 26,  68 => 25,  65 => 24,  63 => 23,  54 => 16,  52 => 15,  48 => 14,  44 => 13,  39 => 11,  35 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app\\Resources\\views\\base.html.twig");
    }
}
