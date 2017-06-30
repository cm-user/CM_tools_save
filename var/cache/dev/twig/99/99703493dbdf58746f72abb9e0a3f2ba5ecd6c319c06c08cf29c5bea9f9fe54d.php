<?php

/* MarketingBundle:newsletter:new.html.twig */
class __TwigTemplate_bfcd1b0a8ee37cdffb5a3201f58a3c7c31aadca5213fcb4589619d870fba5440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletter:new.html.twig", 1);
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
        $__internal_04190064358509661f063ab938532fca24a69368ea3880496cae8d2bb3bfb953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04190064358509661f063ab938532fca24a69368ea3880496cae8d2bb3bfb953->enter($__internal_04190064358509661f063ab938532fca24a69368ea3880496cae8d2bb3bfb953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:new.html.twig"));

        $__internal_9decec8126009043d2896f2413dc664fd770b19e2c94b94e980ac92761f0b59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9decec8126009043d2896f2413dc664fd770b19e2c94b94e980ac92761f0b59f->enter($__internal_9decec8126009043d2896f2413dc664fd770b19e2c94b94e980ac92761f0b59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04190064358509661f063ab938532fca24a69368ea3880496cae8d2bb3bfb953->leave($__internal_04190064358509661f063ab938532fca24a69368ea3880496cae8d2bb3bfb953_prof);

        
        $__internal_9decec8126009043d2896f2413dc664fd770b19e2c94b94e980ac92761f0b59f->leave($__internal_9decec8126009043d2896f2413dc664fd770b19e2c94b94e980ac92761f0b59f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d951b3487823f01e7feedd7839dc67f6fe9836823ed4f0919f644d58e5b6e4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d951b3487823f01e7feedd7839dc67f6fe9836823ed4f0919f644d58e5b6e4be->enter($__internal_d951b3487823f01e7feedd7839dc67f6fe9836823ed4f0919f644d58e5b6e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dc68be546d62f8c246feabe9674e82754189c76f02a77c55c45ecd82e1d27c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc68be546d62f8c246feabe9674e82754189c76f02a77c55c45ecd82e1d27c4->enter($__internal_8dc68be546d62f8c246feabe9674e82754189c76f02a77c55c45ecd82e1d27c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8dc68be546d62f8c246feabe9674e82754189c76f02a77c55c45ecd82e1d27c4->leave($__internal_8dc68be546d62f8c246feabe9674e82754189c76f02a77c55c45ecd82e1d27c4_prof);

        
        $__internal_d951b3487823f01e7feedd7839dc67f6fe9836823ed4f0919f644d58e5b6e4be->leave($__internal_d951b3487823f01e7feedd7839dc67f6fe9836823ed4f0919f644d58e5b6e4be_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe1416c7590586f993c7cf6afb50ab415d51e96b15350ab7e0fc65b6d235596b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1416c7590586f993c7cf6afb50ab415d51e96b15350ab7e0fc65b6d235596b->enter($__internal_fe1416c7590586f993c7cf6afb50ab415d51e96b15350ab7e0fc65b6d235596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7cda3d79afe46fef76b978c934ffdf7882766ecf5c5791c063a12f58e68c1ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cda3d79afe46fef76b978c934ffdf7882766ecf5c5791c063a12f58e68c1ec1->enter($__internal_7cda3d79afe46fef76b978c934ffdf7882766ecf5c5791c063a12f58e68c1ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7cda3d79afe46fef76b978c934ffdf7882766ecf5c5791c063a12f58e68c1ec1->leave($__internal_7cda3d79afe46fef76b978c934ffdf7882766ecf5c5791c063a12f58e68c1ec1_prof);

        
        $__internal_fe1416c7590586f993c7cf6afb50ab415d51e96b15350ab7e0fc65b6d235596b->leave($__internal_fe1416c7590586f993c7cf6afb50ab415d51e96b15350ab7e0fc65b6d235596b_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletter:new.html.twig";
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
{% endblock %}", "MarketingBundle:newsletter:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletter/new.html.twig");
    }
}
