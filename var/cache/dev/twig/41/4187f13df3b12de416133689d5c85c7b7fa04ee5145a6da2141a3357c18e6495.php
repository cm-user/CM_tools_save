<?php

/* @FaultyProduct/supplier/camalo.html.twig */
class __TwigTemplate_8a22ba2224df4a68991046fdf9b3a8a63154f7b68c46c4d236b2a59ac4fe84a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/supplier/camalo.html.twig", 1);
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
        $__internal_e6c0851b502354e9c03ac2b2bde8014a6898817a87328cae9939bd18be44b33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c0851b502354e9c03ac2b2bde8014a6898817a87328cae9939bd18be44b33c->enter($__internal_e6c0851b502354e9c03ac2b2bde8014a6898817a87328cae9939bd18be44b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/supplier/camalo.html.twig"));

        $__internal_fe0dd0ebf7a32d16befeca538da99681a8e946da0ecb0486dfb740216b41a909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0dd0ebf7a32d16befeca538da99681a8e946da0ecb0486dfb740216b41a909->enter($__internal_fe0dd0ebf7a32d16befeca538da99681a8e946da0ecb0486dfb740216b41a909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/supplier/camalo.html.twig"));

        // line 3
        $context["supplierNotRefundedNotEmpty"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c0851b502354e9c03ac2b2bde8014a6898817a87328cae9939bd18be44b33c->leave($__internal_e6c0851b502354e9c03ac2b2bde8014a6898817a87328cae9939bd18be44b33c_prof);

        
        $__internal_fe0dd0ebf7a32d16befeca538da99681a8e946da0ecb0486dfb740216b41a909->leave($__internal_fe0dd0ebf7a32d16befeca538da99681a8e946da0ecb0486dfb740216b41a909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69418d7977df384d09617b413aaa2804b216b1a82d15485ff181f626a81cf64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69418d7977df384d09617b413aaa2804b216b1a82d15485ff181f626a81cf64d->enter($__internal_69418d7977df384d09617b413aaa2804b216b1a82d15485ff181f626a81cf64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bcf0c29fb2e9c952ea19437bf3f25c1430ec601f85531d5261a716ff4b92859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcf0c29fb2e9c952ea19437bf3f25c1430ec601f85531d5261a716ff4b92859->enter($__internal_6bcf0c29fb2e9c952ea19437bf3f25c1430ec601f85531d5261a716ff4b92859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? $this->getContext($context, "suppliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 9
            echo "
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["supplier"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) != "refunded")) {
                    // line 12
                    echo "                        ";
                    // line 13
                    echo "                        ";
                    $context["supplierNotRefundedNotEmpty"] = (($context["supplierNotRefundedNotEmpty"] ?? $this->getContext($context, "supplierNotRefundedNotEmpty")) + 1);
                    // line 14
                    echo "                        ";
                    // line 15
                    echo "                        ";
                    if ((($context["supplierNotRefundedNotEmpty"] ?? $this->getContext($context, "supplierNotRefundedNotEmpty")) == 1)) {
                        // line 16
                        echo "                            <h1 id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "idPrestashopSupplier", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array()), "html", null, true);
                        echo "</h1>

                            <table class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th>Quantité</th>
                                <th>Status</th>
                                <th>Nom du produit</th>
                                <th>Référence fournisseur</th>
                                <th>Prix</th>
                                <th>Déclarant</th>
                                <th>Raison</th>
                                <th>Image</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                        ";
                    }
                    // line 34
                    echo "
                        <tr>
                            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()), "html", null, true);
                    echo "</td>
                            <td><a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("faulty_show", array("id" => $this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "id", array()))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                    echo "</a></td>
                            <td>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "supplierReference", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "costPrice", array()), 2), "html", null, true);
                    echo " €</td>
                            <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "user", array()), "name", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "reason", array()), "html", null, true);
                    echo "</td>
                            <td>
                                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "productImages", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["productImages"]) {
                        // line 45
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
                        echo "\">image ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "</a><br/>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImages'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                            </td>
                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                // line 51
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </tbody>
            </table>

        ";
            // line 55
            $context["supplierNotRefundedNotEmpty"] = 0;
            // line 56
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6bcf0c29fb2e9c952ea19437bf3f25c1430ec601f85531d5261a716ff4b92859->leave($__internal_6bcf0c29fb2e9c952ea19437bf3f25c1430ec601f85531d5261a716ff4b92859_prof);

        
        $__internal_69418d7977df384d09617b413aaa2804b216b1a82d15485ff181f626a81cf64d->leave($__internal_69418d7977df384d09617b413aaa2804b216b1a82d15485ff181f626a81cf64d_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/supplier/camalo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  195 => 55,  190 => 52,  184 => 51,  178 => 48,  175 => 47,  156 => 45,  139 => 44,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 34,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% set supplierNotRefundedNotEmpty = 0 %}

{% block body %}
    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    {% for supplier in suppliers %}

                {% for product in supplier.products %}
                    {% if  product.faulty.status != \"refunded\" %}
                        {#on incremente si le status n'est pas refunded#}
                        {% set supplierNotRefundedNotEmpty = supplierNotRefundedNotEmpty + 1 %}
                        {#Si c'est la première fois on affiche le haut du tableau#}
                        {% if supplierNotRefundedNotEmpty == 1 %}
                            <h1 id=\"{{ supplier.idPrestashopSupplier }}\">{{ supplier.name }}</h1>

                            <table class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th>Quantité</th>
                                <th>Status</th>
                                <th>Nom du produit</th>
                                <th>Référence fournisseur</th>
                                <th>Prix</th>
                                <th>Déclarant</th>
                                <th>Raison</th>
                                <th>Image</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                        {% endif %}

                        <tr>
                            <td>{{ product.quantity }}</td>
                            <td>{{ product.faulty.status }}</td>
                            <td><a href=\"{{ url('faulty_show', {'id': product.faulty.id}) }}\" >{{ product.name }}</a></td>
                            <td>{{ product.supplierReference }}</td>
                            <td>{{ product.costPrice|number_format(2) }} €</td>
                            <td>{{ product.faulty.user.name }}</td>
                            <td>{{ product.faulty.reason }}</td>
                            <td>
                                {% for productImages in product.productImages %}
                                    <a href=\"{{ productImages.picture }}\">image {{ loop.index }}</a><br/>
                                {% endfor %}
                            </td>
                            <td>{{ product.faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>

        {% set supplierNotRefundedNotEmpty = 0 %}

    {% endfor %}
{% endblock %}", "@FaultyProduct/supplier/camalo.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\supplier\\camalo.html.twig");
    }
}
