<?php

/* base.html.twig */
class __TwigTemplate_2657ade2dbc8288ff6ceaf1b7c063a781a1ce1167c7732d7f0d081249b6efad1 extends Twig_Template
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
        $__internal_e92ce52a1ee00f34edc597760652c1686ca1230fabe18eaf5f6463adc1e126a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92ce52a1ee00f34edc597760652c1686ca1230fabe18eaf5f6463adc1e126a7->enter($__internal_e92ce52a1ee00f34edc597760652c1686ca1230fabe18eaf5f6463adc1e126a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_785345cd1c7ebd873c130736c2d4e5403bbd051880b67bc7cd8667a8f2e12e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785345cd1c7ebd873c130736c2d4e5403bbd051880b67bc7cd8667a8f2e12e7c->enter($__internal_785345cd1c7ebd873c130736c2d4e5403bbd051880b67bc7cd8667a8f2e12e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            $this->loadTemplate("analytics.html.twig", "base.html.twig", 24)->display($context);
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
        
        $__internal_e92ce52a1ee00f34edc597760652c1686ca1230fabe18eaf5f6463adc1e126a7->leave($__internal_e92ce52a1ee00f34edc597760652c1686ca1230fabe18eaf5f6463adc1e126a7_prof);

        
        $__internal_785345cd1c7ebd873c130736c2d4e5403bbd051880b67bc7cd8667a8f2e12e7c->leave($__internal_785345cd1c7ebd873c130736c2d4e5403bbd051880b67bc7cd8667a8f2e12e7c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3aaef8210c149e8a1ae41f6fc3b72eb2befd151fde7ed6b1dd96bd83372050f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aaef8210c149e8a1ae41f6fc3b72eb2befd151fde7ed6b1dd96bd83372050f->enter($__internal_b3aaef8210c149e8a1ae41f6fc3b72eb2befd151fde7ed6b1dd96bd83372050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_570f3eee42f345a69fd025452bdda3b4eb5064565094237ae0f33e6b446e3a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570f3eee42f345a69fd025452bdda3b4eb5064565094237ae0f33e6b446e3a15->enter($__internal_570f3eee42f345a69fd025452bdda3b4eb5064565094237ae0f33e6b446e3a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_570f3eee42f345a69fd025452bdda3b4eb5064565094237ae0f33e6b446e3a15->leave($__internal_570f3eee42f345a69fd025452bdda3b4eb5064565094237ae0f33e6b446e3a15_prof);

        
        $__internal_b3aaef8210c149e8a1ae41f6fc3b72eb2befd151fde7ed6b1dd96bd83372050f->leave($__internal_b3aaef8210c149e8a1ae41f6fc3b72eb2befd151fde7ed6b1dd96bd83372050f_prof);

    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        $__internal_1fc360e7e2b4882747f5d6b2075b7b394e1d9c4d4f946b31aa753f6037ed23d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc360e7e2b4882747f5d6b2075b7b394e1d9c4d4f946b31aa753f6037ed23d9->enter($__internal_1fc360e7e2b4882747f5d6b2075b7b394e1d9c4d4f946b31aa753f6037ed23d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_db693fa09a305c5e152417796f0b53c17cc87603894205039491f0000fa8a541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db693fa09a305c5e152417796f0b53c17cc87603894205039491f0000fa8a541->enter($__internal_db693fa09a305c5e152417796f0b53c17cc87603894205039491f0000fa8a541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "My first description";
        
        $__internal_db693fa09a305c5e152417796f0b53c17cc87603894205039491f0000fa8a541->leave($__internal_db693fa09a305c5e152417796f0b53c17cc87603894205039491f0000fa8a541_prof);

        
        $__internal_1fc360e7e2b4882747f5d6b2075b7b394e1d9c4d4f946b31aa753f6037ed23d9->leave($__internal_1fc360e7e2b4882747f5d6b2075b7b394e1d9c4d4f946b31aa753f6037ed23d9_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d916b883cb35c5158bf9f69737ec2718bce331240e396d258c5c4c1c9a81e4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d916b883cb35c5158bf9f69737ec2718bce331240e396d258c5c4c1c9a81e4d2->enter($__internal_d916b883cb35c5158bf9f69737ec2718bce331240e396d258c5c4c1c9a81e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_30cdd420e50cec844e525a4797c9129a4a3818beffda9b9b50c7277b31ac37b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cdd420e50cec844e525a4797c9129a4a3818beffda9b9b50c7277b31ac37b5->enter($__internal_30cdd420e50cec844e525a4797c9129a4a3818beffda9b9b50c7277b31ac37b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30cdd420e50cec844e525a4797c9129a4a3818beffda9b9b50c7277b31ac37b5->leave($__internal_30cdd420e50cec844e525a4797c9129a4a3818beffda9b9b50c7277b31ac37b5_prof);

        
        $__internal_d916b883cb35c5158bf9f69737ec2718bce331240e396d258c5c4c1c9a81e4d2->leave($__internal_d916b883cb35c5158bf9f69737ec2718bce331240e396d258c5c4c1c9a81e4d2_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d14e4f0c54ef3bb4d88a7da372477761439529a25c578b3e6e2cc6c30e9d094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14e4f0c54ef3bb4d88a7da372477761439529a25c578b3e6e2cc6c30e9d094->enter($__internal_2d14e4f0c54ef3bb4d88a7da372477761439529a25c578b3e6e2cc6c30e9d094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c1cfe7d053e1040ce32c714f1ae4d025627041f3bd361e273258a3ebee5979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1cfe7d053e1040ce32c714f1ae4d025627041f3bd361e273258a3ebee5979d->enter($__internal_8c1cfe7d053e1040ce32c714f1ae4d025627041f3bd361e273258a3ebee5979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c1cfe7d053e1040ce32c714f1ae4d025627041f3bd361e273258a3ebee5979d->leave($__internal_8c1cfe7d053e1040ce32c714f1ae4d025627041f3bd361e273258a3ebee5979d_prof);

        
        $__internal_2d14e4f0c54ef3bb4d88a7da372477761439529a25c578b3e6e2cc6c30e9d094->leave($__internal_2d14e4f0c54ef3bb4d88a7da372477761439529a25c578b3e6e2cc6c30e9d094_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7631356c95c09ae17c122f67838f4b4d2f5fc314ff667774f98e01f076c83de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7631356c95c09ae17c122f67838f4b4d2f5fc314ff667774f98e01f076c83de2->enter($__internal_7631356c95c09ae17c122f67838f4b4d2f5fc314ff667774f98e01f076c83de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_58d8aabc0e592273d7a2b8768d5b0ef1decd51f95bc990b1e02caaeeaf4accda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d8aabc0e592273d7a2b8768d5b0ef1decd51f95bc990b1e02caaeeaf4accda->enter($__internal_58d8aabc0e592273d7a2b8768d5b0ef1decd51f95bc990b1e02caaeeaf4accda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_58d8aabc0e592273d7a2b8768d5b0ef1decd51f95bc990b1e02caaeeaf4accda->leave($__internal_58d8aabc0e592273d7a2b8768d5b0ef1decd51f95bc990b1e02caaeeaf4accda_prof);

        
        $__internal_7631356c95c09ae17c122f67838f4b4d2f5fc314ff667774f98e01f076c83de2->leave($__internal_7631356c95c09ae17c122f67838f4b4d2f5fc314ff667774f98e01f076c83de2_prof);

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
</html>", "base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app\\Resources\\views\\base.html.twig");
    }
}
