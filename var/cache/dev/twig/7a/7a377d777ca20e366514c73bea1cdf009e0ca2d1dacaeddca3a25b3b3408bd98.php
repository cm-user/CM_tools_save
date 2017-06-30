<?php

/* @FaultyProduct/faulty/edit.html.twig */
class __TwigTemplate_8e88067accd64a0e65ddd9004121e47dda2ac51cf78e2291bccc5a5762f65458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faulty/edit.html.twig", 1);
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
        $__internal_b5fb6bf6200e4d538d4887a839af45237187cbdd4302b1e803b329f70942614e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fb6bf6200e4d538d4887a839af45237187cbdd4302b1e803b329f70942614e->enter($__internal_b5fb6bf6200e4d538d4887a839af45237187cbdd4302b1e803b329f70942614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faulty/edit.html.twig"));

        $__internal_96fd153068141db000ec4df9ae5fc98807c3f52ca8d64d67593676ffe3a7d010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fd153068141db000ec4df9ae5fc98807c3f52ca8d64d67593676ffe3a7d010->enter($__internal_96fd153068141db000ec4df9ae5fc98807c3f52ca8d64d67593676ffe3a7d010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faulty/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fb6bf6200e4d538d4887a839af45237187cbdd4302b1e803b329f70942614e->leave($__internal_b5fb6bf6200e4d538d4887a839af45237187cbdd4302b1e803b329f70942614e_prof);

        
        $__internal_96fd153068141db000ec4df9ae5fc98807c3f52ca8d64d67593676ffe3a7d010->leave($__internal_96fd153068141db000ec4df9ae5fc98807c3f52ca8d64d67593676ffe3a7d010_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ec87027bd74356e811d7fa0435f0164505b0f2f0aecf4f6cc6bc213a7f41a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ec87027bd74356e811d7fa0435f0164505b0f2f0aecf4f6cc6bc213a7f41a0->enter($__internal_13ec87027bd74356e811d7fa0435f0164505b0f2f0aecf4f6cc6bc213a7f41a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6010028257eb88d12cc9dbda8da51cf2a2201a36770fe8e1e9f86ee9023b6858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6010028257eb88d12cc9dbda8da51cf2a2201a36770fe8e1e9f86ee9023b6858->enter($__internal_6010028257eb88d12cc9dbda8da51cf2a2201a36770fe8e1e9f86ee9023b6858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier le défectueux</h1>

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

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_6010028257eb88d12cc9dbda8da51cf2a2201a36770fe8e1e9f86ee9023b6858->leave($__internal_6010028257eb88d12cc9dbda8da51cf2a2201a36770fe8e1e9f86ee9023b6858_prof);

        
        $__internal_13ec87027bd74356e811d7fa0435f0164505b0f2f0aecf4f6cc6bc213a7f41a0->leave($__internal_13ec87027bd74356e811d7fa0435f0164505b0f2f0aecf4f6cc6bc213a7f41a0_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3fd913ec98d3f68e1b50f6d1ff0cda7eee7c53729ed138460719a9bc92d322d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fd913ec98d3f68e1b50f6d1ff0cda7eee7c53729ed138460719a9bc92d322d->enter($__internal_b3fd913ec98d3f68e1b50f6d1ff0cda7eee7c53729ed138460719a9bc92d322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_afe6907aac567d1c822436cfc1fccb89778c544cb77c6b047c5765d04a9f6cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe6907aac567d1c822436cfc1fccb89778c544cb77c6b047c5765d04a9f6cda->enter($__internal_afe6907aac567d1c822436cfc1fccb89778c544cb77c6b047c5765d04a9f6cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_afe6907aac567d1c822436cfc1fccb89778c544cb77c6b047c5765d04a9f6cda->leave($__internal_afe6907aac567d1c822436cfc1fccb89778c544cb77c6b047c5765d04a9f6cda_prof);

        
        $__internal_b3fd913ec98d3f68e1b50f6d1ff0cda7eee7c53729ed138460719a9bc92d322d->leave($__internal_b3fd913ec98d3f68e1b50f6d1ff0cda7eee7c53729ed138460719a9bc92d322d_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faulty/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  130 => 40,  126 => 39,  122 => 38,  117 => 37,  108 => 36,  95 => 32,  90 => 30,  84 => 27,  63 => 9,  58 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Modifier le défectueux</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
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

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('faulty_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/faultyproduct/js/jquery.collection.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/app.js') }}\"></script>
{% endblock %}", "@FaultyProduct/faulty/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faulty\\edit.html.twig");
    }
}
