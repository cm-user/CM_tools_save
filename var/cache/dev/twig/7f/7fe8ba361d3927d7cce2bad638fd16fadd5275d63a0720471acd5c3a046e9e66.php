<?php

/* @Marketing/newsletter/new.html.twig */
class __TwigTemplate_e8a161b2ebe914dd287b19968da49224bc1c60dfd2fa82b41d5ea24dab4c7650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletter/new.html.twig", 1);
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
        $__internal_8ca0b0b2e4cbf74fc8355b8eab139b99a2bd66d47ae8760d95d0b28d3cab2c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca0b0b2e4cbf74fc8355b8eab139b99a2bd66d47ae8760d95d0b28d3cab2c5f->enter($__internal_8ca0b0b2e4cbf74fc8355b8eab139b99a2bd66d47ae8760d95d0b28d3cab2c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/new.html.twig"));

        $__internal_44278446200db7e4083782a6ffa7f3abaa1da4d51e798ccababe292ad2c5a118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44278446200db7e4083782a6ffa7f3abaa1da4d51e798ccababe292ad2c5a118->enter($__internal_44278446200db7e4083782a6ffa7f3abaa1da4d51e798ccababe292ad2c5a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ca0b0b2e4cbf74fc8355b8eab139b99a2bd66d47ae8760d95d0b28d3cab2c5f->leave($__internal_8ca0b0b2e4cbf74fc8355b8eab139b99a2bd66d47ae8760d95d0b28d3cab2c5f_prof);

        
        $__internal_44278446200db7e4083782a6ffa7f3abaa1da4d51e798ccababe292ad2c5a118->leave($__internal_44278446200db7e4083782a6ffa7f3abaa1da4d51e798ccababe292ad2c5a118_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ff2c3f9affd1d7b0a07ad6d44b6c72aec3e297fc5734fe66b9e10ce3ff4bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ff2c3f9affd1d7b0a07ad6d44b6c72aec3e297fc5734fe66b9e10ce3ff4bec->enter($__internal_25ff2c3f9affd1d7b0a07ad6d44b6c72aec3e297fc5734fe66b9e10ce3ff4bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8da0c747fd76cb6e1c4881a71113c99f0c8b79e860d84d0906d2371d6767ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8da0c747fd76cb6e1c4881a71113c99f0c8b79e860d84d0906d2371d6767ee7->enter($__internal_d8da0c747fd76cb6e1c4881a71113c99f0c8b79e860d84d0906d2371d6767ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter creation</h1>

    ";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@Marketing/Form/field.html.twig"));
        // line 7
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
    </ul>
";
        
        $__internal_d8da0c747fd76cb6e1c4881a71113c99f0c8b79e860d84d0906d2371d6767ee7->leave($__internal_d8da0c747fd76cb6e1c4881a71113c99f0c8b79e860d84d0906d2371d6767ee7_prof);

        
        $__internal_25ff2c3f9affd1d7b0a07ad6d44b6c72aec3e297fc5734fe66b9e10ce3ff4bec->leave($__internal_25ff2c3f9affd1d7b0a07ad6d44b6c72aec3e297fc5734fe66b9e10ce3ff4bec_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0ff56c8da25b805191d9850bda6853cd265c58b064f0c42edffbbf56af38e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ff56c8da25b805191d9850bda6853cd265c58b064f0c42edffbbf56af38e19->enter($__internal_d0ff56c8da25b805191d9850bda6853cd265c58b064f0c42edffbbf56af38e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_baabf74353f3cb78b8de92151d7f0487c306d9d13e1d35926ad32833f55c4bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baabf74353f3cb78b8de92151d7f0487c306d9d13e1d35926ad32833f55c4bd7->enter($__internal_baabf74353f3cb78b8de92151d7f0487c306d9d13e1d35926ad32833f55c4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/marketing/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_baabf74353f3cb78b8de92151d7f0487c306d9d13e1d35926ad32833f55c4bd7->leave($__internal_baabf74353f3cb78b8de92151d7f0487c306d9d13e1d35926ad32833f55c4bd7_prof);

        
        $__internal_d0ff56c8da25b805191d9850bda6853cd265c58b064f0c42edffbbf56af38e19->leave($__internal_d0ff56c8da25b805191d9850bda6853cd265c58b064f0c42edffbbf56af38e19_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletter/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  124 => 38,  120 => 37,  116 => 36,  111 => 35,  102 => 34,  88 => 29,  66 => 10,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Newsletter creation</h1>

    {% form_theme form '@Marketing/Form/field.html.twig' %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\" />
    {{ form_end(form) }}

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
    </ul>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/marketing/js/jquery.collection.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/marketing/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/marketing/js/app.js') }}\"></script>
{% endblock %}", "@Marketing/newsletter/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletter\\new.html.twig");
    }
}
