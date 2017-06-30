<?php

/* @FaultyProduct/faulty/new.html.twig */
class __TwigTemplate_66fe62e4bd3947673100c182a9597734a7167e1bb763b926db5c06c7140c8dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faulty/new.html.twig", 1);
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
        $__internal_7b5bb68fbb1876b40a4d0a938824f8eecef3e8b68ec0312b2df81d8bc08691be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5bb68fbb1876b40a4d0a938824f8eecef3e8b68ec0312b2df81d8bc08691be->enter($__internal_7b5bb68fbb1876b40a4d0a938824f8eecef3e8b68ec0312b2df81d8bc08691be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faulty/new.html.twig"));

        $__internal_bd5145c0995ab442180d264037f21cb597be91ffdb12211eea4234a480dffed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5145c0995ab442180d264037f21cb597be91ffdb12211eea4234a480dffed2->enter($__internal_bd5145c0995ab442180d264037f21cb597be91ffdb12211eea4234a480dffed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faulty/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5bb68fbb1876b40a4d0a938824f8eecef3e8b68ec0312b2df81d8bc08691be->leave($__internal_7b5bb68fbb1876b40a4d0a938824f8eecef3e8b68ec0312b2df81d8bc08691be_prof);

        
        $__internal_bd5145c0995ab442180d264037f21cb597be91ffdb12211eea4234a480dffed2->leave($__internal_bd5145c0995ab442180d264037f21cb597be91ffdb12211eea4234a480dffed2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c430bca8c53c340157a551fa6330dd31c28f66bfef058b224c5cc7b7a7759f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c430bca8c53c340157a551fa6330dd31c28f66bfef058b224c5cc7b7a7759f05->enter($__internal_c430bca8c53c340157a551fa6330dd31c28f66bfef058b224c5cc7b7a7759f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8a4fcedaab08c51c16470955456d03249fef0a897beb9cd294b834dae56f751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a4fcedaab08c51c16470955456d03249fef0a897beb9cd294b834dae56f751->enter($__internal_e8a4fcedaab08c51c16470955456d03249fef0a897beb9cd294b834dae56f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8a4fcedaab08c51c16470955456d03249fef0a897beb9cd294b834dae56f751->leave($__internal_e8a4fcedaab08c51c16470955456d03249fef0a897beb9cd294b834dae56f751_prof);

        
        $__internal_c430bca8c53c340157a551fa6330dd31c28f66bfef058b224c5cc7b7a7759f05->leave($__internal_c430bca8c53c340157a551fa6330dd31c28f66bfef058b224c5cc7b7a7759f05_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12372b98062a5f52b8c120a9629812ea4376ef2eb0a071e75750192a297eed23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12372b98062a5f52b8c120a9629812ea4376ef2eb0a071e75750192a297eed23->enter($__internal_12372b98062a5f52b8c120a9629812ea4376ef2eb0a071e75750192a297eed23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_746bc6b99498e9f17821b4aa6c867ff6465bb841d80d4d46c439db8e3839c9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746bc6b99498e9f17821b4aa6c867ff6465bb841d80d4d46c439db8e3839c9f1->enter($__internal_746bc6b99498e9f17821b4aa6c867ff6465bb841d80d4d46c439db8e3839c9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_746bc6b99498e9f17821b4aa6c867ff6465bb841d80d4d46c439db8e3839c9f1->leave($__internal_746bc6b99498e9f17821b4aa6c867ff6465bb841d80d4d46c439db8e3839c9f1_prof);

        
        $__internal_12372b98062a5f52b8c120a9629812ea4376ef2eb0a071e75750192a297eed23->leave($__internal_12372b98062a5f52b8c120a9629812ea4376ef2eb0a071e75750192a297eed23_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faulty/new.html.twig";
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
", "@FaultyProduct/faulty/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faulty\\new.html.twig");
    }
}
