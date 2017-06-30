<?php

/* MarketingBundle:shop:index.html.twig */
class __TwigTemplate_83e45ab1984e52e58b5f534431600f85ca5f433f1dada55327bb2c42af4b2972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shop:index.html.twig", 1);
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
        $__internal_6ecdf571e4618cd2f63f3b17cbd1a1a05c5cf08b6aef43142387c3b7dfba0107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecdf571e4618cd2f63f3b17cbd1a1a05c5cf08b6aef43142387c3b7dfba0107->enter($__internal_6ecdf571e4618cd2f63f3b17cbd1a1a05c5cf08b6aef43142387c3b7dfba0107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:index.html.twig"));

        $__internal_ec9b1240538d67346951b401af9aa8f254bbb6677cf37f29bb1a057e522aa89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9b1240538d67346951b401af9aa8f254bbb6677cf37f29bb1a057e522aa89c->enter($__internal_ec9b1240538d67346951b401af9aa8f254bbb6677cf37f29bb1a057e522aa89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecdf571e4618cd2f63f3b17cbd1a1a05c5cf08b6aef43142387c3b7dfba0107->leave($__internal_6ecdf571e4618cd2f63f3b17cbd1a1a05c5cf08b6aef43142387c3b7dfba0107_prof);

        
        $__internal_ec9b1240538d67346951b401af9aa8f254bbb6677cf37f29bb1a057e522aa89c->leave($__internal_ec9b1240538d67346951b401af9aa8f254bbb6677cf37f29bb1a057e522aa89c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_571cde886fb6f578010d7398aedff515c8bf93338413aae72800ff4d7229b9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571cde886fb6f578010d7398aedff515c8bf93338413aae72800ff4d7229b9df->enter($__internal_571cde886fb6f578010d7398aedff515c8bf93338413aae72800ff4d7229b9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bf88208067d2b32b041e2fe4eaed74f55106ade1bec39ebdb1f46b0718d3f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf88208067d2b32b041e2fe4eaed74f55106ade1bec39ebdb1f46b0718d3f59->enter($__internal_9bf88208067d2b32b041e2fe4eaed74f55106ade1bec39ebdb1f46b0718d3f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bf88208067d2b32b041e2fe4eaed74f55106ade1bec39ebdb1f46b0718d3f59->leave($__internal_9bf88208067d2b32b041e2fe4eaed74f55106ade1bec39ebdb1f46b0718d3f59_prof);

        
        $__internal_571cde886fb6f578010d7398aedff515c8bf93338413aae72800ff4d7229b9df->leave($__internal_571cde886fb6f578010d7398aedff515c8bf93338413aae72800ff4d7229b9df_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shop:index.html.twig";
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
", "MarketingBundle:shop:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shop/index.html.twig");
    }
}
