<?php

/* @ModerateReview/Default/index.html.twig */
class __TwigTemplate_ca4458e054fe3c3eaad781758ff6fc5501f111e033caea50f00ec3e555e7fb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@ModerateReview/Default/index.html.twig", 1);
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
        $__internal_e7905d11a5d4e2764e123f6bf0bb351c2ee453862c6556ef6d85c0f79f477f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7905d11a5d4e2764e123f6bf0bb351c2ee453862c6556ef6d85c0f79f477f56->enter($__internal_e7905d11a5d4e2764e123f6bf0bb351c2ee453862c6556ef6d85c0f79f477f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ModerateReview/Default/index.html.twig"));

        $__internal_4e7a45e2533e26dfe22e5e0bc3f66a8056c72931f8542042c72ef7c798b77975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a45e2533e26dfe22e5e0bc3f66a8056c72931f8542042c72ef7c798b77975->enter($__internal_4e7a45e2533e26dfe22e5e0bc3f66a8056c72931f8542042c72ef7c798b77975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ModerateReview/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7905d11a5d4e2764e123f6bf0bb351c2ee453862c6556ef6d85c0f79f477f56->leave($__internal_e7905d11a5d4e2764e123f6bf0bb351c2ee453862c6556ef6d85c0f79f477f56_prof);

        
        $__internal_4e7a45e2533e26dfe22e5e0bc3f66a8056c72931f8542042c72ef7c798b77975->leave($__internal_4e7a45e2533e26dfe22e5e0bc3f66a8056c72931f8542042c72ef7c798b77975_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83da7b1a9773369cd96348ee3c2a5f2806fe525fa18ccac36c32713ed7b8dd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83da7b1a9773369cd96348ee3c2a5f2806fe525fa18ccac36c32713ed7b8dd49->enter($__internal_83da7b1a9773369cd96348ee3c2a5f2806fe525fa18ccac36c32713ed7b8dd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db638320bc18ca1eacf37aabe8db54b8afc1ec405b7f617071c75f31dff93a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db638320bc18ca1eacf37aabe8db54b8afc1ec405b7f617071c75f31dff93a7f->enter($__internal_db638320bc18ca1eacf37aabe8db54b8afc1ec405b7f617071c75f31dff93a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppression avis client</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

    <div id=\"info_order\" class=\"alert alert-info\" role=\"alert\" style=\"display: none\">
        <p id=\"id\"></p>
        <p id=\"name\"></p>
        <p id=\"mail\"></p>
        <p id=\"date\"></p>
        <p id=\"support\"></p>
        <input type=\"hidden\" id=\"id_order\" name=\"id_order\" value=\"\"/>
        <button>Confirmer suppression avis</button>
    </div>

    <div id=\"error_order\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\">
        La commande n'existe pas !
    </div>

    <div id=\"deleted_order\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\">
        L'avis client à bien été supprimé
    </div>

    <div id=\"already_deleted_order\" class=\"alert alert-warning\" role=\"alert\" style=\"display: none\">
        L'avis client à déjà été supprimé
    </div>


";
        
        $__internal_db638320bc18ca1eacf37aabe8db54b8afc1ec405b7f617071c75f31dff93a7f->leave($__internal_db638320bc18ca1eacf37aabe8db54b8afc1ec405b7f617071c75f31dff93a7f_prof);

        
        $__internal_83da7b1a9773369cd96348ee3c2a5f2806fe525fa18ccac36c32713ed7b8dd49->leave($__internal_83da7b1a9773369cd96348ee3c2a5f2806fe525fa18ccac36c32713ed7b8dd49_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea20513e28fecacbf8d2ed5893563c4448f1bf5a1d18d7d8f3205040aeb04370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea20513e28fecacbf8d2ed5893563c4448f1bf5a1d18d7d8f3205040aeb04370->enter($__internal_ea20513e28fecacbf8d2ed5893563c4448f1bf5a1d18d7d8f3205040aeb04370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f593e2ec94b3546d2986fd9c304ba6425e458c0fabaa31fa50a72b1cad2eb540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f593e2ec94b3546d2986fd9c304ba6425e458c0fabaa31fa50a72b1cad2eb540->enter($__internal_f593e2ec94b3546d2986fd9c304ba6425e458c0fabaa31fa50a72b1cad2eb540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    <script type=\"application/javascript\">
        \$(document).ready(function () {

            \$('#delete_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moderate_review_order");
        echo "',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.id != 0) {
                        \$(\"#info_order #id\").html(data.id);
                        \$(\"#info_order #id_order\").val(data.id);
                        \$(\"#info_order #name\").html(data.name + \" \" + data.surname);
                        \$(\"#info_order #mail\").html(data.mail);
                        \$(\"#info_order #date\").html(data.date_add);
                        if(data.id%2 == 0){
                            \$(\"#info_order #support\").html(\"Trustpilot\");
                        }else{
                            \$(\"#info_order #support\").html(\"eKomi\");
                        }
                        \$(\"#info_order\").show();
                    }else{
                        \$(\"#error_order\").show();
                    }
                });
            });
            \$('#info_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moderate_review_delete");
        echo "',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.status == 1){
                        \$(\"#deleted_order\").show();
                    }else if(data.status == 2){
                        \$(\"#already_deleted_order\").show();
                    }
                });
            });
        });
    </script>
";
        
        $__internal_f593e2ec94b3546d2986fd9c304ba6425e458c0fabaa31fa50a72b1cad2eb540->leave($__internal_f593e2ec94b3546d2986fd9c304ba6425e458c0fabaa31fa50a72b1cad2eb540_prof);

        
        $__internal_ea20513e28fecacbf8d2ed5893563c4448f1bf5a1d18d7d8f3205040aeb04370->leave($__internal_ea20513e28fecacbf8d2ed5893563c4448f1bf5a1d18d7d8f3205040aeb04370_prof);

    }

    public function getTemplateName()
    {
        return "@ModerateReview/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  112 => 45,  99 => 34,  90 => 33,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Suppression avis client</h1>

    {{ form(form) }}

    <div id=\"info_order\" class=\"alert alert-info\" role=\"alert\" style=\"display: none\">
        <p id=\"id\"></p>
        <p id=\"name\"></p>
        <p id=\"mail\"></p>
        <p id=\"date\"></p>
        <p id=\"support\"></p>
        <input type=\"hidden\" id=\"id_order\" name=\"id_order\" value=\"\"/>
        <button>Confirmer suppression avis</button>
    </div>

    <div id=\"error_order\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\">
        La commande n'existe pas !
    </div>

    <div id=\"deleted_order\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\">
        L'avis client à bien été supprimé
    </div>

    <div id=\"already_deleted_order\" class=\"alert alert-warning\" role=\"alert\" style=\"display: none\">
        L'avis client à déjà été supprimé
    </div>


{% endblock %}

{%  block javascripts %}
    <script type=\"application/javascript\">
        \$(document).ready(function () {

            \$('#delete_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '{{ path(\"moderate_review_order\") }}',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.id != 0) {
                        \$(\"#info_order #id\").html(data.id);
                        \$(\"#info_order #id_order\").val(data.id);
                        \$(\"#info_order #name\").html(data.name + \" \" + data.surname);
                        \$(\"#info_order #mail\").html(data.mail);
                        \$(\"#info_order #date\").html(data.date_add);
                        if(data.id%2 == 0){
                            \$(\"#info_order #support\").html(\"Trustpilot\");
                        }else{
                            \$(\"#info_order #support\").html(\"eKomi\");
                        }
                        \$(\"#info_order\").show();
                    }else{
                        \$(\"#error_order\").show();
                    }
                });
            });
            \$('#info_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '{{ path(\"moderate_review_delete\") }}',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.status == 1){
                        \$(\"#deleted_order\").show();
                    }else if(data.status == 2){
                        \$(\"#already_deleted_order\").show();
                    }
                });
            });
        });
    </script>
{% endblock %}", "@ModerateReview/Default/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ModerateReviewBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
