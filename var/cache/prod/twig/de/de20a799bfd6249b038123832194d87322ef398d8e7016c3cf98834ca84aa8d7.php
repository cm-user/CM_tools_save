<?php

/* @User/User/profil.html.twig */
class __TwigTemplate_cce4099a9f671170d59cc276037034c70a90fc060963e4a48a82996ba282e3a1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
        echo " Profil";
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo "Profil page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Nom</label>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "surname", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Username</label>
                    <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"group\">
                    <label>Email</label>
                    <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "mail", array()), "html", null, true);
        echo "</p>
                </div>

            </div>

            <div role=\"tabpanel\" class=\"tab-pane\" id=\"modifier\">

                <h2>Informations</h2>

                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formChangePersonalData"]) ? $context["formChangePersonalData"] : null), 'form');
        echo "

                <h2>Mot de passe</h2>

                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formChangePassword"]) ? $context["formChangePassword"] : null), 'form');
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
        return array (  132 => 71,  109 => 51,  102 => 47,  90 => 38,  82 => 33,  74 => 28,  66 => 23,  46 => 5,  43 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/User/profil.html.twig", "/home/cadeau-maestro/tools/vendor/unicorn/user-bundle/Unicorn/Bundle/UserBundle/Resources/views/User/profil.html.twig");
    }
}
