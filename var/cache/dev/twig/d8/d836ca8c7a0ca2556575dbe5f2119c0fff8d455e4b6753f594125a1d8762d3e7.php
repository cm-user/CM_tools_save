<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_43affb5a22b78a8cd6beda7a29baea33e14f39fbfa3836ea7d44119736565cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Security/login.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b61c50f50d32c6af78fde36a651e32b381d6fd7f7c2308c81b5002703e0d3bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61c50f50d32c6af78fde36a651e32b381d6fd7f7c2308c81b5002703e0d3bb9->enter($__internal_b61c50f50d32c6af78fde36a651e32b381d6fd7f7c2308c81b5002703e0d3bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_b2f508e0bfa0483f622f0c2258887cc6c3ebe4ac677cf6abde3ba065e8a75b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f508e0bfa0483f622f0c2258887cc6c3ebe4ac677cf6abde3ba065e8a75b07->enter($__internal_b2f508e0bfa0483f622f0c2258887cc6c3ebe4ac677cf6abde3ba065e8a75b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61c50f50d32c6af78fde36a651e32b381d6fd7f7c2308c81b5002703e0d3bb9->leave($__internal_b61c50f50d32c6af78fde36a651e32b381d6fd7f7c2308c81b5002703e0d3bb9_prof);

        
        $__internal_b2f508e0bfa0483f622f0c2258887cc6c3ebe4ac677cf6abde3ba065e8a75b07->leave($__internal_b2f508e0bfa0483f622f0c2258887cc6c3ebe4ac677cf6abde3ba065e8a75b07_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_c01196c982bd2d89c74811c4bcc2b8e8b7ef1bf4f74eef202b9fa06f550d1da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01196c982bd2d89c74811c4bcc2b8e8b7ef1bf4f74eef202b9fa06f550d1da9->enter($__internal_c01196c982bd2d89c74811c4bcc2b8e8b7ef1bf4f74eef202b9fa06f550d1da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_a65316f86e3f48c8ccb0956cf6ff2c1c4d7431840f6cf469c6542550d9aa4dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65316f86e3f48c8ccb0956cf6ff2c1c4d7431840f6cf469c6542550d9aa4dbe->enter($__internal_a65316f86e3f48c8ccb0956cf6ff2c1c4d7431840f6cf469c6542550d9aa4dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo "Login";
        
        $__internal_a65316f86e3f48c8ccb0956cf6ff2c1c4d7431840f6cf469c6542550d9aa4dbe->leave($__internal_a65316f86e3f48c8ccb0956cf6ff2c1c4d7431840f6cf469c6542550d9aa4dbe_prof);

        
        $__internal_c01196c982bd2d89c74811c4bcc2b8e8b7ef1bf4f74eef202b9fa06f550d1da9->leave($__internal_c01196c982bd2d89c74811c4bcc2b8e8b7ef1bf4f74eef202b9fa06f550d1da9_prof);

    }

    // line 3
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_ffdf6c3147b63cbf1ebe30bbd2aeab924d6df1b5ce9e2421dda3c677224e6309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdf6c3147b63cbf1ebe30bbd2aeab924d6df1b5ce9e2421dda3c677224e6309->enter($__internal_ffdf6c3147b63cbf1ebe30bbd2aeab924d6df1b5ce9e2421dda3c677224e6309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_d3e57b111632dc971d3e0a096fd8e6f4491cb97cf7ff8628fadf8147fe3a7b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e57b111632dc971d3e0a096fd8e6f4491cb97cf7ff8628fadf8147fe3a7b37->enter($__internal_d3e57b111632dc971d3e0a096fd8e6f4491cb97cf7ff8628fadf8147fe3a7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo "Login page";
        
        $__internal_d3e57b111632dc971d3e0a096fd8e6f4491cb97cf7ff8628fadf8147fe3a7b37->leave($__internal_d3e57b111632dc971d3e0a096fd8e6f4491cb97cf7ff8628fadf8147fe3a7b37_prof);

        
        $__internal_ffdf6c3147b63cbf1ebe30bbd2aeab924d6df1b5ce9e2421dda3c677224e6309->leave($__internal_ffdf6c3147b63cbf1ebe30bbd2aeab924d6df1b5ce9e2421dda3c677224e6309_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b118292c2579cc392146a91c27906d34dce7670409181288ddb8889cfc120b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b118292c2579cc392146a91c27906d34dce7670409181288ddb8889cfc120b95->enter($__internal_b118292c2579cc392146a91c27906d34dce7670409181288ddb8889cfc120b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17f71751fc5fcc806abe2ed9c4ef03bcd25a8b45bd0198d88e469021b47a2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17f71751fc5fcc806abe2ed9c4ef03bcd25a8b45bd0198d88e469021b47a2ca->enter($__internal_d17f71751fc5fcc806abe2ed9c4ef03bcd25a8b45bd0198d88e469021b47a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Connexion</h1>
            <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input class=\"form-control\" type=\"text\" placeholder=\"Pseudo\" id=\"username\" name=\"_username\"
                               value=\"";
        // line 13
        if (array_key_exists("last_username", $context)) {
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        }
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" id=\"passsword\" name=\"_password\" />
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
            </form>
        </div>
    </div>

    ";
        // line 27
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 30
        echo "
";
        
        $__internal_d17f71751fc5fcc806abe2ed9c4ef03bcd25a8b45bd0198d88e469021b47a2ca->leave($__internal_d17f71751fc5fcc806abe2ed9c4ef03bcd25a8b45bd0198d88e469021b47a2ca_prof);

        
        $__internal_b118292c2579cc392146a91c27906d34dce7670409181288ddb8889cfc120b95->leave($__internal_b118292c2579cc392146a91c27906d34dce7670409181288ddb8889cfc120b95_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  121 => 28,  119 => 27,  100 => 13,  92 => 8,  87 => 5,  78 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block meta_title %}Login{% endblock %}
{% block meta_description %}Login page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Connexion</h1>
            <form action=\"{{ path('user_login') }}\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input class=\"form-control\" type=\"text\" placeholder=\"Pseudo\" id=\"username\" name=\"_username\"
                               value=\"{% if last_username is defined %}{{ last_username }}{% endif %}\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" id=\"passsword\" name=\"_password\" />
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
            </form>
        </div>
    </div>

    {% if error %}
        <div>{{ error.message }}</div>
    {% endif %}

{% endblock %}", "@User/Security/login.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
