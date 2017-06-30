<?php

/* ShopBundle:CarouselPicture:new.html.twig */
class __TwigTemplate_6333a8b720ccf9e89cece4cf1764e20a4651b6355a6257782e24bb7318b7c3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselPicture:new.html.twig", 1);
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
        $__internal_5958da2fa416ce0263128513be19ece29f1cb6107146bdf9d322d509fd04c36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5958da2fa416ce0263128513be19ece29f1cb6107146bdf9d322d509fd04c36c->enter($__internal_5958da2fa416ce0263128513be19ece29f1cb6107146bdf9d322d509fd04c36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:new.html.twig"));

        $__internal_1e0040d3483cc9932bda3554d7c86cf88b34f64afa220586acd40a0e68ef2bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0040d3483cc9932bda3554d7c86cf88b34f64afa220586acd40a0e68ef2bc2->enter($__internal_1e0040d3483cc9932bda3554d7c86cf88b34f64afa220586acd40a0e68ef2bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5958da2fa416ce0263128513be19ece29f1cb6107146bdf9d322d509fd04c36c->leave($__internal_5958da2fa416ce0263128513be19ece29f1cb6107146bdf9d322d509fd04c36c_prof);

        
        $__internal_1e0040d3483cc9932bda3554d7c86cf88b34f64afa220586acd40a0e68ef2bc2->leave($__internal_1e0040d3483cc9932bda3554d7c86cf88b34f64afa220586acd40a0e68ef2bc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b8f4cdd37c35fdd4773c9193762503d162018715239049522385638a125bdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8f4cdd37c35fdd4773c9193762503d162018715239049522385638a125bdf7->enter($__internal_8b8f4cdd37c35fdd4773c9193762503d162018715239049522385638a125bdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c20b48169804a986f5170a20bb1e1f2609268394363cdb7669c4fada8379ebd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20b48169804a986f5170a20bb1e1f2609268394363cdb7669c4fada8379ebd5->enter($__internal_c20b48169804a986f5170a20bb1e1f2609268394363cdb7669c4fada8379ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter une image au carrousel</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_index");
        echo "\">
            Retour à la liste
        </a>
    </p>
";
        
        $__internal_c20b48169804a986f5170a20bb1e1f2609268394363cdb7669c4fada8379ebd5->leave($__internal_c20b48169804a986f5170a20bb1e1f2609268394363cdb7669c4fada8379ebd5_prof);

        
        $__internal_8b8f4cdd37c35fdd4773c9193762503d162018715239049522385638a125bdf7->leave($__internal_8b8f4cdd37c35fdd4773c9193762503d162018715239049522385638a125bdf7_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e433d73ab790d6da798243435b8ab5089923cab83733f695a9f9d551ffa5e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e433d73ab790d6da798243435b8ab5089923cab83733f695a9f9d551ffa5e65->enter($__internal_2e433d73ab790d6da798243435b8ab5089923cab83733f695a9f9d551ffa5e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_87b831acdd21899daa710b2d8f7e38e1bab9026829c4a8702772545e5bce2d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b831acdd21899daa710b2d8f7e38e1bab9026829c4a8702772545e5bce2d0e->enter($__internal_87b831acdd21899daa710b2d8f7e38e1bab9026829c4a8702772545e5bce2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_87b831acdd21899daa710b2d8f7e38e1bab9026829c4a8702772545e5bce2d0e->leave($__internal_87b831acdd21899daa710b2d8f7e38e1bab9026829c4a8702772545e5bce2d0e_prof);

        
        $__internal_2e433d73ab790d6da798243435b8ab5089923cab83733f695a9f9d551ffa5e65->leave($__internal_2e433d73ab790d6da798243435b8ab5089923cab83733f695a9f9d551ffa5e65_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52d3ba597559247ab05c828645eca760e32698648c949fc4a8611a2492dad7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d3ba597559247ab05c828645eca760e32698648c949fc4a8611a2492dad7f8->enter($__internal_52d3ba597559247ab05c828645eca760e32698648c949fc4a8611a2492dad7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46ea9eb5cd377f3c1661ecf5fc09ce5ef4af796522172b0b8fae0031f9a3310f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ea9eb5cd377f3c1661ecf5fc09ce5ef4af796522172b0b8fae0031f9a3310f->enter($__internal_46ea9eb5cd377f3c1661ecf5fc09ce5ef4af796522172b0b8fae0031f9a3310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_46ea9eb5cd377f3c1661ecf5fc09ce5ef4af796522172b0b8fae0031f9a3310f->leave($__internal_46ea9eb5cd377f3c1661ecf5fc09ce5ef4af796522172b0b8fae0031f9a3310f_prof);

        
        $__internal_52d3ba597559247ab05c828645eca760e32698648c949fc4a8611a2492dad7f8->leave($__internal_52d3ba597559247ab05c828645eca760e32698648c949fc4a8611a2492dad7f8_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselPicture:new.html.twig";
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
    <h1>Ajouter une image au carrousel</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    {{ form_end(form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_picture_index') }}\">
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
", "ShopBundle:CarouselPicture:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselPicture/new.html.twig");
    }
}
