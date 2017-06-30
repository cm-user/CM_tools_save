<?php

/* @Shop/CarouselProduct/edit.html.twig */
class __TwigTemplate_04cb829aaaf6075102948fec20445190fad1339f10e4087bb902ee602f96e350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselProduct/edit.html.twig", 1);
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
        $__internal_8b0389f955013167119eae4dd18ce72f1ee5efbfa3580c0a17e6d64ffcd701e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0389f955013167119eae4dd18ce72f1ee5efbfa3580c0a17e6d64ffcd701e6->enter($__internal_8b0389f955013167119eae4dd18ce72f1ee5efbfa3580c0a17e6d64ffcd701e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/edit.html.twig"));

        $__internal_683d32ae667b8f9a4cf3edf270f4f362e7c7c16b1989fbebae1b8520243789e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683d32ae667b8f9a4cf3edf270f4f362e7c7c16b1989fbebae1b8520243789e7->enter($__internal_683d32ae667b8f9a4cf3edf270f4f362e7c7c16b1989fbebae1b8520243789e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b0389f955013167119eae4dd18ce72f1ee5efbfa3580c0a17e6d64ffcd701e6->leave($__internal_8b0389f955013167119eae4dd18ce72f1ee5efbfa3580c0a17e6d64ffcd701e6_prof);

        
        $__internal_683d32ae667b8f9a4cf3edf270f4f362e7c7c16b1989fbebae1b8520243789e7->leave($__internal_683d32ae667b8f9a4cf3edf270f4f362e7c7c16b1989fbebae1b8520243789e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_caed9bc66d090ec4089091e2d0069273437a4cb234111b890000a578adb5b2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caed9bc66d090ec4089091e2d0069273437a4cb234111b890000a578adb5b2fc->enter($__internal_caed9bc66d090ec4089091e2d0069273437a4cb234111b890000a578adb5b2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_502965120b45a512ac629fc7989fec9e699ea15c7f29c99c064ccf4598865c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502965120b45a512ac629fc7989fec9e699ea15c7f29c99c064ccf4598865c47->enter($__internal_502965120b45a512ac629fc7989fec9e699ea15c7f29c99c064ccf4598865c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier le produit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_502965120b45a512ac629fc7989fec9e699ea15c7f29c99c064ccf4598865c47->leave($__internal_502965120b45a512ac629fc7989fec9e699ea15c7f29c99c064ccf4598865c47_prof);

        
        $__internal_caed9bc66d090ec4089091e2d0069273437a4cb234111b890000a578adb5b2fc->leave($__internal_caed9bc66d090ec4089091e2d0069273437a4cb234111b890000a578adb5b2fc_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cdc252a2b9884b5aa0b79b9883d45a95d3d3d877f78b3b909edb8b177c1be99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdc252a2b9884b5aa0b79b9883d45a95d3d3d877f78b3b909edb8b177c1be99->enter($__internal_8cdc252a2b9884b5aa0b79b9883d45a95d3d3d877f78b3b909edb8b177c1be99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a198521448d7ed907a47ebd69604e26ed3bdc714c2f20188606a8c1c97b86b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a198521448d7ed907a47ebd69604e26ed3bdc714c2f20188606a8c1c97b86b7->enter($__internal_1a198521448d7ed907a47ebd69604e26ed3bdc714c2f20188606a8c1c97b86b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1a198521448d7ed907a47ebd69604e26ed3bdc714c2f20188606a8c1c97b86b7->leave($__internal_1a198521448d7ed907a47ebd69604e26ed3bdc714c2f20188606a8c1c97b86b7_prof);

        
        $__internal_8cdc252a2b9884b5aa0b79b9883d45a95d3d3d877f78b3b909edb8b177c1be99->leave($__internal_8cdc252a2b9884b5aa0b79b9883d45a95d3d3d877f78b3b909edb8b177c1be99_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_577beeeb49188bb363c6f93805e9c09ec89c8c1e23dd1bdde66c8f8401d76dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577beeeb49188bb363c6f93805e9c09ec89c8c1e23dd1bdde66c8f8401d76dea->enter($__internal_577beeeb49188bb363c6f93805e9c09ec89c8c1e23dd1bdde66c8f8401d76dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de4314ddbf656ab95b04ae5c9353800ee03ffde4ff8ce35b4cf41ae23046b0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4314ddbf656ab95b04ae5c9353800ee03ffde4ff8ce35b4cf41ae23046b0ee->enter($__internal_de4314ddbf656ab95b04ae5c9353800ee03ffde4ff8ce35b4cf41ae23046b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_de4314ddbf656ab95b04ae5c9353800ee03ffde4ff8ce35b4cf41ae23046b0ee->leave($__internal_de4314ddbf656ab95b04ae5c9353800ee03ffde4ff8ce35b4cf41ae23046b0ee_prof);

        
        $__internal_577beeeb49188bb363c6f93805e9c09ec89c8c1e23dd1bdde66c8f8401d76dea->leave($__internal_577beeeb49188bb363c6f93805e9c09ec89c8c1e23dd1bdde66c8f8401d76dea_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselProduct/edit.html.twig";
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
    <h1>Modifier le produit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_product_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
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
", "@Shop/CarouselProduct/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselProduct\\edit.html.twig");
    }
}
