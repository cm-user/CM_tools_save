<?php

/* ShopBundle:CarouselProduct:index.html.twig */
class __TwigTemplate_5500bad18a0ee888a22c985090d14711aa3fe0ad5422310ce1545c2433d5c308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselProduct:index.html.twig", 1);
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
        $__internal_8c663128edd10ace32bad256339ccae25b7e1be7f52f96c353217ce5adf0c225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c663128edd10ace32bad256339ccae25b7e1be7f52f96c353217ce5adf0c225->enter($__internal_8c663128edd10ace32bad256339ccae25b7e1be7f52f96c353217ce5adf0c225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:index.html.twig"));

        $__internal_0d3a4a27a5d60d22567934cc818275aec920d8619872b1183b409d6bcee9994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3a4a27a5d60d22567934cc818275aec920d8619872b1183b409d6bcee9994b->enter($__internal_0d3a4a27a5d60d22567934cc818275aec920d8619872b1183b409d6bcee9994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c663128edd10ace32bad256339ccae25b7e1be7f52f96c353217ce5adf0c225->leave($__internal_8c663128edd10ace32bad256339ccae25b7e1be7f52f96c353217ce5adf0c225_prof);

        
        $__internal_0d3a4a27a5d60d22567934cc818275aec920d8619872b1183b409d6bcee9994b->leave($__internal_0d3a4a27a5d60d22567934cc818275aec920d8619872b1183b409d6bcee9994b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e80e5c6a3ef13737762a842ff656ad0cc232ce7ad735f83ab093c0308e0a63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e80e5c6a3ef13737762a842ff656ad0cc232ce7ad735f83ab093c0308e0a63f->enter($__internal_9e80e5c6a3ef13737762a842ff656ad0cc232ce7ad735f83ab093c0308e0a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94090ba55f9925387347c46d62b00ee12f3ce9ffd86cd7887dc4d6e9e9071778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94090ba55f9925387347c46d62b00ee12f3ce9ffd86cd7887dc4d6e9e9071778->enter($__internal_94090ba55f9925387347c46d62b00ee12f3ce9ffd86cd7887dc4d6e9e9071778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des produits du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carouselProducts"] ?? $this->getContext($context, "carouselProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["carouselProduct"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_show", array("id" => $this->getAttribute($context["carouselProduct"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_show", array("id" => $this->getAttribute($context["carouselProduct"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_edit", array("id" => $this->getAttribute($context["carouselProduct"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    -
                    <a class=\"btn btn-danger\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_delete", array("id" => $this->getAttribute($context["carouselProduct"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carouselProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un produit
    </a>
";
        
        $__internal_94090ba55f9925387347c46d62b00ee12f3ce9ffd86cd7887dc4d6e9e9071778->leave($__internal_94090ba55f9925387347c46d62b00ee12f3ce9ffd86cd7887dc4d6e9e9071778_prof);

        
        $__internal_9e80e5c6a3ef13737762a842ff656ad0cc232ce7ad735f83ab093c0308e0a63f->leave($__internal_9e80e5c6a3ef13737762a842ff656ad0cc232ce7ad735f83ab093c0308e0a63f_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselProduct:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  109 => 37,  96 => 30,  88 => 25,  80 => 20,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des produits du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for carouselProduct in carouselProducts %}
            <tr>
                <td>{{ carouselProduct.id }}</td>
                <td><a href=\"{{ path('carousel_picture_show', { 'id': carouselProduct.id }) }}\">{{ carouselProduct.name }}</a></td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('carousel_product_show', { 'id': carouselProduct.id }) }}\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"{{ path('carousel_product_edit', { 'id': carouselProduct.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    -
                    <a class=\"btn btn-danger\" href=\"{{ path('carousel_product_delete', { 'id': carouselProduct.id }) }}\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('carousel_product_new') }}\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un produit
    </a>
{% endblock %}
", "ShopBundle:CarouselProduct:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselProduct/index.html.twig");
    }
}
