<?php

/* ShopBundle:CarouselPicture:show.html.twig */
class __TwigTemplate_8b6c3158cac9141ebfa0d601739dc50755888fe032feaf5bf70fa630841c406e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselPicture:show.html.twig", 1);
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
        $__internal_6f67ee7a5b15e7647df59f035731420fa032fce62d055ffc8551123f40d630db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f67ee7a5b15e7647df59f035731420fa032fce62d055ffc8551123f40d630db->enter($__internal_6f67ee7a5b15e7647df59f035731420fa032fce62d055ffc8551123f40d630db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:show.html.twig"));

        $__internal_6e7dac93315b325c3014c85bdf459791689477778c43c0bbb37b91fb029216e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7dac93315b325c3014c85bdf459791689477778c43c0bbb37b91fb029216e3->enter($__internal_6e7dac93315b325c3014c85bdf459791689477778c43c0bbb37b91fb029216e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselPicture:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f67ee7a5b15e7647df59f035731420fa032fce62d055ffc8551123f40d630db->leave($__internal_6f67ee7a5b15e7647df59f035731420fa032fce62d055ffc8551123f40d630db_prof);

        
        $__internal_6e7dac93315b325c3014c85bdf459791689477778c43c0bbb37b91fb029216e3->leave($__internal_6e7dac93315b325c3014c85bdf459791689477778c43c0bbb37b91fb029216e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3a8296d68e02123138451b15e8fb96a39adf22afdd81557fe276192c225f592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a8296d68e02123138451b15e8fb96a39adf22afdd81557fe276192c225f592->enter($__internal_a3a8296d68e02123138451b15e8fb96a39adf22afdd81557fe276192c225f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e00d79bf5b8b4d78f0cd54ec92abfe195c4bcedd91fab53dcfed0bf4f903a353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00d79bf5b8b4d78f0cd54ec92abfe195c4bcedd91fab53dcfed0bf4f903a353->enter($__internal_e00d79bf5b8b4d78f0cd54ec92abfe195c4bcedd91fab53dcfed0bf4f903a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "length", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de début</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "dateStart", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "dateEnd", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h2>Image</h2>
    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "picture", array()), "html", null, true);
        echo "\" class=\"img-rounded\">

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_edit", array("id" => $this->getAttribute(($context["carouselPicture"] ?? $this->getContext($context, "carouselPicture")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_e00d79bf5b8b4d78f0cd54ec92abfe195c4bcedd91fab53dcfed0bf4f903a353->leave($__internal_e00d79bf5b8b4d78f0cd54ec92abfe195c4bcedd91fab53dcfed0bf4f903a353_prof);

        
        $__internal_a3a8296d68e02123138451b15e8fb96a39adf22afdd81557fe276192c225f592->leave($__internal_a3a8296d68e02123138451b15e8fb96a39adf22afdd81557fe276192c225f592_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselPicture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  107 => 39,  100 => 35,  94 => 32,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Image du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ carouselPicture.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ carouselPicture.name }}</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>{{ carouselPicture.length }}</td>
            </tr>
            <tr>
                <th>Date de début</th>
                <td>{{ carouselPicture.dateStart|date(\"Y-m-d\") }}</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>{{ carouselPicture.dateEnd|date(\"Y-m-d\") }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Image</h2>
    <img src=\"{{ carouselPicture.picture }}\" class=\"img-rounded\">

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('carousel_picture_index') }}\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"{{ path('carousel_picture_edit', { 'id': carouselPicture.id }) }}\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}
", "ShopBundle:CarouselPicture:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselPicture/show.html.twig");
    }
}
