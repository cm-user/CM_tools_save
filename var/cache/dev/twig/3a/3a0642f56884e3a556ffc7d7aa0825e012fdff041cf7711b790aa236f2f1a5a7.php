<?php

/* ShopBundle:CarouselProduct:show.html.twig */
class __TwigTemplate_343d5ad7d8a74b48f6296d4e461202e3c06982fa943ca43a6621c7b2bcd9f17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselProduct:show.html.twig", 1);
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
        $__internal_ed39a47542d974ea0c1be7a0504e9a421e1214009b58a53663627276bf2976f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed39a47542d974ea0c1be7a0504e9a421e1214009b58a53663627276bf2976f9->enter($__internal_ed39a47542d974ea0c1be7a0504e9a421e1214009b58a53663627276bf2976f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:show.html.twig"));

        $__internal_31df10b2c7bb2137463d0284ecf6654a957bf14184ad27b8aac640b3c1b930a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31df10b2c7bb2137463d0284ecf6654a957bf14184ad27b8aac640b3c1b930a0->enter($__internal_31df10b2c7bb2137463d0284ecf6654a957bf14184ad27b8aac640b3c1b930a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselProduct:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed39a47542d974ea0c1be7a0504e9a421e1214009b58a53663627276bf2976f9->leave($__internal_ed39a47542d974ea0c1be7a0504e9a421e1214009b58a53663627276bf2976f9_prof);

        
        $__internal_31df10b2c7bb2137463d0284ecf6654a957bf14184ad27b8aac640b3c1b930a0->leave($__internal_31df10b2c7bb2137463d0284ecf6654a957bf14184ad27b8aac640b3c1b930a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_885fa0e71265ed918b153df28af647f8d4d577c5dfe298135f8459ba8486ec9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885fa0e71265ed918b153df28af647f8d4d577c5dfe298135f8459ba8486ec9e->enter($__internal_885fa0e71265ed918b153df28af647f8d4d577c5dfe298135f8459ba8486ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae04123e1b13ae2e8a7195f3c35d359637155c569083fca9d77c505b021d5a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae04123e1b13ae2e8a7195f3c35d359637155c569083fca9d77c505b021d5a7e->enter($__internal_ae04123e1b13ae2e8a7195f3c35d359637155c569083fca9d77c505b021d5a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ae04123e1b13ae2e8a7195f3c35d359637155c569083fca9d77c505b021d5a7e->leave($__internal_ae04123e1b13ae2e8a7195f3c35d359637155c569083fca9d77c505b021d5a7e_prof);

        
        $__internal_885fa0e71265ed918b153df28af647f8d4d577c5dfe298135f8459ba8486ec9e->leave($__internal_885fa0e71265ed918b153df28af647f8d4d577c5dfe298135f8459ba8486ec9e_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselProduct:show.html.twig";
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
", "ShopBundle:CarouselProduct:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselProduct/show.html.twig");
    }
}
