<?php

/* ModerateReviewBundle:Default:index.html.twig */
class __TwigTemplate_60e2f04ce180d985592cdd7d4a7346be49fe54d27b0b851cec3b05a06c826c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ModerateReviewBundle:Default:index.html.twig", 1);
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
        $__internal_24aae3e34f31b01d7d203c3ee15b7133bd4305195b91da4f4c84cac60e71e506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24aae3e34f31b01d7d203c3ee15b7133bd4305195b91da4f4c84cac60e71e506->enter($__internal_24aae3e34f31b01d7d203c3ee15b7133bd4305195b91da4f4c84cac60e71e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModerateReviewBundle:Default:index.html.twig"));

        $__internal_5719a614846662742cb7fb249f2d17534ae4cbd329e21460e965219ddb7cf9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5719a614846662742cb7fb249f2d17534ae4cbd329e21460e965219ddb7cf9b3->enter($__internal_5719a614846662742cb7fb249f2d17534ae4cbd329e21460e965219ddb7cf9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModerateReviewBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24aae3e34f31b01d7d203c3ee15b7133bd4305195b91da4f4c84cac60e71e506->leave($__internal_24aae3e34f31b01d7d203c3ee15b7133bd4305195b91da4f4c84cac60e71e506_prof);

        
        $__internal_5719a614846662742cb7fb249f2d17534ae4cbd329e21460e965219ddb7cf9b3->leave($__internal_5719a614846662742cb7fb249f2d17534ae4cbd329e21460e965219ddb7cf9b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_055a37a6009e1a90331b5d9f8bb62bf047aef3cf53a1b794994519ebd49ced36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055a37a6009e1a90331b5d9f8bb62bf047aef3cf53a1b794994519ebd49ced36->enter($__internal_055a37a6009e1a90331b5d9f8bb62bf047aef3cf53a1b794994519ebd49ced36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79d4a48aa812077dc331bcdde0b62c344bb1e6d68a0bbcd760b92ab8157c9eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d4a48aa812077dc331bcdde0b62c344bb1e6d68a0bbcd760b92ab8157c9eac->enter($__internal_79d4a48aa812077dc331bcdde0b62c344bb1e6d68a0bbcd760b92ab8157c9eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79d4a48aa812077dc331bcdde0b62c344bb1e6d68a0bbcd760b92ab8157c9eac->leave($__internal_79d4a48aa812077dc331bcdde0b62c344bb1e6d68a0bbcd760b92ab8157c9eac_prof);

        
        $__internal_055a37a6009e1a90331b5d9f8bb62bf047aef3cf53a1b794994519ebd49ced36->leave($__internal_055a37a6009e1a90331b5d9f8bb62bf047aef3cf53a1b794994519ebd49ced36_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38dd4716f11af117401d7f62f8e277a0025473e1d682c963e897b60de2c6f0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38dd4716f11af117401d7f62f8e277a0025473e1d682c963e897b60de2c6f0f5->enter($__internal_38dd4716f11af117401d7f62f8e277a0025473e1d682c963e897b60de2c6f0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65a68ab20cf8a11b6d3627863eac6323f4ca7ad9fccea31c94632c2261026c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a68ab20cf8a11b6d3627863eac6323f4ca7ad9fccea31c94632c2261026c4d->enter($__internal_65a68ab20cf8a11b6d3627863eac6323f4ca7ad9fccea31c94632c2261026c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_65a68ab20cf8a11b6d3627863eac6323f4ca7ad9fccea31c94632c2261026c4d->leave($__internal_65a68ab20cf8a11b6d3627863eac6323f4ca7ad9fccea31c94632c2261026c4d_prof);

        
        $__internal_38dd4716f11af117401d7f62f8e277a0025473e1d682c963e897b60de2c6f0f5->leave($__internal_38dd4716f11af117401d7f62f8e277a0025473e1d682c963e897b60de2c6f0f5_prof);

    }

    public function getTemplateName()
    {
        return "ModerateReviewBundle:Default:index.html.twig";
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
{% endblock %}", "ModerateReviewBundle:Default:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ModerateReviewBundle/Resources/views/Default/index.html.twig");
    }
}
