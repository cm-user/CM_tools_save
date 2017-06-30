<?php

/* @Shop/CarouselProduct/new.html.twig */
class __TwigTemplate_236f37cfec0b76874ead390cca221c62f442024d03b0eb3843ee6fbe23277e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselProduct/new.html.twig", 1);
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
        $__internal_7a8a1bec028c158e69821f35b136e9cab642c5dc251eab66b8e1a697b2578a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8a1bec028c158e69821f35b136e9cab642c5dc251eab66b8e1a697b2578a70->enter($__internal_7a8a1bec028c158e69821f35b136e9cab642c5dc251eab66b8e1a697b2578a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/new.html.twig"));

        $__internal_99593339df5d65748dd12f9149d40469cf6591f9cb6057db75b855b237fb737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99593339df5d65748dd12f9149d40469cf6591f9cb6057db75b855b237fb737f->enter($__internal_99593339df5d65748dd12f9149d40469cf6591f9cb6057db75b855b237fb737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8a1bec028c158e69821f35b136e9cab642c5dc251eab66b8e1a697b2578a70->leave($__internal_7a8a1bec028c158e69821f35b136e9cab642c5dc251eab66b8e1a697b2578a70_prof);

        
        $__internal_99593339df5d65748dd12f9149d40469cf6591f9cb6057db75b855b237fb737f->leave($__internal_99593339df5d65748dd12f9149d40469cf6591f9cb6057db75b855b237fb737f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33657db696cb07c17cea6108d1a417ac58fa965126742e12c18134025abbbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33657db696cb07c17cea6108d1a417ac58fa965126742e12c18134025abbbc6->enter($__internal_a33657db696cb07c17cea6108d1a417ac58fa965126742e12c18134025abbbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6c387897c80a97618e76548a030792cd5545bfcc76aa3a417f12268fb3eb8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c387897c80a97618e76548a030792cd5545bfcc76aa3a417f12268fb3eb8ad->enter($__internal_e6c387897c80a97618e76548a030792cd5545bfcc76aa3a417f12268fb3eb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter un produit au carrousel</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    ";
        // line 9
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

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_index");
        echo "\">
            Retour à la liste
        </a>
    </p>
";
        
        $__internal_e6c387897c80a97618e76548a030792cd5545bfcc76aa3a417f12268fb3eb8ad->leave($__internal_e6c387897c80a97618e76548a030792cd5545bfcc76aa3a417f12268fb3eb8ad_prof);

        
        $__internal_a33657db696cb07c17cea6108d1a417ac58fa965126742e12c18134025abbbc6->leave($__internal_a33657db696cb07c17cea6108d1a417ac58fa965126742e12c18134025abbbc6_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fed07f41fbcde08c79c60ea37182c77ba0c4861d95194cf3bf47cd5cc39caba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed07f41fbcde08c79c60ea37182c77ba0c4861d95194cf3bf47cd5cc39caba2->enter($__internal_fed07f41fbcde08c79c60ea37182c77ba0c4861d95194cf3bf47cd5cc39caba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c9ab9315515a7c3e51241dda23be6ee6169323a995cf1f93358f5b6626056c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9ab9315515a7c3e51241dda23be6ee6169323a995cf1f93358f5b6626056c3->enter($__internal_5c9ab9315515a7c3e51241dda23be6ee6169323a995cf1f93358f5b6626056c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
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
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/app_back.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5c9ab9315515a7c3e51241dda23be6ee6169323a995cf1f93358f5b6626056c3->leave($__internal_5c9ab9315515a7c3e51241dda23be6ee6169323a995cf1f93358f5b6626056c3_prof);

        
        $__internal_fed07f41fbcde08c79c60ea37182c77ba0c4861d95194cf3bf47cd5cc39caba2->leave($__internal_fed07f41fbcde08c79c60ea37182c77ba0c4861d95194cf3bf47cd5cc39caba2_prof);

    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c56b1710da59f1be14e39385af909c42585054db4e6ddf15324950b8beef444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c56b1710da59f1be14e39385af909c42585054db4e6ddf15324950b8beef444->enter($__internal_3c56b1710da59f1be14e39385af909c42585054db4e6ddf15324950b8beef444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f6a0558aff856d0345ef6723514412ebe0dfc5458f81bdcad4d3ae17f07758f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6a0558aff856d0345ef6723514412ebe0dfc5458f81bdcad4d3ae17f07758f->enter($__internal_8f6a0558aff856d0345ef6723514412ebe0dfc5458f81bdcad4d3ae17f07758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_8f6a0558aff856d0345ef6723514412ebe0dfc5458f81bdcad4d3ae17f07758f->leave($__internal_8f6a0558aff856d0345ef6723514412ebe0dfc5458f81bdcad4d3ae17f07758f_prof);

        
        $__internal_3c56b1710da59f1be14e39385af909c42585054db4e6ddf15324950b8beef444->leave($__internal_3c56b1710da59f1be14e39385af909c42585054db4e6ddf15324950b8beef444_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselProduct/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  148 => 53,  136 => 50,  132 => 49,  128 => 48,  124 => 47,  109 => 34,  100 => 33,  85 => 27,  64 => 9,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Ajouter un produit au carrousel</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
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

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_product_index') }}\">
            Retour à la liste
        </a>
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
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/shop/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/shop/js/app_back.js') }}\"></script>
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
{% endblock %}
", "@Shop/CarouselProduct/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselProduct\\new.html.twig");
    }
}
