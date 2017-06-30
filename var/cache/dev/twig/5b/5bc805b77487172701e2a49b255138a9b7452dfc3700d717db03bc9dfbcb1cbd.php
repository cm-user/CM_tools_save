<?php

/* @Shop/CarouselPicture/index.html.twig */
class __TwigTemplate_56cb0bcd4cc30ed555a7b62be403108f89064eceab126643bf890df1a015f607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselPicture/index.html.twig", 1);
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
        $__internal_797f09a2de6fda8651d39a13ef729287c56b262d6681808d507da5295f91ee5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797f09a2de6fda8651d39a13ef729287c56b262d6681808d507da5295f91ee5d->enter($__internal_797f09a2de6fda8651d39a13ef729287c56b262d6681808d507da5295f91ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/index.html.twig"));

        $__internal_39cf5f10e21f5b48f38feb5658b28025801d0e7ca7dd0cd96a040bde206597e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cf5f10e21f5b48f38feb5658b28025801d0e7ca7dd0cd96a040bde206597e1->enter($__internal_39cf5f10e21f5b48f38feb5658b28025801d0e7ca7dd0cd96a040bde206597e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797f09a2de6fda8651d39a13ef729287c56b262d6681808d507da5295f91ee5d->leave($__internal_797f09a2de6fda8651d39a13ef729287c56b262d6681808d507da5295f91ee5d_prof);

        
        $__internal_39cf5f10e21f5b48f38feb5658b28025801d0e7ca7dd0cd96a040bde206597e1->leave($__internal_39cf5f10e21f5b48f38feb5658b28025801d0e7ca7dd0cd96a040bde206597e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_374201838b9196401f53901dd14864cb2d965b96271ee25d1c9f3dff659477f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374201838b9196401f53901dd14864cb2d965b96271ee25d1c9f3dff659477f7->enter($__internal_374201838b9196401f53901dd14864cb2d965b96271ee25d1c9f3dff659477f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd1add66fcc325003022862168de42b60ea5dadcae9f9a0193df22ea2a35389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd1add66fcc325003022862168de42b60ea5dadcae9f9a0193df22ea2a35389->enter($__internal_edd1add66fcc325003022862168de42b60ea5dadcae9f9a0193df22ea2a35389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des images du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Durée</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carouselPictures"] ?? $this->getContext($context, "carouselPictures")));
        foreach ($context['_seq'] as $context["_key"] => $context["carouselPicture"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselPicture"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_show", array("id" => $this->getAttribute($context["carouselPicture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselPicture"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselPicture"], "length", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselPicture"], "dateStart", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselPicture"], "dateEnd", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_show", array("id" => $this->getAttribute($context["carouselPicture"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_edit", array("id" => $this->getAttribute($context["carouselPicture"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_delete", array("id" => $this->getAttribute($context["carouselPicture"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carouselPicture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
        ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["carouselPictures"] ?? $this->getContext($context, "carouselPictures")));
        echo "
    </div>

    <a class=\"btn btn-success\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter une image
    </a>
";
        
        $__internal_edd1add66fcc325003022862168de42b60ea5dadcae9f9a0193df22ea2a35389->leave($__internal_edd1add66fcc325003022862168de42b60ea5dadcae9f9a0193df22ea2a35389_prof);

        
        $__internal_374201838b9196401f53901dd14864cb2d965b96271ee25d1c9f3dff659477f7->leave($__internal_374201838b9196401f53901dd14864cb2d965b96271ee25d1c9f3dff659477f7_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselPicture/index.html.twig";
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
    <h1>Liste des images du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Durée</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for carouselPicture in carouselPictures %}
            <tr>
                <td>{{ carouselPicture.id }}</td>
                <td><a href=\"{{ path('carousel_picture_show', { 'id': carouselPicture.id }) }}\">{{ carouselPicture.name }}</a></td>
                <td>{{ carouselPicture.length }}</td>
                <td>{{ carouselPicture.dateStart|date(\"Y-m-d\") }}</td>
                <td>{{ carouselPicture.dateEnd|date(\"Y-m-d\") }}</td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('carousel_picture_show', { 'id': carouselPicture.id }) }}\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"{{ path('carousel_picture_edit', { 'id': carouselPicture.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"{{ path('carousel_picture_delete', { 'id': carouselPicture.id }) }}\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(carouselPictures) }}
    </div>

    <a class=\"btn btn-success\" href=\"{{ path('carousel_picture_new') }}\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter une image
    </a>
{% endblock %}
", "@Shop/CarouselPicture/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselPicture\\index.html.twig");
    }
}
