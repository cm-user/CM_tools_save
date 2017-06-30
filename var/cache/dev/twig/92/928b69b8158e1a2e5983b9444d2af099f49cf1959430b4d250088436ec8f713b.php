<?php

/* ::base.html.twig */
class __TwigTemplate_cfc3cb9fdc9f24ee9c1ff608abecbecfae10f6db3718fab3ac0c64de993cdd88 extends Twig_Template
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
        $__internal_4b370403773d91b1311d391df4172c591ee59b7a789d859bb5a6878c40c2569e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b370403773d91b1311d391df4172c591ee59b7a789d859bb5a6878c40c2569e->enter($__internal_4b370403773d91b1311d391df4172c591ee59b7a789d859bb5a6878c40c2569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e8b7b355d05d510657c8e01339f91d409c58c471c890dc2903659522602acd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b7b355d05d510657c8e01339f91d409c58c471c890dc2903659522602acd68->enter($__internal_e8b7b355d05d510657c8e01339f91d409c58c471c890dc2903659522602acd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        if (($context["ga_tracking"] ?? $this->getContext($context, "ga_tracking"))) {
            // line 24
            echo "        ";
            $this->loadTemplate("analytics.html.twig", "::base.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (($context["tag_manager"] ?? $this->getContext($context, "tag_manager"))) {
            // line 28
            echo "        ";
            $this->loadTemplate("tagmanager.html.twig", "::base.html.twig", 28)->display($context);
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
        
        $__internal_4b370403773d91b1311d391df4172c591ee59b7a789d859bb5a6878c40c2569e->leave($__internal_4b370403773d91b1311d391df4172c591ee59b7a789d859bb5a6878c40c2569e_prof);

        
        $__internal_e8b7b355d05d510657c8e01339f91d409c58c471c890dc2903659522602acd68->leave($__internal_e8b7b355d05d510657c8e01339f91d409c58c471c890dc2903659522602acd68_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4b7c3b6ea7cb3dc8a5a6eb3eb8ae10b545d913978515ebf6745fbeed5ff5eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b7c3b6ea7cb3dc8a5a6eb3eb8ae10b545d913978515ebf6745fbeed5ff5eaf->enter($__internal_d4b7c3b6ea7cb3dc8a5a6eb3eb8ae10b545d913978515ebf6745fbeed5ff5eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a553cea68908709d4ea6aab0397b45557ff127bc5549476f38d5008e2140889e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a553cea68908709d4ea6aab0397b45557ff127bc5549476f38d5008e2140889e->enter($__internal_a553cea68908709d4ea6aab0397b45557ff127bc5549476f38d5008e2140889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a553cea68908709d4ea6aab0397b45557ff127bc5549476f38d5008e2140889e->leave($__internal_a553cea68908709d4ea6aab0397b45557ff127bc5549476f38d5008e2140889e_prof);

        
        $__internal_d4b7c3b6ea7cb3dc8a5a6eb3eb8ae10b545d913978515ebf6745fbeed5ff5eaf->leave($__internal_d4b7c3b6ea7cb3dc8a5a6eb3eb8ae10b545d913978515ebf6745fbeed5ff5eaf_prof);

    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        $__internal_b9bf3f2cbd4c7e7256137884c20a1aa5e9111864e43963f41a00c89c5572e47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bf3f2cbd4c7e7256137884c20a1aa5e9111864e43963f41a00c89c5572e47e->enter($__internal_b9bf3f2cbd4c7e7256137884c20a1aa5e9111864e43963f41a00c89c5572e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_a4e66ec5a28becf4a2648b10a8b5e23662560ccc8720818980001c945d1a4842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e66ec5a28becf4a2648b10a8b5e23662560ccc8720818980001c945d1a4842->enter($__internal_a4e66ec5a28becf4a2648b10a8b5e23662560ccc8720818980001c945d1a4842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "My first description";
        
        $__internal_a4e66ec5a28becf4a2648b10a8b5e23662560ccc8720818980001c945d1a4842->leave($__internal_a4e66ec5a28becf4a2648b10a8b5e23662560ccc8720818980001c945d1a4842_prof);

        
        $__internal_b9bf3f2cbd4c7e7256137884c20a1aa5e9111864e43963f41a00c89c5572e47e->leave($__internal_b9bf3f2cbd4c7e7256137884c20a1aa5e9111864e43963f41a00c89c5572e47e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91c24f73cfdda235df1c51d2d2d6494299d2c4bfd33f60c2e94a0e3c5462736b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c24f73cfdda235df1c51d2d2d6494299d2c4bfd33f60c2e94a0e3c5462736b->enter($__internal_91c24f73cfdda235df1c51d2d2d6494299d2c4bfd33f60c2e94a0e3c5462736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1263e4fff7d0a8d5cb2c97e2858f3b846f1a86ab57ec0a2cf0dbbd3ea63287ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1263e4fff7d0a8d5cb2c97e2858f3b846f1a86ab57ec0a2cf0dbbd3ea63287ac->enter($__internal_1263e4fff7d0a8d5cb2c97e2858f3b846f1a86ab57ec0a2cf0dbbd3ea63287ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1263e4fff7d0a8d5cb2c97e2858f3b846f1a86ab57ec0a2cf0dbbd3ea63287ac->leave($__internal_1263e4fff7d0a8d5cb2c97e2858f3b846f1a86ab57ec0a2cf0dbbd3ea63287ac_prof);

        
        $__internal_91c24f73cfdda235df1c51d2d2d6494299d2c4bfd33f60c2e94a0e3c5462736b->leave($__internal_91c24f73cfdda235df1c51d2d2d6494299d2c4bfd33f60c2e94a0e3c5462736b_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c919862715f96fc29d98fc051e4ac7cd434d7eefc9f9096dac362a15231050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c919862715f96fc29d98fc051e4ac7cd434d7eefc9f9096dac362a15231050->enter($__internal_73c919862715f96fc29d98fc051e4ac7cd434d7eefc9f9096dac362a15231050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_067feb803c2a670f3b9beaef0fd3d156bdf25153597b2c3fc642d23f8c683375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067feb803c2a670f3b9beaef0fd3d156bdf25153597b2c3fc642d23f8c683375->enter($__internal_067feb803c2a670f3b9beaef0fd3d156bdf25153597b2c3fc642d23f8c683375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_067feb803c2a670f3b9beaef0fd3d156bdf25153597b2c3fc642d23f8c683375->leave($__internal_067feb803c2a670f3b9beaef0fd3d156bdf25153597b2c3fc642d23f8c683375_prof);

        
        $__internal_73c919862715f96fc29d98fc051e4ac7cd434d7eefc9f9096dac362a15231050->leave($__internal_73c919862715f96fc29d98fc051e4ac7cd434d7eefc9f9096dac362a15231050_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c676c951ce5e82879b34a45580a3e2c74833d5ce48a40554b6a5f88a4bb7e420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c676c951ce5e82879b34a45580a3e2c74833d5ce48a40554b6a5f88a4bb7e420->enter($__internal_c676c951ce5e82879b34a45580a3e2c74833d5ce48a40554b6a5f88a4bb7e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94edcba9fc312201902f58b467f78b2d83926bc1606698d675daa70b951b9fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94edcba9fc312201902f58b467f78b2d83926bc1606698d675daa70b951b9fee->enter($__internal_94edcba9fc312201902f58b467f78b2d83926bc1606698d675daa70b951b9fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94edcba9fc312201902f58b467f78b2d83926bc1606698d675daa70b951b9fee->leave($__internal_94edcba9fc312201902f58b467f78b2d83926bc1606698d675daa70b951b9fee_prof);

        
        $__internal_c676c951ce5e82879b34a45580a3e2c74833d5ce48a40554b6a5f88a4bb7e420->leave($__internal_c676c951ce5e82879b34a45580a3e2c74833d5ce48a40554b6a5f88a4bb7e420_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 60,  203 => 55,  186 => 15,  168 => 11,  150 => 10,  139 => 61,  137 => 60,  133 => 59,  128 => 56,  126 => 55,  117 => 49,  113 => 48,  110 => 47,  104 => 43,  95 => 36,  88 => 30,  85 => 29,  82 => 28,  80 => 27,  77 => 26,  74 => 25,  71 => 24,  69 => 23,  60 => 16,  58 => 15,  54 => 14,  50 => 13,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex\">
    <meta name=\"googlebot\" content=\"noindex\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>{% block title %}Welcome!{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}My first description{% endblock %}\">
\t<!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/user/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/user/css/bootstrap-theme.min.css') }}\" />
    {% block stylesheets %}{% endblock %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    {% if ga_tracking %}
        {% include 'analytics.html.twig' %}
    {% endif %}

    {% if tag_manager %}
        {% include 'tagmanager.html.twig' %}
    {% endif %}
</head>
<body>
<div class=\"container\">
    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            {# Brand and toggle get grouped for better mobile display #}
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#admin-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">CM Marketing</a>
            </div>

            {# Collect the nav links, forms, and other content for toggling #}
            <div class=\"collapse navbar-collapse\" id=\"admin-navbar-collapse-1\">
                {{ knp_menu_render('UserBundle:Builder:mainMenu', {'currentClass': 'active', 'template': 'UserBundle:Menu:knp_menu.html.twig'}) }}
                {{ knp_menu_render('UserBundle:Builder:userMenu', {'currentClass': 'active', 'template': 'UserBundle:Menu:knp_menu.html.twig'}) }}
            </div>
        </div>
    </div>

    <div class=\"content\" style=\"margin-top: 60px;\">
        {% block body %}{% endblock %}
    </div>
</div>

<script type=\"application/javascript\" src=\"{{ asset('bundles/user/js/bootstrap.min.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app/Resources\\views/base.html.twig");
    }
}
