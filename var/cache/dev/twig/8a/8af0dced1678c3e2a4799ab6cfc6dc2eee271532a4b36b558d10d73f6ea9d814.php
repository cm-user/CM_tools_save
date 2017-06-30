<?php

/* ShopBundle:Carousel:index.html.twig */
class __TwigTemplate_33b63001c2f4c5377b27f52e24b12612d94372cd720102a6092a8c0c04594816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:Carousel:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_976a49240c73a5a34d1ce8b5676f3c4f6a407892dd716a02421e3d82a9a3e302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976a49240c73a5a34d1ce8b5676f3c4f6a407892dd716a02421e3d82a9a3e302->enter($__internal_976a49240c73a5a34d1ce8b5676f3c4f6a407892dd716a02421e3d82a9a3e302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Carousel:index.html.twig"));

        $__internal_a8464fc261d937e3019240956a3d4fc93cbfaea7b00b5692412f18ab5e6ca819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8464fc261d937e3019240956a3d4fc93cbfaea7b00b5692412f18ab5e6ca819->enter($__internal_a8464fc261d937e3019240956a3d4fc93cbfaea7b00b5692412f18ab5e6ca819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Carousel:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976a49240c73a5a34d1ce8b5676f3c4f6a407892dd716a02421e3d82a9a3e302->leave($__internal_976a49240c73a5a34d1ce8b5676f3c4f6a407892dd716a02421e3d82a9a3e302_prof);

        
        $__internal_a8464fc261d937e3019240956a3d4fc93cbfaea7b00b5692412f18ab5e6ca819->leave($__internal_a8464fc261d937e3019240956a3d4fc93cbfaea7b00b5692412f18ab5e6ca819_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66797da5a65e50d3ffba0e27a955de8faf3854dcd4319802d3c504db259aac04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66797da5a65e50d3ffba0e27a955de8faf3854dcd4319802d3c504db259aac04->enter($__internal_66797da5a65e50d3ffba0e27a955de8faf3854dcd4319802d3c504db259aac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c286656ba9a0514baba7f3dcffcb2c22ee353ed2fc96dcb9868e4be029e8ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c286656ba9a0514baba7f3dcffcb2c22ee353ed2fc96dcb9868e4be029e8ffb->enter($__internal_1c286656ba9a0514baba7f3dcffcb2c22ee353ed2fc96dcb9868e4be029e8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trier les items</h1>
    <p>Le tri s'effectu en Drag & Drop !</p>

    ";
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@Shop/Form/field.html.twig"));
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Trier !\" /></p>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_1c286656ba9a0514baba7f3dcffcb2c22ee353ed2fc96dcb9868e4be029e8ffb->leave($__internal_1c286656ba9a0514baba7f3dcffcb2c22ee353ed2fc96dcb9868e4be029e8ffb_prof);

        
        $__internal_66797da5a65e50d3ffba0e27a955de8faf3854dcd4319802d3c504db259aac04->leave($__internal_66797da5a65e50d3ffba0e27a955de8faf3854dcd4319802d3c504db259aac04_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c1a8d91986997c1534f3236cf15e4b6e40e8f077989bb96e0059f4d401ffd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1a8d91986997c1534f3236cf15e4b6e40e8f077989bb96e0059f4d401ffd41->enter($__internal_5c1a8d91986997c1534f3236cf15e4b6e40e8f077989bb96e0059f4d401ffd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5fb859c8ea2f5a2a8161968eb96fc7aa0a0664c32f84822d1dcd0da8e4f097d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fb859c8ea2f5a2a8161968eb96fc7aa0a0664c32f84822d1dcd0da8e4f097d->enter($__internal_a5fb859c8ea2f5a2a8161968eb96fc7aa0a0664c32f84822d1dcd0da8e4f097d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        .collection-actions{display:none;}
    </style>
";
        
        $__internal_a5fb859c8ea2f5a2a8161968eb96fc7aa0a0664c32f84822d1dcd0da8e4f097d->leave($__internal_a5fb859c8ea2f5a2a8161968eb96fc7aa0a0664c32f84822d1dcd0da8e4f097d_prof);

        
        $__internal_5c1a8d91986997c1534f3236cf15e4b6e40e8f077989bb96e0059f4d401ffd41->leave($__internal_5c1a8d91986997c1534f3236cf15e4b6e40e8f077989bb96e0059f4d401ffd41_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9421b20903dc6e354fc115f2453404ccfbb1f107a0481db5bd65ff534df5f2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9421b20903dc6e354fc115f2453404ccfbb1f107a0481db5bd65ff534df5f2f3->enter($__internal_9421b20903dc6e354fc115f2453404ccfbb1f107a0481db5bd65ff534df5f2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a0374d408657754bf57883e4b58bba1a9767d8ce20d7ff8189bd60a731adffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0374d408657754bf57883e4b58bba1a9767d8ce20d7ff8189bd60a731adffb->enter($__internal_0a0374d408657754bf57883e4b58bba1a9767d8ce20d7ff8189bd60a731adffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.my-selector').collection({
            drag_drop: true,
            drag_drop_options: {
                placeholder: 'ui-state-highlight'
            }
        });
    </script>
";
        
        $__internal_0a0374d408657754bf57883e4b58bba1a9767d8ce20d7ff8189bd60a731adffb->leave($__internal_0a0374d408657754bf57883e4b58bba1a9767d8ce20d7ff8189bd60a731adffb_prof);

        
        $__internal_9421b20903dc6e354fc115f2453404ccfbb1f107a0481db5bd65ff534df5f2f3->leave($__internal_9421b20903dc6e354fc115f2453404ccfbb1f107a0481db5bd65ff534df5f2f3_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Carousel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  113 => 23,  104 => 22,  90 => 16,  81 => 15,  68 => 11,  63 => 9,  58 => 8,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Trier les items</h1>
    <p>Le tri s'effectu en Drag & Drop !</p>

    {% form_theme form '@Shop/Form/field.html.twig' %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Trier !\" /></p>
    {{ form_end(form) }}

{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        .collection-actions{display:none;}
    </style>
{% endblock %}

{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"{{ asset('bundles/shop/js/jquery.collection.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.my-selector').collection({
            drag_drop: true,
            drag_drop_options: {
                placeholder: 'ui-state-highlight'
            }
        });
    </script>
{% endblock %}
", "ShopBundle:Carousel:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/Carousel/index.html.twig");
    }
}
