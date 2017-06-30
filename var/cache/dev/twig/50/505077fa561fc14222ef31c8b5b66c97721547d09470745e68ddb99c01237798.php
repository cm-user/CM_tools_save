<?php

/* FaultyProductBundle:supplier:camalo.html.twig */
class __TwigTemplate_2406f44acb65fa51ad0bbd0951244be778958752913d575495a85cda1240a126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:supplier:camalo.html.twig", 1);
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
        $__internal_3a1c66a0cdbc9667e9c21b68c5e520fed762ef7624383f0b30d5e7ce46ab01e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1c66a0cdbc9667e9c21b68c5e520fed762ef7624383f0b30d5e7ce46ab01e5->enter($__internal_3a1c66a0cdbc9667e9c21b68c5e520fed762ef7624383f0b30d5e7ce46ab01e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:supplier:camalo.html.twig"));

        $__internal_0914da9391f4b910603ef86cabdd3e2a8f1a2eb024fc6848aecbefdb37542afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0914da9391f4b910603ef86cabdd3e2a8f1a2eb024fc6848aecbefdb37542afc->enter($__internal_0914da9391f4b910603ef86cabdd3e2a8f1a2eb024fc6848aecbefdb37542afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:supplier:camalo.html.twig"));

        // line 3
        $context["supplierNotRefundedNotEmpty"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1c66a0cdbc9667e9c21b68c5e520fed762ef7624383f0b30d5e7ce46ab01e5->leave($__internal_3a1c66a0cdbc9667e9c21b68c5e520fed762ef7624383f0b30d5e7ce46ab01e5_prof);

        
        $__internal_0914da9391f4b910603ef86cabdd3e2a8f1a2eb024fc6848aecbefdb37542afc->leave($__internal_0914da9391f4b910603ef86cabdd3e2a8f1a2eb024fc6848aecbefdb37542afc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_016bf34ff79aad0fc2f899e6022d8f22543996b647708ef2fc28a1758e10f4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016bf34ff79aad0fc2f899e6022d8f22543996b647708ef2fc28a1758e10f4ee->enter($__internal_016bf34ff79aad0fc2f899e6022d8f22543996b647708ef2fc28a1758e10f4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26b0a7c322804ca1ff3aee695df068e12ed4a97f9dcd3a7d81aab9ee9a53fb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b0a7c322804ca1ff3aee695df068e12ed4a97f9dcd3a7d81aab9ee9a53fb67->enter($__internal_26b0a7c322804ca1ff3aee695df068e12ed4a97f9dcd3a7d81aab9ee9a53fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26b0a7c322804ca1ff3aee695df068e12ed4a97f9dcd3a7d81aab9ee9a53fb67->leave($__internal_26b0a7c322804ca1ff3aee695df068e12ed4a97f9dcd3a7d81aab9ee9a53fb67_prof);

        
        $__internal_016bf34ff79aad0fc2f899e6022d8f22543996b647708ef2fc28a1758e10f4ee->leave($__internal_016bf34ff79aad0fc2f899e6022d8f22543996b647708ef2fc28a1758e10f4ee_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:supplier:camalo.html.twig";
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
{% endblock %}", "FaultyProductBundle:supplier:camalo.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/supplier/camalo.html.twig");
    }
}
