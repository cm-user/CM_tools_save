<?php

/* @FaultyProduct/supplier/camalo.html.twig */
class __TwigTemplate_39e075b91c27a8e7bcc56f62a617ea817b5b644e4fd8ea80fb2390ad9a3c7025 extends Twig_Template
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
        // line 3
        $context["supplierNotRefundedNotEmpty"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
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
                    $context["supplierNotRefundedNotEmpty"] = (($context["supplierNotRefundedNotEmpty"] ?? null) + 1);
                    // line 14
                    echo "                        ";
                    // line 15
                    echo "                        ";
                    if ((($context["supplierNotRefundedNotEmpty"] ?? null) == 1)) {
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
        return array (  179 => 56,  177 => 55,  172 => 52,  166 => 51,  160 => 48,  157 => 47,  138 => 45,  121 => 44,  116 => 42,  112 => 41,  108 => 40,  104 => 39,  98 => 38,  94 => 37,  90 => 36,  86 => 34,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  45 => 10,  42 => 9,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FaultyProduct/supplier/camalo.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\supplier\\camalo.html.twig");
    }
}
