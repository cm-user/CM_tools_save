<?php

/* @Shop/CarouselPicture/show.html.twig */
class __TwigTemplate_da7c68781bfe053d1a37d3521e74f3952171b4901c344f7b55b03a8fe943f398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselPicture/show.html.twig", 1);
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
        $__internal_4efb78f60207dd83543ecab7074d692893ef0d419f393d0bd93513cbbdf8aad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efb78f60207dd83543ecab7074d692893ef0d419f393d0bd93513cbbdf8aad9->enter($__internal_4efb78f60207dd83543ecab7074d692893ef0d419f393d0bd93513cbbdf8aad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/show.html.twig"));

        $__internal_23bdd21864ed60e77635ef81fbf3361068a23d6a130d65edfef5a436380910a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bdd21864ed60e77635ef81fbf3361068a23d6a130d65edfef5a436380910a1->enter($__internal_23bdd21864ed60e77635ef81fbf3361068a23d6a130d65edfef5a436380910a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efb78f60207dd83543ecab7074d692893ef0d419f393d0bd93513cbbdf8aad9->leave($__internal_4efb78f60207dd83543ecab7074d692893ef0d419f393d0bd93513cbbdf8aad9_prof);

        
        $__internal_23bdd21864ed60e77635ef81fbf3361068a23d6a130d65edfef5a436380910a1->leave($__internal_23bdd21864ed60e77635ef81fbf3361068a23d6a130d65edfef5a436380910a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21c19e17ce3226970260ba8e2e799e029c13f74df31ae374702b75c05cd6a6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c19e17ce3226970260ba8e2e799e029c13f74df31ae374702b75c05cd6a6e6->enter($__internal_21c19e17ce3226970260ba8e2e799e029c13f74df31ae374702b75c05cd6a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_034dbb644b64b369084f6e14792c875256b828ea44dfbee2fe965f21aa816f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034dbb644b64b369084f6e14792c875256b828ea44dfbee2fe965f21aa816f7f->enter($__internal_034dbb644b64b369084f6e14792c875256b828ea44dfbee2fe965f21aa816f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_034dbb644b64b369084f6e14792c875256b828ea44dfbee2fe965f21aa816f7f->leave($__internal_034dbb644b64b369084f6e14792c875256b828ea44dfbee2fe965f21aa816f7f_prof);

        
        $__internal_21c19e17ce3226970260ba8e2e799e029c13f74df31ae374702b75c05cd6a6e6->leave($__internal_21c19e17ce3226970260ba8e2e799e029c13f74df31ae374702b75c05cd6a6e6_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselPicture/show.html.twig";
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
", "@Shop/CarouselPicture/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselPicture\\show.html.twig");
    }
}
