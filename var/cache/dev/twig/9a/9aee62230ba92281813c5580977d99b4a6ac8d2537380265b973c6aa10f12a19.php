<?php

/* @Shop/CarouselVideo/edit.html.twig */
class __TwigTemplate_5347a2c45dc603cafbf2fc173bb0e943da5a067bb23b2b05da6ec90600194bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselVideo/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2a9ee81185af7bb9e5040f9eac24388914b600bce63634971ed97ccdeada01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a9ee81185af7bb9e5040f9eac24388914b600bce63634971ed97ccdeada01c->enter($__internal_d2a9ee81185af7bb9e5040f9eac24388914b600bce63634971ed97ccdeada01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/edit.html.twig"));

        $__internal_06c559578a5d30be5efa057901026637ee02bae866f0ddcfcd1c13f170002e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c559578a5d30be5efa057901026637ee02bae866f0ddcfcd1c13f170002e43->enter($__internal_06c559578a5d30be5efa057901026637ee02bae866f0ddcfcd1c13f170002e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a9ee81185af7bb9e5040f9eac24388914b600bce63634971ed97ccdeada01c->leave($__internal_d2a9ee81185af7bb9e5040f9eac24388914b600bce63634971ed97ccdeada01c_prof);

        
        $__internal_06c559578a5d30be5efa057901026637ee02bae866f0ddcfcd1c13f170002e43->leave($__internal_06c559578a5d30be5efa057901026637ee02bae866f0ddcfcd1c13f170002e43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78b99fac7e9f854467df4fde85112517b810825b3c03bd92095bc00d67b3c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78b99fac7e9f854467df4fde85112517b810825b3c03bd92095bc00d67b3c68->enter($__internal_a78b99fac7e9f854467df4fde85112517b810825b3c03bd92095bc00d67b3c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a14ce74c08f4c7ae404f8cb69515feccfa5e7646b7b05f889a013ce5836021be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14ce74c08f4c7ae404f8cb69515feccfa5e7646b7b05f889a013ce5836021be->enter($__internal_a14ce74c08f4c7ae404f8cb69515feccfa5e7646b7b05f889a013ce5836021be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier la vidéo</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_a14ce74c08f4c7ae404f8cb69515feccfa5e7646b7b05f889a013ce5836021be->leave($__internal_a14ce74c08f4c7ae404f8cb69515feccfa5e7646b7b05f889a013ce5836021be_prof);

        
        $__internal_a78b99fac7e9f854467df4fde85112517b810825b3c03bd92095bc00d67b3c68->leave($__internal_a78b99fac7e9f854467df4fde85112517b810825b3c03bd92095bc00d67b3c68_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b287257237e9a3579c5890d5685cca22c2af70e6f2c1bc04a5edeeb61e4c4719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b287257237e9a3579c5890d5685cca22c2af70e6f2c1bc04a5edeeb61e4c4719->enter($__internal_b287257237e9a3579c5890d5685cca22c2af70e6f2c1bc04a5edeeb61e4c4719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e6f5e249a2d351a2afa2d86fea74392660111f3278927105af80453275cc90b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f5e249a2d351a2afa2d86fea74392660111f3278927105af80453275cc90b7->enter($__internal_e6f5e249a2d351a2afa2d86fea74392660111f3278927105af80453275cc90b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" type=\"application/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" type=\"application/javascript\"></script>
    <script>
        \$(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                language: 'fr',
                autoclose: true,
                todayHighlight: true,
                orientation: \"bottom auto\"
            });
        });
    </script>
";
        
        $__internal_e6f5e249a2d351a2afa2d86fea74392660111f3278927105af80453275cc90b7->leave($__internal_e6f5e249a2d351a2afa2d86fea74392660111f3278927105af80453275cc90b7_prof);

        
        $__internal_b287257237e9a3579c5890d5685cca22c2af70e6f2c1bc04a5edeeb61e4c4719->leave($__internal_b287257237e9a3579c5890d5685cca22c2af70e6f2c1bc04a5edeeb61e4c4719_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dbed9fe7c56b928c3fc6390a0d9571f51ae5a3e523cff770c7a72813ded5acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbed9fe7c56b928c3fc6390a0d9571f51ae5a3e523cff770c7a72813ded5acc->enter($__internal_0dbed9fe7c56b928c3fc6390a0d9571f51ae5a3e523cff770c7a72813ded5acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f959cbd81358a7dd70d990dc039cd344ba53c0aee6b1681865238f34124b9d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f959cbd81358a7dd70d990dc039cd344ba53c0aee6b1681865238f34124b9d3b->enter($__internal_f959cbd81358a7dd70d990dc039cd344ba53c0aee6b1681865238f34124b9d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_f959cbd81358a7dd70d990dc039cd344ba53c0aee6b1681865238f34124b9d3b->leave($__internal_f959cbd81358a7dd70d990dc039cd344ba53c0aee6b1681865238f34124b9d3b_prof);

        
        $__internal_0dbed9fe7c56b928c3fc6390a0d9571f51ae5a3e523cff770c7a72813ded5acc->leave($__internal_0dbed9fe7c56b928c3fc6390a0d9571f51ae5a3e523cff770c7a72813ded5acc_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselVideo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  126 => 37,  103 => 22,  94 => 21,  81 => 17,  76 => 15,  70 => 12,  64 => 9,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Modifier la vidéo</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_video_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" type=\"application/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" type=\"application/javascript\"></script>
    <script>
        \$(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                language: 'fr',
                autoclose: true,
                todayHighlight: true,
                orientation: \"bottom auto\"
            });
        });
    </script>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
{% endblock %}
", "@Shop/CarouselVideo/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselVideo\\edit.html.twig");
    }
}
