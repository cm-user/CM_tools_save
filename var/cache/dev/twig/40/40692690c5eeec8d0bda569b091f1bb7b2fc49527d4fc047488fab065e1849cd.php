<?php

/* @Shop/CarouselProduct/show.html.twig */
class __TwigTemplate_82d06f2dcc03457acb6df83306ad58574efd506414ddf419b569099736c9de17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselProduct/show.html.twig", 1);
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
        $__internal_a9f4b0323f677104474af7e13877c400f52a1e776334a5bc577c7c0d61c3e008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f4b0323f677104474af7e13877c400f52a1e776334a5bc577c7c0d61c3e008->enter($__internal_a9f4b0323f677104474af7e13877c400f52a1e776334a5bc577c7c0d61c3e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/show.html.twig"));

        $__internal_3340affd4297b721cc72a54d330625ecb72e34bb5a025c4f7726a061b1250f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3340affd4297b721cc72a54d330625ecb72e34bb5a025c4f7726a061b1250f19->enter($__internal_3340affd4297b721cc72a54d330625ecb72e34bb5a025c4f7726a061b1250f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselProduct/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f4b0323f677104474af7e13877c400f52a1e776334a5bc577c7c0d61c3e008->leave($__internal_a9f4b0323f677104474af7e13877c400f52a1e776334a5bc577c7c0d61c3e008_prof);

        
        $__internal_3340affd4297b721cc72a54d330625ecb72e34bb5a025c4f7726a061b1250f19->leave($__internal_3340affd4297b721cc72a54d330625ecb72e34bb5a025c4f7726a061b1250f19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a9aeffbc59874fb08f522a5f7e4761b8cbae60a46c3bb55260a3c5e178edc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a9aeffbc59874fb08f522a5f7e4761b8cbae60a46c3bb55260a3c5e178edc6->enter($__internal_87a9aeffbc59874fb08f522a5f7e4761b8cbae60a46c3bb55260a3c5e178edc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dc197efb6cb9877b815c8cb7a1fa8a08c8f168d3087c0bbeea7944b70f2b000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc197efb6cb9877b815c8cb7a1fa8a08c8f168d3087c0bbeea7944b70f2b000->enter($__internal_9dc197efb6cb9877b815c8cb7a1fa8a08c8f168d3087c0bbeea7944b70f2b000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselProduct"] ?? $this->getContext($context, "carouselProduct")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselProduct"] ?? $this->getContext($context, "carouselProduct")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h2>Image</h2>
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["carouselProduct"] ?? $this->getContext($context, "carouselProduct")), "picture", array()), "html", null, true);
        echo "\" class=\"img-rounded\">

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_product_edit", array("id" => $this->getAttribute(($context["carouselProduct"] ?? $this->getContext($context, "carouselProduct")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_9dc197efb6cb9877b815c8cb7a1fa8a08c8f168d3087c0bbeea7944b70f2b000->leave($__internal_9dc197efb6cb9877b815c8cb7a1fa8a08c8f168d3087c0bbeea7944b70f2b000_prof);

        
        $__internal_87a9aeffbc59874fb08f522a5f7e4761b8cbae60a46c3bb55260a3c5e178edc6->leave($__internal_87a9aeffbc59874fb08f522a5f7e4761b8cbae60a46c3bb55260a3c5e178edc6_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselProduct/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  86 => 27,  79 => 23,  73 => 20,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ carouselProduct.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ carouselProduct.name }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Image</h2>
    <img src=\"{{ carouselProduct.picture }}\" class=\"img-rounded\">

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('carousel_product_index') }}\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"{{ path('carousel_product_edit', { 'id': carouselProduct.id }) }}\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}
", "@Shop/CarouselProduct/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselProduct\\show.html.twig");
    }
}
