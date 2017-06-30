<?php

/* @Shop/CarouselVideo/index.html.twig */
class __TwigTemplate_5a746a84c03fb7ecf9847dd704fe38d459e56b887786425d794b2eea67c06828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselVideo/index.html.twig", 1);
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
        $__internal_3bbc403fb1c4637ccb5de8e3f7d135310c9bb826c5dc5e182e7aa3bb988d1b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbc403fb1c4637ccb5de8e3f7d135310c9bb826c5dc5e182e7aa3bb988d1b28->enter($__internal_3bbc403fb1c4637ccb5de8e3f7d135310c9bb826c5dc5e182e7aa3bb988d1b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/index.html.twig"));

        $__internal_8b2e0d6c16b7dc39616e6f14c056af266f59e59dd7493f90acf73eeab9c45ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2e0d6c16b7dc39616e6f14c056af266f59e59dd7493f90acf73eeab9c45ace->enter($__internal_8b2e0d6c16b7dc39616e6f14c056af266f59e59dd7493f90acf73eeab9c45ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselVideo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbc403fb1c4637ccb5de8e3f7d135310c9bb826c5dc5e182e7aa3bb988d1b28->leave($__internal_3bbc403fb1c4637ccb5de8e3f7d135310c9bb826c5dc5e182e7aa3bb988d1b28_prof);

        
        $__internal_8b2e0d6c16b7dc39616e6f14c056af266f59e59dd7493f90acf73eeab9c45ace->leave($__internal_8b2e0d6c16b7dc39616e6f14c056af266f59e59dd7493f90acf73eeab9c45ace_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e270d4d77d3d9535f185cd2697b425ddd124bab37dd83689c658387e10aaa5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e270d4d77d3d9535f185cd2697b425ddd124bab37dd83689c658387e10aaa5de->enter($__internal_e270d4d77d3d9535f185cd2697b425ddd124bab37dd83689c658387e10aaa5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbccc03bb9baadf18cfc3284e81e75fb0fc123831096e206d288766a3e66b56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbccc03bb9baadf18cfc3284e81e75fb0fc123831096e206d288766a3e66b56d->enter($__internal_bbccc03bb9baadf18cfc3284e81e75fb0fc123831096e206d288766a3e66b56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des vidéos du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Vidéo ID</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carouselVideos"] ?? $this->getContext($context, "carouselVideos")));
        foreach ($context['_seq'] as $context["_key"] => $context["carouselVideo"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_show", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "videoId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselVideo"], "dateStart", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselVideo"], "dateEnd", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_show", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_edit", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_delete", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carouselVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
        ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["carouselVideos"] ?? $this->getContext($context, "carouselVideos")));
        echo "
    </div>

    <a class=\"btn btn-success\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter une vidéo
    </a>
";
        
        $__internal_bbccc03bb9baadf18cfc3284e81e75fb0fc123831096e206d288766a3e66b56d->leave($__internal_bbccc03bb9baadf18cfc3284e81e75fb0fc123831096e206d288766a3e66b56d_prof);

        
        $__internal_e270d4d77d3d9535f185cd2697b425ddd124bab37dd83689c658387e10aaa5de->leave($__internal_e270d4d77d3d9535f185cd2697b425ddd124bab37dd83689c658387e10aaa5de_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselVideo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  129 => 46,  123 => 42,  110 => 35,  103 => 31,  95 => 26,  90 => 24,  86 => 23,  82 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des vidéos du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Vidéo ID</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for carouselVideo in carouselVideos %}
            <tr>
                <td>{{ carouselVideo.id }}</td>
                <td><a href=\"{{ path('carousel_video_show', { 'id': carouselVideo.id }) }}\">{{ carouselVideo.name }}</a></td>
                <td>{{ carouselVideo.videoId }}</td>
                <td>{{ carouselVideo.dateStart|date(\"Y-m-d\") }}</td>
                <td>{{ carouselVideo.dateEnd|date(\"Y-m-d\") }}</td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('carousel_video_show', { 'id': carouselVideo.id }) }}\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"{{ path('carousel_video_edit', { 'id': carouselVideo.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"{{ path('carousel_video_delete', { 'id': carouselVideo.id }) }}\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(carouselVideos) }}
    </div>

    <a class=\"btn btn-success\" href=\"{{ path('carousel_video_new') }}\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter une vidéo
    </a>
{% endblock %}
", "@Shop/CarouselVideo/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselVideo\\index.html.twig");
    }
}
