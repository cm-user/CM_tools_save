<?php

/* @Shop/CarouselProduct/index.html.twig */
class __TwigTemplate_dd896c5dddd00f2cc3e9175bbe3e1b1797bcf8cf496fe408cecaaee6eb5eb0d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselProduct/index.html.twig", 1);
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
        $__internal_df16697877332cff61e4d832de0038cbb5b53298953e1de9cc44673ec3b0daa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df16697877332cff61e4d832de0038cbb5b53298953e1de9cc44673ec3b0daa5->enter($__internal_df16697877332cff61e4d832de0038cbb5b53298953e1de9cc44673ec3b0daa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/index.html.twig"));

        $__internal_410b6297bd4ee1dedfe7e1a8b934b43e66baeeb86189c6e4483d3950dee6aff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410b6297bd4ee1dedfe7e1a8b934b43e66baeeb86189c6e4483d3950dee6aff8->enter($__internal_410b6297bd4ee1dedfe7e1a8b934b43e66baeeb86189c6e4483d3950dee6aff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df16697877332cff61e4d832de0038cbb5b53298953e1de9cc44673ec3b0daa5->leave($__internal_df16697877332cff61e4d832de0038cbb5b53298953e1de9cc44673ec3b0daa5_prof);

        
        $__internal_410b6297bd4ee1dedfe7e1a8b934b43e66baeeb86189c6e4483d3950dee6aff8->leave($__internal_410b6297bd4ee1dedfe7e1a8b934b43e66baeeb86189c6e4483d3950dee6aff8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fafccf541c1b8df053c7a67ff6d44ecc48f2c9a3d336100e4d37be889970c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fafccf541c1b8df053c7a67ff6d44ecc48f2c9a3d336100e4d37be889970c1f->enter($__internal_6fafccf541c1b8df053c7a67ff6d44ecc48f2c9a3d336100e4d37be889970c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_798a4a7dd110ba8cdfc91247e3bc28aa056b51c88773132d7967f821fd83db77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798a4a7dd110ba8cdfc91247e3bc28aa056b51c88773132d7967f821fd83db77->enter($__internal_798a4a7dd110ba8cdfc91247e3bc28aa056b51c88773132d7967f821fd83db77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_798a4a7dd110ba8cdfc91247e3bc28aa056b51c88773132d7967f821fd83db77->leave($__internal_798a4a7dd110ba8cdfc91247e3bc28aa056b51c88773132d7967f821fd83db77_prof);

        
        $__internal_6fafccf541c1b8df053c7a67ff6d44ecc48f2c9a3d336100e4d37be889970c1f->leave($__internal_6fafccf541c1b8df053c7a67ff6d44ecc48f2c9a3d336100e4d37be889970c1f_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselProduct/index.html.twig";
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
", "@Shop/CarouselProduct/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselProduct\\index.html.twig");
    }
}
