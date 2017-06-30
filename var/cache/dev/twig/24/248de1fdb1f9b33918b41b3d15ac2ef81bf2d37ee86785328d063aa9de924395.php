<?php

/* MarketingBundle:newsletter:edit.html.twig */
class __TwigTemplate_295599245835814b7b1626b8ab253f4a7097879decad94f27aac6e6daab376c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletter:edit.html.twig", 1);
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
        $__internal_a30b3febebebe36c1009b23bf9133bd0e0c28e5814e18626eb71a2ef779c4351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30b3febebebe36c1009b23bf9133bd0e0c28e5814e18626eb71a2ef779c4351->enter($__internal_a30b3febebebe36c1009b23bf9133bd0e0c28e5814e18626eb71a2ef779c4351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:edit.html.twig"));

        $__internal_6df9d63da59c1f3a02236740405b7e16ef63be5ec2fa02af89ba9b95dbf4bc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df9d63da59c1f3a02236740405b7e16ef63be5ec2fa02af89ba9b95dbf4bc95->enter($__internal_6df9d63da59c1f3a02236740405b7e16ef63be5ec2fa02af89ba9b95dbf4bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30b3febebebe36c1009b23bf9133bd0e0c28e5814e18626eb71a2ef779c4351->leave($__internal_a30b3febebebe36c1009b23bf9133bd0e0c28e5814e18626eb71a2ef779c4351_prof);

        
        $__internal_6df9d63da59c1f3a02236740405b7e16ef63be5ec2fa02af89ba9b95dbf4bc95->leave($__internal_6df9d63da59c1f3a02236740405b7e16ef63be5ec2fa02af89ba9b95dbf4bc95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76b467fb903b8313e3d5aad79b31381aae370e8ac64b3418e854c03f9ceb80b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b467fb903b8313e3d5aad79b31381aae370e8ac64b3418e854c03f9ceb80b6->enter($__internal_76b467fb903b8313e3d5aad79b31381aae370e8ac64b3418e854c03f9ceb80b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddb2a5cb5e5a828814877da885488dd019442bb64a7cdd569511d5365105bc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb2a5cb5e5a828814877da885488dd019442bb64a7cdd569511d5365105bc1c->enter($__internal_ddb2a5cb5e5a828814877da885488dd019442bb64a7cdd569511d5365105bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddb2a5cb5e5a828814877da885488dd019442bb64a7cdd569511d5365105bc1c->leave($__internal_ddb2a5cb5e5a828814877da885488dd019442bb64a7cdd569511d5365105bc1c_prof);

        
        $__internal_76b467fb903b8313e3d5aad79b31381aae370e8ac64b3418e854c03f9ceb80b6->leave($__internal_76b467fb903b8313e3d5aad79b31381aae370e8ac64b3418e854c03f9ceb80b6_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f91c50804db4c5019d622a85865d1cffb64e6af5038511aa7c927aeedc600fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f91c50804db4c5019d622a85865d1cffb64e6af5038511aa7c927aeedc600fe->enter($__internal_4f91c50804db4c5019d622a85865d1cffb64e6af5038511aa7c927aeedc600fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e3acab5f6313f724841ae4839d2af2d6f192c19c6c6a291f162aece22860d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3acab5f6313f724841ae4839d2af2d6f192c19c6c6a291f162aece22860d23->enter($__internal_2e3acab5f6313f724841ae4839d2af2d6f192c19c6c6a291f162aece22860d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2e3acab5f6313f724841ae4839d2af2d6f192c19c6c6a291f162aece22860d23->leave($__internal_2e3acab5f6313f724841ae4839d2af2d6f192c19c6c6a291f162aece22860d23_prof);

        
        $__internal_4f91c50804db4c5019d622a85865d1cffb64e6af5038511aa7c927aeedc600fe->leave($__internal_4f91c50804db4c5019d622a85865d1cffb64e6af5038511aa7c927aeedc600fe_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletter:edit.html.twig";
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
", "MarketingBundle:newsletter:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletter/edit.html.twig");
    }
}
