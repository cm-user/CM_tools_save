<?php

/* ShopBundle:CarouselProduct:new.html.twig */
class __TwigTemplate_72c441b095641d9432ba9cea597312097118cbffa45be5af7c543e9eb10d7ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselProduct:new.html.twig", 1);
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
        $__internal_c4239d63a5935e7ded14842b07fd863dcc33e90c696c78a0c4d0dd2b15e610ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4239d63a5935e7ded14842b07fd863dcc33e90c696c78a0c4d0dd2b15e610ad->enter($__internal_c4239d63a5935e7ded14842b07fd863dcc33e90c696c78a0c4d0dd2b15e610ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:new.html.twig"));

        $__internal_e06c1623c2a55d2923ffad0e801d3ec7e069c61f49102fee082e583f6866c036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06c1623c2a55d2923ffad0e801d3ec7e069c61f49102fee082e583f6866c036->enter($__internal_e06c1623c2a55d2923ffad0e801d3ec7e069c61f49102fee082e583f6866c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4239d63a5935e7ded14842b07fd863dcc33e90c696c78a0c4d0dd2b15e610ad->leave($__internal_c4239d63a5935e7ded14842b07fd863dcc33e90c696c78a0c4d0dd2b15e610ad_prof);

        
        $__internal_e06c1623c2a55d2923ffad0e801d3ec7e069c61f49102fee082e583f6866c036->leave($__internal_e06c1623c2a55d2923ffad0e801d3ec7e069c61f49102fee082e583f6866c036_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b912fad377ce70a2ff12d7b607fb70706de2779f21283a9fcc7e147e0bd071b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b912fad377ce70a2ff12d7b607fb70706de2779f21283a9fcc7e147e0bd071b->enter($__internal_9b912fad377ce70a2ff12d7b607fb70706de2779f21283a9fcc7e147e0bd071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba94926efead4b91c89d6081eb98debd914bdea5e6faa4b964013f9fb82487a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba94926efead4b91c89d6081eb98debd914bdea5e6faa4b964013f9fb82487a7->enter($__internal_ba94926efead4b91c89d6081eb98debd914bdea5e6faa4b964013f9fb82487a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba94926efead4b91c89d6081eb98debd914bdea5e6faa4b964013f9fb82487a7->leave($__internal_ba94926efead4b91c89d6081eb98debd914bdea5e6faa4b964013f9fb82487a7_prof);

        
        $__internal_9b912fad377ce70a2ff12d7b607fb70706de2779f21283a9fcc7e147e0bd071b->leave($__internal_9b912fad377ce70a2ff12d7b607fb70706de2779f21283a9fcc7e147e0bd071b_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9eb8ef7014778edcc4fd231d3008d57f46b2b9bfd9c368dbab1ed5cda47e99cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb8ef7014778edcc4fd231d3008d57f46b2b9bfd9c368dbab1ed5cda47e99cf->enter($__internal_9eb8ef7014778edcc4fd231d3008d57f46b2b9bfd9c368dbab1ed5cda47e99cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a6af4dd5c17b2ded2c1fef974dabbed424fabde0bcccc6f1a6b49896adef24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6af4dd5c17b2ded2c1fef974dabbed424fabde0bcccc6f1a6b49896adef24f->enter($__internal_9a6af4dd5c17b2ded2c1fef974dabbed424fabde0bcccc6f1a6b49896adef24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9a6af4dd5c17b2ded2c1fef974dabbed424fabde0bcccc6f1a6b49896adef24f->leave($__internal_9a6af4dd5c17b2ded2c1fef974dabbed424fabde0bcccc6f1a6b49896adef24f_prof);

        
        $__internal_9eb8ef7014778edcc4fd231d3008d57f46b2b9bfd9c368dbab1ed5cda47e99cf->leave($__internal_9eb8ef7014778edcc4fd231d3008d57f46b2b9bfd9c368dbab1ed5cda47e99cf_prof);

    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de307a07f261b5ee8ebdc423c788f15d60ddc127e92553d89fb33140f43ee406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de307a07f261b5ee8ebdc423c788f15d60ddc127e92553d89fb33140f43ee406->enter($__internal_de307a07f261b5ee8ebdc423c788f15d60ddc127e92553d89fb33140f43ee406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7928d80fd7bd82b195e6c24dbe63f5193b7fd253c53c2c53ab07017fa7a5bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7928d80fd7bd82b195e6c24dbe63f5193b7fd253c53c2c53ab07017fa7a5bb9->enter($__internal_d7928d80fd7bd82b195e6c24dbe63f5193b7fd253c53c2c53ab07017fa7a5bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_d7928d80fd7bd82b195e6c24dbe63f5193b7fd253c53c2c53ab07017fa7a5bb9->leave($__internal_d7928d80fd7bd82b195e6c24dbe63f5193b7fd253c53c2c53ab07017fa7a5bb9_prof);

        
        $__internal_de307a07f261b5ee8ebdc423c788f15d60ddc127e92553d89fb33140f43ee406->leave($__internal_de307a07f261b5ee8ebdc423c788f15d60ddc127e92553d89fb33140f43ee406_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselProduct:new.html.twig";
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
", "ShopBundle:CarouselProduct:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselProduct/new.html.twig");
    }
}
