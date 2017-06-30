<?php

/* ShopBundle:CarouselPicture:edit.html.twig */
class __TwigTemplate_f2be657e287869028f002a2ba02c7e1038abec1969c5ab7d4115f6ce7829a248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselPicture:edit.html.twig", 1);
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
        $__internal_049ae001fea6f6fabdf50ae294dcca63ad68e22a46d8c607ac22e1e6ac0ffc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049ae001fea6f6fabdf50ae294dcca63ad68e22a46d8c607ac22e1e6ac0ffc82->enter($__internal_049ae001fea6f6fabdf50ae294dcca63ad68e22a46d8c607ac22e1e6ac0ffc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:edit.html.twig"));

        $__internal_3ef75c407fc972c0fac249aa17ac3e51309caa9bbbbd5aefba86f3b6a2878cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef75c407fc972c0fac249aa17ac3e51309caa9bbbbd5aefba86f3b6a2878cc8->enter($__internal_3ef75c407fc972c0fac249aa17ac3e51309caa9bbbbd5aefba86f3b6a2878cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_049ae001fea6f6fabdf50ae294dcca63ad68e22a46d8c607ac22e1e6ac0ffc82->leave($__internal_049ae001fea6f6fabdf50ae294dcca63ad68e22a46d8c607ac22e1e6ac0ffc82_prof);

        
        $__internal_3ef75c407fc972c0fac249aa17ac3e51309caa9bbbbd5aefba86f3b6a2878cc8->leave($__internal_3ef75c407fc972c0fac249aa17ac3e51309caa9bbbbd5aefba86f3b6a2878cc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4641da6470eaa168b1ec7bb2b44604e31d7b81ba4225c5a2957831aebeea57e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4641da6470eaa168b1ec7bb2b44604e31d7b81ba4225c5a2957831aebeea57e6->enter($__internal_4641da6470eaa168b1ec7bb2b44604e31d7b81ba4225c5a2957831aebeea57e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0c9b48de38fa9c844534dffc838b7bb2811e07243a47d146a76e0a64fd962c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c9b48de38fa9c844534dffc838b7bb2811e07243a47d146a76e0a64fd962c2->enter($__internal_f0c9b48de38fa9c844534dffc838b7bb2811e07243a47d146a76e0a64fd962c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier l'image</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_index");
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
        
        $__internal_f0c9b48de38fa9c844534dffc838b7bb2811e07243a47d146a76e0a64fd962c2->leave($__internal_f0c9b48de38fa9c844534dffc838b7bb2811e07243a47d146a76e0a64fd962c2_prof);

        
        $__internal_4641da6470eaa168b1ec7bb2b44604e31d7b81ba4225c5a2957831aebeea57e6->leave($__internal_4641da6470eaa168b1ec7bb2b44604e31d7b81ba4225c5a2957831aebeea57e6_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b34d31f258d3d5bc4cd8e5a944c5f432111fcda2add042a545527c9cd2a10be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34d31f258d3d5bc4cd8e5a944c5f432111fcda2add042a545527c9cd2a10be3->enter($__internal_b34d31f258d3d5bc4cd8e5a944c5f432111fcda2add042a545527c9cd2a10be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5ec675e4f47e9faa9f2c4d5d3c5e89f6210798ee46e84176737ff7c43b1fd909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec675e4f47e9faa9f2c4d5d3c5e89f6210798ee46e84176737ff7c43b1fd909->enter($__internal_5ec675e4f47e9faa9f2c4d5d3c5e89f6210798ee46e84176737ff7c43b1fd909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5ec675e4f47e9faa9f2c4d5d3c5e89f6210798ee46e84176737ff7c43b1fd909->leave($__internal_5ec675e4f47e9faa9f2c4d5d3c5e89f6210798ee46e84176737ff7c43b1fd909_prof);

        
        $__internal_b34d31f258d3d5bc4cd8e5a944c5f432111fcda2add042a545527c9cd2a10be3->leave($__internal_b34d31f258d3d5bc4cd8e5a944c5f432111fcda2add042a545527c9cd2a10be3_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c5244f54afe500cbf4c76b18136c48b618d40a816df11ac4ab8e673a00adef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5244f54afe500cbf4c76b18136c48b618d40a816df11ac4ab8e673a00adef1->enter($__internal_0c5244f54afe500cbf4c76b18136c48b618d40a816df11ac4ab8e673a00adef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f0d69f03bbcc5a7f38ce36c12ee38b1019cd789ad4b86c30970ff1cd0422f86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d69f03bbcc5a7f38ce36c12ee38b1019cd789ad4b86c30970ff1cd0422f86c->enter($__internal_f0d69f03bbcc5a7f38ce36c12ee38b1019cd789ad4b86c30970ff1cd0422f86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_f0d69f03bbcc5a7f38ce36c12ee38b1019cd789ad4b86c30970ff1cd0422f86c->leave($__internal_f0d69f03bbcc5a7f38ce36c12ee38b1019cd789ad4b86c30970ff1cd0422f86c_prof);

        
        $__internal_0c5244f54afe500cbf4c76b18136c48b618d40a816df11ac4ab8e673a00adef1->leave($__internal_0c5244f54afe500cbf4c76b18136c48b618d40a816df11ac4ab8e673a00adef1_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselPicture:edit.html.twig";
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
    <h1>Modifier l'image</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_picture_index') }}\">
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
", "ShopBundle:CarouselPicture:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselPicture/edit.html.twig");
    }
}
