<?php

/* ShopBundle:CarouselProduct:edit.html.twig */
class __TwigTemplate_9d92ca43cc01cc0914a429f66d3010821b035ebd340fbfe80d51c69340d7b23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselProduct:edit.html.twig", 1);
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
        $__internal_f8f225ea632e5d33abe0b9c456bca6c3220518908e1b01916b2813b199dd2c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f225ea632e5d33abe0b9c456bca6c3220518908e1b01916b2813b199dd2c68->enter($__internal_f8f225ea632e5d33abe0b9c456bca6c3220518908e1b01916b2813b199dd2c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:edit.html.twig"));

        $__internal_9d6c2ef0cbf8ab5e2afac75717cacf9b5b24f01b0557a45afe7f80b99dd5f27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6c2ef0cbf8ab5e2afac75717cacf9b5b24f01b0557a45afe7f80b99dd5f27d->enter($__internal_9d6c2ef0cbf8ab5e2afac75717cacf9b5b24f01b0557a45afe7f80b99dd5f27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f225ea632e5d33abe0b9c456bca6c3220518908e1b01916b2813b199dd2c68->leave($__internal_f8f225ea632e5d33abe0b9c456bca6c3220518908e1b01916b2813b199dd2c68_prof);

        
        $__internal_9d6c2ef0cbf8ab5e2afac75717cacf9b5b24f01b0557a45afe7f80b99dd5f27d->leave($__internal_9d6c2ef0cbf8ab5e2afac75717cacf9b5b24f01b0557a45afe7f80b99dd5f27d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa04065ffb9e94455174d2bf816de3ba0f29792376db44c8147d5ad498dcb3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa04065ffb9e94455174d2bf816de3ba0f29792376db44c8147d5ad498dcb3fc->enter($__internal_aa04065ffb9e94455174d2bf816de3ba0f29792376db44c8147d5ad498dcb3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c9ceb758e15092e0426cc41bba7d1a2b2222671925d79175ea0ef6042623cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9ceb758e15092e0426cc41bba7d1a2b2222671925d79175ea0ef6042623cd8->enter($__internal_8c9ceb758e15092e0426cc41bba7d1a2b2222671925d79175ea0ef6042623cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c9ceb758e15092e0426cc41bba7d1a2b2222671925d79175ea0ef6042623cd8->leave($__internal_8c9ceb758e15092e0426cc41bba7d1a2b2222671925d79175ea0ef6042623cd8_prof);

        
        $__internal_aa04065ffb9e94455174d2bf816de3ba0f29792376db44c8147d5ad498dcb3fc->leave($__internal_aa04065ffb9e94455174d2bf816de3ba0f29792376db44c8147d5ad498dcb3fc_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e482f5790faa2d1a0e73dc3d489134d0e19bf6d16b039a2a003e15a9931f9d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e482f5790faa2d1a0e73dc3d489134d0e19bf6d16b039a2a003e15a9931f9d05->enter($__internal_e482f5790faa2d1a0e73dc3d489134d0e19bf6d16b039a2a003e15a9931f9d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3342bf05be50b17a699f62f0d7f1afb69440957df5da33c1ac79d5c15d5df95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3342bf05be50b17a699f62f0d7f1afb69440957df5da33c1ac79d5c15d5df95d->enter($__internal_3342bf05be50b17a699f62f0d7f1afb69440957df5da33c1ac79d5c15d5df95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3342bf05be50b17a699f62f0d7f1afb69440957df5da33c1ac79d5c15d5df95d->leave($__internal_3342bf05be50b17a699f62f0d7f1afb69440957df5da33c1ac79d5c15d5df95d_prof);

        
        $__internal_e482f5790faa2d1a0e73dc3d489134d0e19bf6d16b039a2a003e15a9931f9d05->leave($__internal_e482f5790faa2d1a0e73dc3d489134d0e19bf6d16b039a2a003e15a9931f9d05_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d14cab5fa9e3526a6472969b970cc9ca860660643d7462361ffe5eee9b27ac9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14cab5fa9e3526a6472969b970cc9ca860660643d7462361ffe5eee9b27ac9c->enter($__internal_d14cab5fa9e3526a6472969b970cc9ca860660643d7462361ffe5eee9b27ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee55d2ecc0ea60b8b2d3908267a46206f1e46a18e3f9366bb2bb41e515456491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee55d2ecc0ea60b8b2d3908267a46206f1e46a18e3f9366bb2bb41e515456491->enter($__internal_ee55d2ecc0ea60b8b2d3908267a46206f1e46a18e3f9366bb2bb41e515456491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_ee55d2ecc0ea60b8b2d3908267a46206f1e46a18e3f9366bb2bb41e515456491->leave($__internal_ee55d2ecc0ea60b8b2d3908267a46206f1e46a18e3f9366bb2bb41e515456491_prof);

        
        $__internal_d14cab5fa9e3526a6472969b970cc9ca860660643d7462361ffe5eee9b27ac9c->leave($__internal_d14cab5fa9e3526a6472969b970cc9ca860660643d7462361ffe5eee9b27ac9c_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselProduct:edit.html.twig";
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
", "ShopBundle:CarouselProduct:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselProduct/edit.html.twig");
    }
}
