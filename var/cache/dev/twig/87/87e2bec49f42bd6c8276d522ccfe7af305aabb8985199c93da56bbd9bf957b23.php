<?php

/* @Marketing/shop/index.html.twig */
class __TwigTemplate_5f16c5dcfa49eb14187bf66d39391a4b3fea9d6859f9821a611056d45192aa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shop/index.html.twig", 1);
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
        $__internal_0d27669f50f6ac6a09140e97eb54c82dd4fb250b445fc7281b670d9a2d2fb5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d27669f50f6ac6a09140e97eb54c82dd4fb250b445fc7281b670d9a2d2fb5fa->enter($__internal_0d27669f50f6ac6a09140e97eb54c82dd4fb250b445fc7281b670d9a2d2fb5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/index.html.twig"));

        $__internal_48dc5ce4efac4e59f2693dbef0b4ebb90cdcd2dad10a5928ef87276800d6451e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc5ce4efac4e59f2693dbef0b4ebb90cdcd2dad10a5928ef87276800d6451e->enter($__internal_48dc5ce4efac4e59f2693dbef0b4ebb90cdcd2dad10a5928ef87276800d6451e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d27669f50f6ac6a09140e97eb54c82dd4fb250b445fc7281b670d9a2d2fb5fa->leave($__internal_0d27669f50f6ac6a09140e97eb54c82dd4fb250b445fc7281b670d9a2d2fb5fa_prof);

        
        $__internal_48dc5ce4efac4e59f2693dbef0b4ebb90cdcd2dad10a5928ef87276800d6451e->leave($__internal_48dc5ce4efac4e59f2693dbef0b4ebb90cdcd2dad10a5928ef87276800d6451e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9c0d3ac3bc6ac026862b2767ec27289867fed44d610ee4d36a2f29fae5988f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c0d3ac3bc6ac026862b2767ec27289867fed44d610ee4d36a2f29fae5988f5->enter($__internal_e9c0d3ac3bc6ac026862b2767ec27289867fed44d610ee4d36a2f29fae5988f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e77029b67caa5c22f81b36af9bae7ca66b8260c974f361c66a8e2a018947591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e77029b67caa5c22f81b36af9bae7ca66b8260c974f361c66a8e2a018947591->enter($__internal_6e77029b67caa5c22f81b36af9bae7ca66b8260c974f361c66a8e2a018947591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>Postalcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shops"] ?? $this->getContext($context, "shops")));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_show", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "address1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "address2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "postalCode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_show", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_edit", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_new");
        echo "\" class=\"btn btn-info\">Créer une boutique</a>
";
        
        $__internal_6e77029b67caa5c22f81b36af9bae7ca66b8260c974f361c66a8e2a018947591->leave($__internal_6e77029b67caa5c22f81b36af9bae7ca66b8260c974f361c66a8e2a018947591_prof);

        
        $__internal_e9c0d3ac3bc6ac026862b2767ec27289867fed44d610ee4d36a2f29fae5988f5->leave($__internal_e9c0d3ac3bc6ac026862b2767ec27289867fed44d610ee4d36a2f29fae5988f5_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  135 => 45,  123 => 39,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Shop list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>Postalcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for shop in shops %}
            <tr>
                <td><a href=\"{{ path('shop_show', { 'id': shop.id }) }}\">{{ shop.name }}</a></td>
                <td>{{ shop.address1 }}</td>
                <td>{{ shop.address2 }}</td>
                <td>{{ shop.postalCode }}</td>
                <td>{{ shop.city }}</td>
                <td>{{ shop.country }}</td>
                <td>{{ shop.mail }}</td>
                <td>{{ shop.phone }}</td>
                <td>{{ shop.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('shop_show', { 'id': shop.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('shop_edit', { 'id': shop.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('shop_new') }}\" class=\"btn btn-info\">Créer une boutique</a>
{% endblock %}
", "@Marketing/shop/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shop\\index.html.twig");
    }
}
