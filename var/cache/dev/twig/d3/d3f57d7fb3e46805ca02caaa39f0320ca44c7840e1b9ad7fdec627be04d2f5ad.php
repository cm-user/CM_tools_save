<?php

/* @User/User/profil.html.twig */
class __TwigTemplate_5df646c65c87a82ed7545e0ead1b94e8c30586f2d5edaeec2a0672cdbf8fdf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/User/profil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d0a7c1af902416fbd2f9b600c974250c541a90cb380c0bc12b5bfb1621b39b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0a7c1af902416fbd2f9b600c974250c541a90cb380c0bc12b5bfb1621b39b5->enter($__internal_3d0a7c1af902416fbd2f9b600c974250c541a90cb380c0bc12b5bfb1621b39b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/profil.html.twig"));

        $__internal_71fd693b6ad2ce899d423eeac5bc4cd3ffe95f03d2dce76aecdeebf33be7c6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fd693b6ad2ce899d423eeac5bc4cd3ffe95f03d2dce76aecdeebf33be7c6df->enter($__internal_71fd693b6ad2ce899d423eeac5bc4cd3ffe95f03d2dce76aecdeebf33be7c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0a7c1af902416fbd2f9b600c974250c541a90cb380c0bc12b5bfb1621b39b5->leave($__internal_3d0a7c1af902416fbd2f9b600c974250c541a90cb380c0bc12b5bfb1621b39b5_prof);

        
        $__internal_71fd693b6ad2ce899d423eeac5bc4cd3ffe95f03d2dce76aecdeebf33be7c6df->leave($__internal_71fd693b6ad2ce899d423eeac5bc4cd3ffe95f03d2dce76aecdeebf33be7c6df_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4802c99ade3bc20e64348407bb5c6b0b36ea8206be104cf3cfa6ad6a740d4c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4802c99ade3bc20e64348407bb5c6b0b36ea8206be104cf3cfa6ad6a740d4c35->enter($__internal_4802c99ade3bc20e64348407bb5c6b0b36ea8206be104cf3cfa6ad6a740d4c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86aeb3610e3a93fa4ee5647a943f9e9f3c3126cf51ba293f92750a13e5dd5ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86aeb3610e3a93fa4ee5647a943f9e9f3c3126cf51ba293f92750a13e5dd5ea9->enter($__internal_86aeb3610e3a93fa4ee5647a943f9e9f3c3126cf51ba293f92750a13e5dd5ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo " Profil";
        
        $__internal_86aeb3610e3a93fa4ee5647a943f9e9f3c3126cf51ba293f92750a13e5dd5ea9->leave($__internal_86aeb3610e3a93fa4ee5647a943f9e9f3c3126cf51ba293f92750a13e5dd5ea9_prof);

        
        $__internal_4802c99ade3bc20e64348407bb5c6b0b36ea8206be104cf3cfa6ad6a740d4c35->leave($__internal_4802c99ade3bc20e64348407bb5c6b0b36ea8206be104cf3cfa6ad6a740d4c35_prof);

    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        $__internal_2780642050d3947822804d9c646e9ef3506b0c8fdcea1ebf809b75e05b88180c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2780642050d3947822804d9c646e9ef3506b0c8fdcea1ebf809b75e05b88180c->enter($__internal_2780642050d3947822804d9c646e9ef3506b0c8fdcea1ebf809b75e05b88180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_d42a95d159ff83659eea6594d622cb189547f6f6770ee097d6f06b8b0f407723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42a95d159ff83659eea6594d622cb189547f6f6770ee097d6f06b8b0f407723->enter($__internal_d42a95d159ff83659eea6594d622cb189547f6f6770ee097d6f06b8b0f407723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Profil page";
        
        $__internal_d42a95d159ff83659eea6594d622cb189547f6f6770ee097d6f06b8b0f407723->leave($__internal_d42a95d159ff83659eea6594d622cb189547f6f6770ee097d6f06b8b0f407723_prof);

        
        $__internal_2780642050d3947822804d9c646e9ef3506b0c8fdcea1ebf809b75e05b88180c->leave($__internal_2780642050d3947822804d9c646e9ef3506b0c8fdcea1ebf809b75e05b88180c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_808f59650be77732f23a4b39e41d54e5868f056cdd9177e345f77f5671ed552d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808f59650be77732f23a4b39e41d54e5868f056cdd9177e345f77f5671ed552d->enter($__internal_808f59650be77732f23a4b39e41d54e5868f056cdd9177e345f77f5671ed552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08575aa07c00cb2c3624db8adbd41e505693576538be00f987c9f5f49ef6e078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08575aa07c00cb2c3624db8adbd41e505693576538be00f987c9f5f49ef6e078->enter($__internal_08575aa07c00cb2c3624db8adbd41e505693576538be00f987c9f5f49ef6e078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h1>Profile</h1>

    <div role=\"tabpanel\">

        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#voir\" aria-controls=\"voir\" role=\"tab\" data-toggle=\"tab\">Voir</a></li>
            <li role=\"presentation\"><a href=\"#modifier\" aria-controls=\"modifier\" role=\"tab\" data-toggle=\"tab\">Modifer</a></li>
            <li role=\"presentation\"><a href=\"#parametres\" aria-controls=\"parametres\" role=\"tab\" data-toggle=\"tab\">Paramètres</a></li>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"voir\">

                <div class=\"group\">
                    <label>Prénom</label>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Nom</label>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Username</label>
                    <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Email</label>
                    <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "mail", array()), "html", null, true);
        echo "</p>
                </div>

            </div>

            <div role=\"tabpanel\" class=\"tab-pane\" id=\"modifier\">

                <h2>Informations</h2>

                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formChangePersonalData"] ?? $this->getContext($context, "formChangePersonalData")), 'form');
        echo "

                <h2>Mot de passe</h2>

                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formChangePassword"] ?? $this->getContext($context, "formChangePassword")), 'form');
        echo "

            </div>

            <div role=\"tabpanel\" class=\"tab-pane\" id=\"parametres\">

                <h2>Gestion compte</h2>

                <button id=\"delete-account\" class=\"btn btn-danger\">Supprimer mon compte (cette action est définitive)</button>

            </div>

        </div>

    </div>

    <script type=\"application/javascript\">
        \$(document).ready(function() {
            \$('#delete-account').on('click', function() {
                if(confirm(\"Etes-vous sur de vouloir supprimer votre compte ?\")) {
                    window.location.replace(\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete");
        echo "\");
                } else {
                    console.log(\"compte non supprimé\");
                }
            })
        });
    </script>

";
        
        $__internal_08575aa07c00cb2c3624db8adbd41e505693576538be00f987c9f5f49ef6e078->leave($__internal_08575aa07c00cb2c3624db8adbd41e505693576538be00f987c9f5f49ef6e078_prof);

        
        $__internal_808f59650be77732f23a4b39e41d54e5868f056cdd9177e345f77f5671ed552d->leave($__internal_808f59650be77732f23a4b39e41d54e5868f056cdd9177e345f77f5671ed552d_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  151 => 51,  144 => 47,  132 => 38,  124 => 33,  116 => 28,  108 => 23,  88 => 5,  79 => 4,  61 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ app.user.name }} Profil{% endblock %}
{% block description %}Profil page{% endblock %}
{% block body %}

    <h1>Profile</h1>

    <div role=\"tabpanel\">

        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#voir\" aria-controls=\"voir\" role=\"tab\" data-toggle=\"tab\">Voir</a></li>
            <li role=\"presentation\"><a href=\"#modifier\" aria-controls=\"modifier\" role=\"tab\" data-toggle=\"tab\">Modifer</a></li>
            <li role=\"presentation\"><a href=\"#parametres\" aria-controls=\"parametres\" role=\"tab\" data-toggle=\"tab\">Paramètres</a></li>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"voir\">

                <div class=\"group\">
                    <label>Prénom</label>
                    <p>{{ app.user.name }}</p>
                </div>

                <div class=\"group\">
                    <label>Nom</label>
                    <p>{{ app.user.surname }}</p>
                </div>

                <div class=\"group\">
                    <label>Username</label>
                    <p>{{ app.user.username }}</p>
                </div>

                <div class=\"group\">
                    <label>Email</label>
                    <p>{{ app.user.mail }}</p>
                </div>

            </div>

            <div role=\"tabpanel\" class=\"tab-pane\" id=\"modifier\">

                <h2>Informations</h2>

                {{ form(formChangePersonalData) }}

                <h2>Mot de passe</h2>

                {{ form(formChangePassword) }}

            </div>

            <div role=\"tabpanel\" class=\"tab-pane\" id=\"parametres\">

                <h2>Gestion compte</h2>

                <button id=\"delete-account\" class=\"btn btn-danger\">Supprimer mon compte (cette action est définitive)</button>

            </div>

        </div>

    </div>

    <script type=\"application/javascript\">
        \$(document).ready(function() {
            \$('#delete-account').on('click', function() {
                if(confirm(\"Etes-vous sur de vouloir supprimer votre compte ?\")) {
                    window.location.replace(\"{{ path(\"user_delete\") }}\");
                } else {
                    console.log(\"compte non supprimé\");
                }
            })
        });
    </script>

{% endblock %}", "@User/User/profil.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\User\\profil.html.twig");
    }
}
