<?php

/* FaultyProductBundle:faulty:new.html.twig */
class __TwigTemplate_94fdb6329f13b8da5ed521c4dfd07437334c12ead35fd181c592dccdda48746a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faulty:new.html.twig", 1);
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
        $__internal_1cdf8edd8096982be932dffae2ff7a3168bead254fa6ef553e04ff97ac019fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdf8edd8096982be932dffae2ff7a3168bead254fa6ef553e04ff97ac019fec->enter($__internal_1cdf8edd8096982be932dffae2ff7a3168bead254fa6ef553e04ff97ac019fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:new.html.twig"));

        $__internal_783bc3e9561b306657a9ad0e8bae23a29a360ff8fff67e9ed55b5a4ef67d7d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783bc3e9561b306657a9ad0e8bae23a29a360ff8fff67e9ed55b5a4ef67d7d61->enter($__internal_783bc3e9561b306657a9ad0e8bae23a29a360ff8fff67e9ed55b5a4ef67d7d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cdf8edd8096982be932dffae2ff7a3168bead254fa6ef553e04ff97ac019fec->leave($__internal_1cdf8edd8096982be932dffae2ff7a3168bead254fa6ef553e04ff97ac019fec_prof);

        
        $__internal_783bc3e9561b306657a9ad0e8bae23a29a360ff8fff67e9ed55b5a4ef67d7d61->leave($__internal_783bc3e9561b306657a9ad0e8bae23a29a360ff8fff67e9ed55b5a4ef67d7d61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8698540b0b2ad608336b1e80c10bcd496bb5728c1c0e75e9709b351a7388205a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8698540b0b2ad608336b1e80c10bcd496bb5728c1c0e75e9709b351a7388205a->enter($__internal_8698540b0b2ad608336b1e80c10bcd496bb5728c1c0e75e9709b351a7388205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f89d17a36733d9d2fc7295a465c25509afff2c8758ad8ac3bc6488cf0dbb6322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89d17a36733d9d2fc7295a465c25509afff2c8758ad8ac3bc6488cf0dbb6322->enter($__internal_f89d17a36733d9d2fc7295a465c25509afff2c8758ad8ac3bc6488cf0dbb6322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter un défectueux</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_index");
        echo "\">
            Retour à la liste
        </a>
    </p>
";
        
        $__internal_f89d17a36733d9d2fc7295a465c25509afff2c8758ad8ac3bc6488cf0dbb6322->leave($__internal_f89d17a36733d9d2fc7295a465c25509afff2c8758ad8ac3bc6488cf0dbb6322_prof);

        
        $__internal_8698540b0b2ad608336b1e80c10bcd496bb5728c1c0e75e9709b351a7388205a->leave($__internal_8698540b0b2ad608336b1e80c10bcd496bb5728c1c0e75e9709b351a7388205a_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ce8b7237d3e1939781650f773152410884958bf65caa0f1b8acca2c4c50792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ce8b7237d3e1939781650f773152410884958bf65caa0f1b8acca2c4c50792->enter($__internal_06ce8b7237d3e1939781650f773152410884958bf65caa0f1b8acca2c4c50792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_386e51e77294d99e933cfc65d5264a9ae6c38ae886e7375038f844860e11ae6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386e51e77294d99e933cfc65d5264a9ae6c38ae886e7375038f844860e11ae6c->enter($__internal_386e51e77294d99e933cfc65d5264a9ae6c38ae886e7375038f844860e11ae6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_386e51e77294d99e933cfc65d5264a9ae6c38ae886e7375038f844860e11ae6c->leave($__internal_386e51e77294d99e933cfc65d5264a9ae6c38ae886e7375038f844860e11ae6c_prof);

        
        $__internal_06ce8b7237d3e1939781650f773152410884958bf65caa0f1b8acca2c4c50792->leave($__internal_06ce8b7237d3e1939781650f773152410884958bf65caa0f1b8acca2c4c50792_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faulty:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  121 => 37,  117 => 36,  113 => 35,  108 => 34,  99 => 33,  84 => 27,  63 => 9,  58 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Ajouter un défectueux</h1>

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
        <a class=\"btn btn-default\" href=\"{{ path('faulty_index') }}\">
            Retour à la liste
        </a>
    </p>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/faultyproduct/js/jquery.collection.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/app.js') }}\"></script>
{% endblock %}
", "FaultyProductBundle:faulty:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faulty/new.html.twig");
    }
}
