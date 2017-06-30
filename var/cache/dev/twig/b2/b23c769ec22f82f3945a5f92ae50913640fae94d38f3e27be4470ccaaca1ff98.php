<?php

/* @Shop/Carousel/index.html.twig */
class __TwigTemplate_3e5a722ca4bb216eea514bc151de5e872cdd5499d922ed0c3494de934cfd8c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/Carousel/index.html.twig", 1);
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
        $__internal_58ef283a86379e39110d76e6ff50a0ed0d01bdcaf1346ea10bec655abae60077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ef283a86379e39110d76e6ff50a0ed0d01bdcaf1346ea10bec655abae60077->enter($__internal_58ef283a86379e39110d76e6ff50a0ed0d01bdcaf1346ea10bec655abae60077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Carousel/index.html.twig"));

        $__internal_e86dced0228709800bc33d67403a2bdb08236d1522adfa16b8883f9493f212b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86dced0228709800bc33d67403a2bdb08236d1522adfa16b8883f9493f212b3->enter($__internal_e86dced0228709800bc33d67403a2bdb08236d1522adfa16b8883f9493f212b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Carousel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ef283a86379e39110d76e6ff50a0ed0d01bdcaf1346ea10bec655abae60077->leave($__internal_58ef283a86379e39110d76e6ff50a0ed0d01bdcaf1346ea10bec655abae60077_prof);

        
        $__internal_e86dced0228709800bc33d67403a2bdb08236d1522adfa16b8883f9493f212b3->leave($__internal_e86dced0228709800bc33d67403a2bdb08236d1522adfa16b8883f9493f212b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10885868c815ccbcaa8e6f3a56698440c57585fae894f9664854d3bea763f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10885868c815ccbcaa8e6f3a56698440c57585fae894f9664854d3bea763f78->enter($__internal_a10885868c815ccbcaa8e6f3a56698440c57585fae894f9664854d3bea763f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_127ffe0ab771a2fbba46067f35de2f54602b8982dbd8ee08fa68aca563e4c3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127ffe0ab771a2fbba46067f35de2f54602b8982dbd8ee08fa68aca563e4c3de->enter($__internal_127ffe0ab771a2fbba46067f35de2f54602b8982dbd8ee08fa68aca563e4c3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_127ffe0ab771a2fbba46067f35de2f54602b8982dbd8ee08fa68aca563e4c3de->leave($__internal_127ffe0ab771a2fbba46067f35de2f54602b8982dbd8ee08fa68aca563e4c3de_prof);

        
        $__internal_a10885868c815ccbcaa8e6f3a56698440c57585fae894f9664854d3bea763f78->leave($__internal_a10885868c815ccbcaa8e6f3a56698440c57585fae894f9664854d3bea763f78_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_627fbfcaf94757247b88aea807e023c414b97d1099cc1a1fb21707c89f6ac7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627fbfcaf94757247b88aea807e023c414b97d1099cc1a1fb21707c89f6ac7d2->enter($__internal_627fbfcaf94757247b88aea807e023c414b97d1099cc1a1fb21707c89f6ac7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0245da1e45bb6103a3fc0ac990c9996e2c629bae0415f50dec31025e61d3310b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0245da1e45bb6103a3fc0ac990c9996e2c629bae0415f50dec31025e61d3310b->enter($__internal_0245da1e45bb6103a3fc0ac990c9996e2c629bae0415f50dec31025e61d3310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        .collection-actions{display:none;}
    </style>
";
        
        $__internal_0245da1e45bb6103a3fc0ac990c9996e2c629bae0415f50dec31025e61d3310b->leave($__internal_0245da1e45bb6103a3fc0ac990c9996e2c629bae0415f50dec31025e61d3310b_prof);

        
        $__internal_627fbfcaf94757247b88aea807e023c414b97d1099cc1a1fb21707c89f6ac7d2->leave($__internal_627fbfcaf94757247b88aea807e023c414b97d1099cc1a1fb21707c89f6ac7d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62da081e96905e4fdaaa4d817d71ddf23d3bafa9b29ff9de932453fc2d61d3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62da081e96905e4fdaaa4d817d71ddf23d3bafa9b29ff9de932453fc2d61d3bf->enter($__internal_62da081e96905e4fdaaa4d817d71ddf23d3bafa9b29ff9de932453fc2d61d3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14cf163b8bc4b63c87ab64785effcae1035c8acb8f5f424c302d61b32f9b0dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cf163b8bc4b63c87ab64785effcae1035c8acb8f5f424c302d61b32f9b0dc3->enter($__internal_14cf163b8bc4b63c87ab64785effcae1035c8acb8f5f424c302d61b32f9b0dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_14cf163b8bc4b63c87ab64785effcae1035c8acb8f5f424c302d61b32f9b0dc3->leave($__internal_14cf163b8bc4b63c87ab64785effcae1035c8acb8f5f424c302d61b32f9b0dc3_prof);

        
        $__internal_62da081e96905e4fdaaa4d817d71ddf23d3bafa9b29ff9de932453fc2d61d3bf->leave($__internal_62da081e96905e4fdaaa4d817d71ddf23d3bafa9b29ff9de932453fc2d61d3bf_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Carousel/index.html.twig";
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
", "@Shop/Carousel/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Carousel\\index.html.twig");
    }
}
