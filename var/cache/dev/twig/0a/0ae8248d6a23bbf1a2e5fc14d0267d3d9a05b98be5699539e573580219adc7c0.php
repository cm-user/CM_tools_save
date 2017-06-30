<?php

/* @Marketing/newsletter/edit.html.twig */
class __TwigTemplate_7cd9ec05bc2bda54b323126d1e7d3136323fb55c766e4b54f98f7d050b8801c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletter/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf538eea91aff45a192c3022239374627c814f196941bb1af0484b7725c1a752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf538eea91aff45a192c3022239374627c814f196941bb1af0484b7725c1a752->enter($__internal_cf538eea91aff45a192c3022239374627c814f196941bb1af0484b7725c1a752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/edit.html.twig"));

        $__internal_5aa0f9cd08fc7ff41eb771951cf558e794427be85e0b44a6877bfb7ac265269a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa0f9cd08fc7ff41eb771951cf558e794427be85e0b44a6877bfb7ac265269a->enter($__internal_5aa0f9cd08fc7ff41eb771951cf558e794427be85e0b44a6877bfb7ac265269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf538eea91aff45a192c3022239374627c814f196941bb1af0484b7725c1a752->leave($__internal_cf538eea91aff45a192c3022239374627c814f196941bb1af0484b7725c1a752_prof);

        
        $__internal_5aa0f9cd08fc7ff41eb771951cf558e794427be85e0b44a6877bfb7ac265269a->leave($__internal_5aa0f9cd08fc7ff41eb771951cf558e794427be85e0b44a6877bfb7ac265269a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c25280fb270c50bbe49aac79faff49816f5dbd927f6981354286b7adcdc850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c25280fb270c50bbe49aac79faff49816f5dbd927f6981354286b7adcdc850->enter($__internal_a5c25280fb270c50bbe49aac79faff49816f5dbd927f6981354286b7adcdc850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08f07f71ba13490c6aa0ded165ff4b44a2546e4b831320e6c521d61b653aee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f07f71ba13490c6aa0ded165ff4b44a2546e4b831320e6c521d61b653aee4c->enter($__internal_08f07f71ba13490c6aa0ded165ff4b44a2546e4b831320e6c521d61b653aee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter edit</h1>

    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "@Marketing/Form/field.html.twig"));
        // line 7
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <div id=\"searchProduct\" class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"title\"></h4>
                </div>
                <div class=\"modal-body\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_08f07f71ba13490c6aa0ded165ff4b44a2546e4b831320e6c521d61b653aee4c->leave($__internal_08f07f71ba13490c6aa0ded165ff4b44a2546e4b831320e6c521d61b653aee4c_prof);

        
        $__internal_a5c25280fb270c50bbe49aac79faff49816f5dbd927f6981354286b7adcdc850->leave($__internal_a5c25280fb270c50bbe49aac79faff49816f5dbd927f6981354286b7adcdc850_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f99e1ea6a3ecba4381f5a8a0be79d86b055e283a9d586abb08536bf09d418a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99e1ea6a3ecba4381f5a8a0be79d86b055e283a9d586abb08536bf09d418a10->enter($__internal_f99e1ea6a3ecba4381f5a8a0be79d86b055e283a9d586abb08536bf09d418a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f97ea7c2b9f285c7ec45dee5dd398b5483e477342fa6362917706027aa5689e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f97ea7c2b9f285c7ec45dee5dd398b5483e477342fa6362917706027aa5689e->enter($__internal_7f97ea7c2b9f285c7ec45dee5dd398b5483e477342fa6362917706027aa5689e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7f97ea7c2b9f285c7ec45dee5dd398b5483e477342fa6362917706027aa5689e->leave($__internal_7f97ea7c2b9f285c7ec45dee5dd398b5483e477342fa6362917706027aa5689e_prof);

        
        $__internal_f99e1ea6a3ecba4381f5a8a0be79d86b055e283a9d586abb08536bf09d418a10->leave($__internal_f99e1ea6a3ecba4381f5a8a0be79d86b055e283a9d586abb08536bf09d418a10_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletter/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  135 => 43,  131 => 42,  127 => 41,  122 => 40,  113 => 39,  99 => 34,  94 => 32,  88 => 29,  66 => 10,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Newsletter edit</h1>

    {% form_theme edit_form '@Marketing/Form/field.html.twig' %}
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
    {{ form_end(edit_form) }}

    <div id=\"searchProduct\" class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"title\"></h4>
                </div>
                <div class=\"modal-body\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('newsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/marketing/js/jquery.collection.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/marketing/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/marketing/js/app.js') }}\"></script>
{% endblock %}
", "@Marketing/newsletter/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletter\\edit.html.twig");
    }
}
