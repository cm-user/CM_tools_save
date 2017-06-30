<?php

/* UserBundle:User:profil.html.twig */
class __TwigTemplate_6fa54198cdf24518959b3a7c78b11564c998f765e679dd70fe442a98e7cee6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:User:profil.html.twig", 1);
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
        $__internal_deb24a20e981e3dca8dd9253180823ce87368419c0941a1bfd235204289ec3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb24a20e981e3dca8dd9253180823ce87368419c0941a1bfd235204289ec3bf->enter($__internal_deb24a20e981e3dca8dd9253180823ce87368419c0941a1bfd235204289ec3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:profil.html.twig"));

        $__internal_1ee57b767e79703a46d1e467b05bd78c8f7db1b3094d5cc70a8ad2a287855310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee57b767e79703a46d1e467b05bd78c8f7db1b3094d5cc70a8ad2a287855310->enter($__internal_1ee57b767e79703a46d1e467b05bd78c8f7db1b3094d5cc70a8ad2a287855310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb24a20e981e3dca8dd9253180823ce87368419c0941a1bfd235204289ec3bf->leave($__internal_deb24a20e981e3dca8dd9253180823ce87368419c0941a1bfd235204289ec3bf_prof);

        
        $__internal_1ee57b767e79703a46d1e467b05bd78c8f7db1b3094d5cc70a8ad2a287855310->leave($__internal_1ee57b767e79703a46d1e467b05bd78c8f7db1b3094d5cc70a8ad2a287855310_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_18fe296c342f5714bba047a8826403a5d9f8c92cfadc94bc11edd2e4aee20adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fe296c342f5714bba047a8826403a5d9f8c92cfadc94bc11edd2e4aee20adf->enter($__internal_18fe296c342f5714bba047a8826403a5d9f8c92cfadc94bc11edd2e4aee20adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b80c1068fecc8d110da88d5fd084ef7f617e274dc8c7bd5f9e0d5da098200193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80c1068fecc8d110da88d5fd084ef7f617e274dc8c7bd5f9e0d5da098200193->enter($__internal_b80c1068fecc8d110da88d5fd084ef7f617e274dc8c7bd5f9e0d5da098200193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo " Profil";
        
        $__internal_b80c1068fecc8d110da88d5fd084ef7f617e274dc8c7bd5f9e0d5da098200193->leave($__internal_b80c1068fecc8d110da88d5fd084ef7f617e274dc8c7bd5f9e0d5da098200193_prof);

        
        $__internal_18fe296c342f5714bba047a8826403a5d9f8c92cfadc94bc11edd2e4aee20adf->leave($__internal_18fe296c342f5714bba047a8826403a5d9f8c92cfadc94bc11edd2e4aee20adf_prof);

    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        $__internal_952d05b1a492b53102f3b33e93df2cf68551a2bfc3dc7fe10fac2e61634b596a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952d05b1a492b53102f3b33e93df2cf68551a2bfc3dc7fe10fac2e61634b596a->enter($__internal_952d05b1a492b53102f3b33e93df2cf68551a2bfc3dc7fe10fac2e61634b596a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_ec8af07613906de1c66856bcdc6c15d4fde0e5d33febbb021fcceaa8e610cf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8af07613906de1c66856bcdc6c15d4fde0e5d33febbb021fcceaa8e610cf70->enter($__internal_ec8af07613906de1c66856bcdc6c15d4fde0e5d33febbb021fcceaa8e610cf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Profil page";
        
        $__internal_ec8af07613906de1c66856bcdc6c15d4fde0e5d33febbb021fcceaa8e610cf70->leave($__internal_ec8af07613906de1c66856bcdc6c15d4fde0e5d33febbb021fcceaa8e610cf70_prof);

        
        $__internal_952d05b1a492b53102f3b33e93df2cf68551a2bfc3dc7fe10fac2e61634b596a->leave($__internal_952d05b1a492b53102f3b33e93df2cf68551a2bfc3dc7fe10fac2e61634b596a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf67b70dc8793f858065c8ac101a28160ced1b04e877c18dd964ac51fc1fbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf67b70dc8793f858065c8ac101a28160ced1b04e877c18dd964ac51fc1fbcc->enter($__internal_3cf67b70dc8793f858065c8ac101a28160ced1b04e877c18dd964ac51fc1fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3f0fa3dcd89b0344f4bec95398da2640f7c2366a6f636465f8a5b247a4ed234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f0fa3dcd89b0344f4bec95398da2640f7c2366a6f636465f8a5b247a4ed234->enter($__internal_f3f0fa3dcd89b0344f4bec95398da2640f7c2366a6f636465f8a5b247a4ed234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3f0fa3dcd89b0344f4bec95398da2640f7c2366a6f636465f8a5b247a4ed234->leave($__internal_f3f0fa3dcd89b0344f4bec95398da2640f7c2366a6f636465f8a5b247a4ed234_prof);

        
        $__internal_3cf67b70dc8793f858065c8ac101a28160ced1b04e877c18dd964ac51fc1fbcc->leave($__internal_3cf67b70dc8793f858065c8ac101a28160ced1b04e877c18dd964ac51fc1fbcc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:profil.html.twig";
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

{% endblock %}", "UserBundle:User:profil.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/User/profil.html.twig");
    }
}
