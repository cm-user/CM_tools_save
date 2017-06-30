<?php

/* @Shop/CarouselVideo/new.html.twig */
class __TwigTemplate_ea065e570f7ea97f2272533ae8cc3322480f5e4756a1b5b9eb20d1fa0a8732fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselVideo/new.html.twig", 1);
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
        $__internal_662f0dc5ad3fdb19177130d834ba21608c9aea4ce4684f0f02e4c54e61875f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662f0dc5ad3fdb19177130d834ba21608c9aea4ce4684f0f02e4c54e61875f42->enter($__internal_662f0dc5ad3fdb19177130d834ba21608c9aea4ce4684f0f02e4c54e61875f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/new.html.twig"));

        $__internal_8905159416d7e0bad56ee8155928f9b15b0efa40d889028889e863c537862d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8905159416d7e0bad56ee8155928f9b15b0efa40d889028889e863c537862d05->enter($__internal_8905159416d7e0bad56ee8155928f9b15b0efa40d889028889e863c537862d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662f0dc5ad3fdb19177130d834ba21608c9aea4ce4684f0f02e4c54e61875f42->leave($__internal_662f0dc5ad3fdb19177130d834ba21608c9aea4ce4684f0f02e4c54e61875f42_prof);

        
        $__internal_8905159416d7e0bad56ee8155928f9b15b0efa40d889028889e863c537862d05->leave($__internal_8905159416d7e0bad56ee8155928f9b15b0efa40d889028889e863c537862d05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abef6a915eaf3e9ed66be3db3e1503cb97299204ecc6ea3b7bbbe5bbcf4182a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abef6a915eaf3e9ed66be3db3e1503cb97299204ecc6ea3b7bbbe5bbcf4182a3->enter($__internal_abef6a915eaf3e9ed66be3db3e1503cb97299204ecc6ea3b7bbbe5bbcf4182a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d15b62b9f45b1a0700abf510fb318b26f663c1c3302e87ddaf0bc1268814db3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15b62b9f45b1a0700abf510fb318b26f663c1c3302e87ddaf0bc1268814db3c->enter($__internal_d15b62b9f45b1a0700abf510fb318b26f663c1c3302e87ddaf0bc1268814db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter une vidéo au carrousel</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_index");
        echo "\">
            Retour à la liste
        </a>
    </p>
";
        
        $__internal_d15b62b9f45b1a0700abf510fb318b26f663c1c3302e87ddaf0bc1268814db3c->leave($__internal_d15b62b9f45b1a0700abf510fb318b26f663c1c3302e87ddaf0bc1268814db3c_prof);

        
        $__internal_abef6a915eaf3e9ed66be3db3e1503cb97299204ecc6ea3b7bbbe5bbcf4182a3->leave($__internal_abef6a915eaf3e9ed66be3db3e1503cb97299204ecc6ea3b7bbbe5bbcf4182a3_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f27332375bbcfdb3edea5bc3f76296ef1a0f8c9d93c797e5c8e930dc33ca9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f27332375bbcfdb3edea5bc3f76296ef1a0f8c9d93c797e5c8e930dc33ca9c6->enter($__internal_1f27332375bbcfdb3edea5bc3f76296ef1a0f8c9d93c797e5c8e930dc33ca9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd36ae51790b2036c2ceeea538eec05e2754eb16a2474637581a18927a50f1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd36ae51790b2036c2ceeea538eec05e2754eb16a2474637581a18927a50f1b4->enter($__internal_cd36ae51790b2036c2ceeea538eec05e2754eb16a2474637581a18927a50f1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
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
        
        $__internal_cd36ae51790b2036c2ceeea538eec05e2754eb16a2474637581a18927a50f1b4->leave($__internal_cd36ae51790b2036c2ceeea538eec05e2754eb16a2474637581a18927a50f1b4_prof);

        
        $__internal_1f27332375bbcfdb3edea5bc3f76296ef1a0f8c9d93c797e5c8e930dc33ca9c6->leave($__internal_1f27332375bbcfdb3edea5bc3f76296ef1a0f8c9d93c797e5c8e930dc33ca9c6_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_860e30ada9e09f4141a1cbb401ebc27ea890c23933494e31d882a22f1d76bf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860e30ada9e09f4141a1cbb401ebc27ea890c23933494e31d882a22f1d76bf08->enter($__internal_860e30ada9e09f4141a1cbb401ebc27ea890c23933494e31d882a22f1d76bf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49ae9f721469dc115021ac8a13b97c1bb710ad3280ba066c2a445e9af63224b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ae9f721469dc115021ac8a13b97c1bb710ad3280ba066c2a445e9af63224b5->enter($__internal_49ae9f721469dc115021ac8a13b97c1bb710ad3280ba066c2a445e9af63224b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_49ae9f721469dc115021ac8a13b97c1bb710ad3280ba066c2a445e9af63224b5->leave($__internal_49ae9f721469dc115021ac8a13b97c1bb710ad3280ba066c2a445e9af63224b5_prof);

        
        $__internal_860e30ada9e09f4141a1cbb401ebc27ea890c23933494e31d882a22f1d76bf08->leave($__internal_860e30ada9e09f4141a1cbb401ebc27ea890c23933494e31d882a22f1d76bf08_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselVideo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  117 => 34,  94 => 19,  85 => 18,  70 => 12,  64 => 9,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Ajouter une vidéo au carrousel</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    {{ form_end(form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_video_index') }}\">
            Retour à la liste
        </a>
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
", "@Shop/CarouselVideo/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselVideo\\new.html.twig");
    }
}
