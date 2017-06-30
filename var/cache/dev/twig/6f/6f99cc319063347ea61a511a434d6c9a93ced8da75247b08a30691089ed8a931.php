<?php

/* @Shop/CarouselVideo/show.html.twig */
class __TwigTemplate_9766d7ba49fd86278294f05bca2ff997872f4ee0913d40fa025e0c7e384c80c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselVideo/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aded3d2e81877cdd59e274ca7e8efb6e62e760116b668cf6525374dc6a1c1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aded3d2e81877cdd59e274ca7e8efb6e62e760116b668cf6525374dc6a1c1d6->enter($__internal_1aded3d2e81877cdd59e274ca7e8efb6e62e760116b668cf6525374dc6a1c1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/show.html.twig"));

        $__internal_96a4ecfdac4a148024f22835d8dbbe483e748c3cd77b88a6724f9d1e9f0a6669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a4ecfdac4a148024f22835d8dbbe483e748c3cd77b88a6724f9d1e9f0a6669->enter($__internal_96a4ecfdac4a148024f22835d8dbbe483e748c3cd77b88a6724f9d1e9f0a6669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aded3d2e81877cdd59e274ca7e8efb6e62e760116b668cf6525374dc6a1c1d6->leave($__internal_1aded3d2e81877cdd59e274ca7e8efb6e62e760116b668cf6525374dc6a1c1d6_prof);

        
        $__internal_96a4ecfdac4a148024f22835d8dbbe483e748c3cd77b88a6724f9d1e9f0a6669->leave($__internal_96a4ecfdac4a148024f22835d8dbbe483e748c3cd77b88a6724f9d1e9f0a6669_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f011f1c31a44baadd21a8a6e3c6355d95d0ab98786a8a6a11b781f55a71580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f011f1c31a44baadd21a8a6e3c6355d95d0ab98786a8a6a11b781f55a71580->enter($__internal_87f011f1c31a44baadd21a8a6e3c6355d95d0ab98786a8a6a11b781f55a71580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_866bbd7b7b8cbf3c2d16185a6d0c85696773a456219f73c1ed54661d97715a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866bbd7b7b8cbf3c2d16185a6d0c85696773a456219f73c1ed54661d97715a60->enter($__internal_866bbd7b7b8cbf3c2d16185a6d0c85696773a456219f73c1ed54661d97715a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Vidéo du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vidéo ID</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "videoId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de début</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "dateStart", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "dateEnd", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_edit", array("id" => $this->getAttribute(($context["carouselVideo"] ?? $this->getContext($context, "carouselVideo")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_866bbd7b7b8cbf3c2d16185a6d0c85696773a456219f73c1ed54661d97715a60->leave($__internal_866bbd7b7b8cbf3c2d16185a6d0c85696773a456219f73c1ed54661d97715a60_prof);

        
        $__internal_87f011f1c31a44baadd21a8a6e3c6355d95d0ab98786a8a6a11b781f55a71580->leave($__internal_87f011f1c31a44baadd21a8a6e3c6355d95d0ab98786a8a6a11b781f55a71580_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselVideo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  108 => 40,  101 => 36,  94 => 32,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Vidéo du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ carouselVideo.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ carouselVideo.name }}</td>
            </tr>
            <tr>
                <th>Vidéo ID</th>
                <td>{{ carouselVideo.videoId }}</td>
            </tr>
            <tr>
                <th>Date de début</th>
                <td>{{ carouselVideo.dateStart|date(\"Y-m-d\") }}</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>{{ carouselVideo.dateEnd|date(\"Y-m-d\") }}</td>
            </tr>
        </tbody>
    </table>

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('carousel_video_index') }}\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"{{ path('carousel_video_edit', { 'id': carouselVideo.id }) }}\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}
", "@Shop/CarouselVideo/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselVideo\\show.html.twig");
    }
}
