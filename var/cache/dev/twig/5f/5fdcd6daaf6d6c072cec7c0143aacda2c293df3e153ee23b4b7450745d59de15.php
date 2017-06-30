<?php

/* ShopBundle:CarouselPicture:index.html.twig */
class __TwigTemplate_58061bb2d5171a6a82c9b4c0cec914c34cd4d757480d7d1067fb0b78d484167b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselPicture:index.html.twig", 1);
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
        $__internal_5458cf6dd05e7e9bd39449463a9f2c8e3e9a9be203db3afd64bb23c7e1193f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5458cf6dd05e7e9bd39449463a9f2c8e3e9a9be203db3afd64bb23c7e1193f03->enter($__internal_5458cf6dd05e7e9bd39449463a9f2c8e3e9a9be203db3afd64bb23c7e1193f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:index.html.twig"));

        $__internal_508a338a477923bae52c9b55692d66adeacc69253da1c6a2358ce7be1d33039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508a338a477923bae52c9b55692d66adeacc69253da1c6a2358ce7be1d33039e->enter($__internal_508a338a477923bae52c9b55692d66adeacc69253da1c6a2358ce7be1d33039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5458cf6dd05e7e9bd39449463a9f2c8e3e9a9be203db3afd64bb23c7e1193f03->leave($__internal_5458cf6dd05e7e9bd39449463a9f2c8e3e9a9be203db3afd64bb23c7e1193f03_prof);

        
        $__internal_508a338a477923bae52c9b55692d66adeacc69253da1c6a2358ce7be1d33039e->leave($__internal_508a338a477923bae52c9b55692d66adeacc69253da1c6a2358ce7be1d33039e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_177adfc186b7fbe3681ead720823e515f237f165b85f41a5ebf81eeaea34f57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177adfc186b7fbe3681ead720823e515f237f165b85f41a5ebf81eeaea34f57b->enter($__internal_177adfc186b7fbe3681ead720823e515f237f165b85f41a5ebf81eeaea34f57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_500f4f21b282845c9486f0bab12fff68c83bff907d527206b5ddcff6761d9aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500f4f21b282845c9486f0bab12fff68c83bff907d527206b5ddcff6761d9aaa->enter($__internal_500f4f21b282845c9486f0bab12fff68c83bff907d527206b5ddcff6761d9aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_500f4f21b282845c9486f0bab12fff68c83bff907d527206b5ddcff6761d9aaa->leave($__internal_500f4f21b282845c9486f0bab12fff68c83bff907d527206b5ddcff6761d9aaa_prof);

        
        $__internal_177adfc186b7fbe3681ead720823e515f237f165b85f41a5ebf81eeaea34f57b->leave($__internal_177adfc186b7fbe3681ead720823e515f237f165b85f41a5ebf81eeaea34f57b_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselPicture:index.html.twig";
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
", "ShopBundle:CarouselPicture:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselPicture/index.html.twig");
    }
}
