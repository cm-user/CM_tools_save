<?php

/* @Shop/CarouselPicture/new.html.twig */
class __TwigTemplate_7db7b362a79c69fcff3072860bff88a2bce2b3450811332a043b97f9b0ba4b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselPicture/new.html.twig", 1);
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
        $__internal_99775d91a3184f28fa5698e043fdcf7af945bd983760baf54b7ecad5104f7255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99775d91a3184f28fa5698e043fdcf7af945bd983760baf54b7ecad5104f7255->enter($__internal_99775d91a3184f28fa5698e043fdcf7af945bd983760baf54b7ecad5104f7255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/new.html.twig"));

        $__internal_52d85780b9b34ab56abb0eb5bc2b8632dda300c42fbee06103c897e07a3f8b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d85780b9b34ab56abb0eb5bc2b8632dda300c42fbee06103c897e07a3f8b50->enter($__internal_52d85780b9b34ab56abb0eb5bc2b8632dda300c42fbee06103c897e07a3f8b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99775d91a3184f28fa5698e043fdcf7af945bd983760baf54b7ecad5104f7255->leave($__internal_99775d91a3184f28fa5698e043fdcf7af945bd983760baf54b7ecad5104f7255_prof);

        
        $__internal_52d85780b9b34ab56abb0eb5bc2b8632dda300c42fbee06103c897e07a3f8b50->leave($__internal_52d85780b9b34ab56abb0eb5bc2b8632dda300c42fbee06103c897e07a3f8b50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb94c5e555b6dbab79fe8cd519e8830317edfb963bdbd876d6b634549bfdbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb94c5e555b6dbab79fe8cd519e8830317edfb963bdbd876d6b634549bfdbe6->enter($__internal_cbb94c5e555b6dbab79fe8cd519e8830317edfb963bdbd876d6b634549bfdbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79b96d74eaf11d7a65cd35212390b4a1487172f143403ca6c3401e58a94d82ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b96d74eaf11d7a65cd35212390b4a1487172f143403ca6c3401e58a94d82ec->enter($__internal_79b96d74eaf11d7a65cd35212390b4a1487172f143403ca6c3401e58a94d82ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79b96d74eaf11d7a65cd35212390b4a1487172f143403ca6c3401e58a94d82ec->leave($__internal_79b96d74eaf11d7a65cd35212390b4a1487172f143403ca6c3401e58a94d82ec_prof);

        
        $__internal_cbb94c5e555b6dbab79fe8cd519e8830317edfb963bdbd876d6b634549bfdbe6->leave($__internal_cbb94c5e555b6dbab79fe8cd519e8830317edfb963bdbd876d6b634549bfdbe6_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc2f0fa73e30969ed85ed597a497cb81fd4c1a88cd9eed485ec996c6e23bdd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2f0fa73e30969ed85ed597a497cb81fd4c1a88cd9eed485ec996c6e23bdd14->enter($__internal_fc2f0fa73e30969ed85ed597a497cb81fd4c1a88cd9eed485ec996c6e23bdd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b328a675a72dc933e1cc5c96646903e05f3d9ed81a7f4687b2ac007847a157f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b328a675a72dc933e1cc5c96646903e05f3d9ed81a7f4687b2ac007847a157f0->enter($__internal_b328a675a72dc933e1cc5c96646903e05f3d9ed81a7f4687b2ac007847a157f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b328a675a72dc933e1cc5c96646903e05f3d9ed81a7f4687b2ac007847a157f0->leave($__internal_b328a675a72dc933e1cc5c96646903e05f3d9ed81a7f4687b2ac007847a157f0_prof);

        
        $__internal_fc2f0fa73e30969ed85ed597a497cb81fd4c1a88cd9eed485ec996c6e23bdd14->leave($__internal_fc2f0fa73e30969ed85ed597a497cb81fd4c1a88cd9eed485ec996c6e23bdd14_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46a1ad542e1a4c375eeaa7bae1d8d817ad7ba5da9119cf792e72f429bb953ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a1ad542e1a4c375eeaa7bae1d8d817ad7ba5da9119cf792e72f429bb953ce6->enter($__internal_46a1ad542e1a4c375eeaa7bae1d8d817ad7ba5da9119cf792e72f429bb953ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbe041832b7aeaba0a6c3824f09fa1c3c883fae8bd743416d710399f07722394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe041832b7aeaba0a6c3824f09fa1c3c883fae8bd743416d710399f07722394->enter($__internal_cbe041832b7aeaba0a6c3824f09fa1c3c883fae8bd743416d710399f07722394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_cbe041832b7aeaba0a6c3824f09fa1c3c883fae8bd743416d710399f07722394->leave($__internal_cbe041832b7aeaba0a6c3824f09fa1c3c883fae8bd743416d710399f07722394_prof);

        
        $__internal_46a1ad542e1a4c375eeaa7bae1d8d817ad7ba5da9119cf792e72f429bb953ce6->leave($__internal_46a1ad542e1a4c375eeaa7bae1d8d817ad7ba5da9119cf792e72f429bb953ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselPicture/new.html.twig";
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
", "@Shop/CarouselPicture/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselPicture\\new.html.twig");
    }
}
