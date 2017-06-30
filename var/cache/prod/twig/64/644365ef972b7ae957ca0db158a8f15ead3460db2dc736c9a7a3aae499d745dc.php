<?php

/* @FaultyProduct/supplier/index.html.twig */
class __TwigTemplate_8901da045dfde3e9e20b8870b68a8472736bcdc94469cf2442d6d27279b66bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/supplier/index.html.twig", 1);
        $this->blocks = array(
            'product_date_send' => array($this, 'block_product_date_send'),
            'product_balance' => array($this, 'block_product_balance'),
            'product' => array($this, 'block_product'),
            'table_head' => array($this, 'block_table_head'),
            'table_head_date_send' => array($this, 'block_table_head_date_send'),
            'table_foot' => array($this, 'block_table_foot'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_product_date_send($context, array $blocks = array())
    {
        // line 4
        echo "    <tr>
        <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", array()), "html", null, true);
        echo "</td>
        <td><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</a></td>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "supplierReference", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? null), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
        <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "formattedLocation", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "productImages", array()));
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
            // line 14
            echo "                <a href=\"";
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
        // line 16
        echo "        </td>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "sendMailAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                    <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                    <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
";
    }

    // line 36
    public function block_product_balance($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "sendMailAt", array()), "+3 month"), "Y-m-d") < twig_date_format_filter($this->env, ($context["now"] ?? null), "Y-m-d"))) {
            // line 39
            echo "        <tr class=\"danger\">
    ";
        } else {
            // line 41
            echo "        <tr>
    ";
        }
        // line 43
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", array()), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</a></td>
    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "supplierReference", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? null), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "formattedLocation", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "productImages", array()));
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
            // line 52
            echo "            <a href=\"";
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
        // line 54
        echo "    </td>
    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "sendMailAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Modifier le statut <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
            </ul>
        </div>
    </td>
    </tr>
";
    }

    // line 73
    public function block_product($context, array $blocks = array())
    {
        // line 74
        echo "    <tr>
        <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "supplierReference", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? null), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
        <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "formattedLocation", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "productImages", array()));
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
            // line 84
            echo "                <a href=\"";
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
        // line 86
        echo "        </td>
        <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                    <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                    <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                    <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? null), "supplier" => $this->getAttribute(($context["supplier"] ?? null), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
";
    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        // line 105
        echo "    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
";
    }

    // line 123
    public function block_table_head_date_send($context, array $blocks = array())
    {
        // line 124
        echo "    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Date envoi de mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
";
    }

    // line 143
    public function block_table_foot($context, array $blocks = array())
    {
        // line 144
        echo "        </tbody>
    </table>
";
    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        // line 149
        echo "    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 152
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["supplier"], "products", array())) > 0)) {
                // line 153
                echo "            ";
                list($context["new"], $context["mail_send"], $context["refunded"], $context["balance"]) =                 array("", "", "", "");
                // line 154
                echo "            ";
                list($context["new_size"], $context["mail_send_size"], $context["refunded_size"], $context["balance_size"]) =                 array(0, 0, 0, 0);
                // line 155
                echo "
            ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["supplier"], "products", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 157
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "new")) {
                        // line 158
                        echo "                    ";
                        ob_start();
                        // line 159
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
                        echo "
                        ";
                        // line 160
                        $this->displayBlock("product", $context, $blocks);
                        echo "
                    ";
                        $context["new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 162
                        echo "                    ";
                        $context["new_size"] = (($context["new_size"] ?? null) + 1);
                        // line 163
                        echo "                ";
                    }
                    // line 164
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "mail_send")) {
                        // line 165
                        echo "                    ";
                        ob_start();
                        // line 166
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["mail_send"] ?? null), "html", null, true);
                        echo "
                        ";
                        // line 167
                        $this->displayBlock("product_date_send", $context, $blocks);
                        echo "
                    ";
                        $context["mail_send"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 169
                        echo "                    ";
                        $context["mail_send_size"] = (($context["mail_send_size"] ?? null) + 1);
                        // line 170
                        echo "                ";
                    }
                    // line 171
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "balance")) {
                        // line 172
                        echo "                    ";
                        ob_start();
                        // line 173
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["balance"] ?? null), "html", null, true);
                        echo "
                        ";
                        // line 174
                        $this->displayBlock("product_balance", $context, $blocks);
                        echo "
                    ";
                        $context["balance"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 176
                        echo "                    ";
                        $context["balance_size"] = (($context["balance_size"] ?? null) + 1);
                        // line 177
                        echo "                ";
                    }
                    // line 178
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "refunded")) {
                        // line 179
                        echo "                    ";
                        ob_start();
                        // line 180
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["refunded"] ?? null), "html", null, true);
                        echo "
                        ";
                        // line 181
                        $this->displayBlock("product_date_send", $context, $blocks);
                        echo "
                    ";
                        $context["refunded"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 183
                        echo "                    ";
                        $context["refunded_size"] = (($context["refunded_size"] ?? null) + 1);
                        // line 184
                        echo "                ";
                    }
                    // line 185
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "
            ";
                // line 187
                if ((((((($context["new_size"] ?? null) > 0) && (($context["status"] ?? null) == "new")) || ((($context["mail_send_size"] ?? null) > 0) && (($context["status"] ?? null) == "mail_send"))) || ((($context["balance_size"] ?? null) > 0) && (($context["status"] ?? null) == "balance"))) || ((($context["refunded_size"] ?? null) > 0) && (($context["status"] ?? null) == "refunded")))) {
                    // line 188
                    echo "                <h1 id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "idPrestashopSupplier", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array()), "html", null, true);
                    echo "</h1>

                ";
                    // line 190
                    $context["supplier_name_link"] = twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array())), array(" " => "_"));
                    // line 191
                    echo "
                <div>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        ";
                    // line 194
                    $context["active"] = true;
                    // line 195
                    echo "                        ";
                    if (((($context["new_size"] ?? null) > 0) && (($context["status"] ?? null) == "new"))) {
                        // line 196
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? null)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 197
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "new\" aria-controls=\"new\" role=\"tab\" data-toggle=\"tab\">A déclarer</a>
                            </li>
                            ";
                        // line 199
                        $context["active"] = false;
                        // line 200
                        echo "                        ";
                    }
                    // line 201
                    echo "                        ";
                    if (((($context["mail_send_size"] ?? null) > 0) && (($context["status"] ?? null) == "mail_send"))) {
                        // line 202
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? null)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 203
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "mail_send\" aria-controls=\"mail_send\" role=\"tab\" data-toggle=\"tab\">Mail envoyé</a>
                            </li>
                            ";
                        // line 205
                        $context["active"] = false;
                        // line 206
                        echo "                        ";
                    }
                    // line 207
                    echo "                        ";
                    if (((($context["balance_size"] ?? null) > 0) && (($context["status"] ?? null) == "balance"))) {
                        // line 208
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? null)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 209
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "balance\" aria-controls=\"balance\" role=\"tab\" data-toggle=\"tab\">Renvoi du fournisseur</a>
                            </li>
                            ";
                        // line 211
                        $context["active"] = false;
                        // line 212
                        echo "                        ";
                    }
                    // line 213
                    echo "                        ";
                    if (((($context["refunded_size"] ?? null) > 0) && (($context["status"] ?? null) == "refunded"))) {
                        // line 214
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? null)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 215
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "refunded\" aria-controls=\"refunded\" role=\"tab\" data-toggle=\"tab\">Terminé / Remboursé</a>
                            </li>
                            ";
                        // line 217
                        $context["active"] = false;
                        // line 218
                        echo "                        ";
                    }
                    // line 219
                    echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
                    // line 221
                    $context["active"] = true;
                    // line 222
                    echo "                        ";
                    if (((($context["new_size"] ?? null) > 0) && (($context["status"] ?? null) == "new"))) {
                        // line 223
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? null)) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "new\">
                                ";
                        // line 224
                        $this->displayBlock("table_head", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 230
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "mail_send", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 231
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "balance", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"";
                        // line 232
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "refunded", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 236
                        $context["active"] = false;
                        // line 237
                        echo "                        ";
                    }
                    // line 238
                    echo "                        ";
                    if (((($context["mail_send_size"] ?? null) > 0) && (($context["status"] ?? null) == "mail_send"))) {
                        // line 239
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? null)) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "mail_send\">
                                ";
                        // line 240
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["mail_send"] ?? null), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "new", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 247
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "balance", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"";
                        // line 248
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "refunded", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 252
                        $context["active"] = false;
                        // line 253
                        echo "                        ";
                    }
                    // line 254
                    echo "                        ";
                    if (((($context["balance_size"] ?? null) > 0) && (($context["status"] ?? null) == "balance"))) {
                        // line 255
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? null)) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "balance\">
                                ";
                        // line 256
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["balance"] ?? null), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 262
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "new", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 263
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "mail_send", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 264
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "refunded", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 268
                        $context["active"] = false;
                        // line 269
                        echo "                        ";
                    }
                    // line 270
                    echo "                        ";
                    if (((($context["refunded_size"] ?? null) > 0) && (($context["status"] ?? null) == "refunded"))) {
                        // line 271
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? null)) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? null), "html", null, true);
                        echo "refunded\">
                                ";
                        // line 272
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["refunded"] ?? null), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 278
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "new", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 279
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "mail_send", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 280
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "balance", "return" => ($context["status"] ?? null))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 284
                        $context["active"] = false;
                        // line 285
                        echo "                        ";
                    }
                    // line 286
                    echo "                    </div>
                </div>
            ";
                }
                // line 289
                echo "        ";
            }
            // line 290
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@FaultyProduct/supplier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 290,  871 => 289,  866 => 286,  863 => 285,  861 => 284,  854 => 280,  850 => 279,  846 => 278,  835 => 272,  826 => 271,  823 => 270,  820 => 269,  818 => 268,  811 => 264,  807 => 263,  803 => 262,  792 => 256,  783 => 255,  780 => 254,  777 => 253,  775 => 252,  768 => 248,  764 => 247,  760 => 246,  749 => 240,  740 => 239,  737 => 238,  734 => 237,  732 => 236,  725 => 232,  721 => 231,  717 => 230,  706 => 224,  697 => 223,  694 => 222,  692 => 221,  688 => 219,  685 => 218,  683 => 217,  678 => 215,  671 => 214,  668 => 213,  665 => 212,  663 => 211,  658 => 209,  651 => 208,  648 => 207,  645 => 206,  643 => 205,  638 => 203,  631 => 202,  628 => 201,  625 => 200,  623 => 199,  618 => 197,  611 => 196,  608 => 195,  606 => 194,  601 => 191,  599 => 190,  591 => 188,  589 => 187,  586 => 186,  572 => 185,  569 => 184,  566 => 183,  561 => 181,  556 => 180,  553 => 179,  550 => 178,  547 => 177,  544 => 176,  539 => 174,  534 => 173,  531 => 172,  528 => 171,  525 => 170,  522 => 169,  517 => 167,  512 => 166,  509 => 165,  506 => 164,  503 => 163,  500 => 162,  495 => 160,  490 => 159,  487 => 158,  484 => 157,  467 => 156,  464 => 155,  461 => 154,  458 => 153,  455 => 152,  438 => 151,  434 => 149,  431 => 148,  425 => 144,  422 => 143,  401 => 124,  398 => 123,  378 => 105,  375 => 104,  365 => 97,  361 => 96,  357 => 95,  353 => 94,  343 => 87,  340 => 86,  321 => 84,  304 => 83,  299 => 81,  295 => 80,  291 => 79,  287 => 78,  283 => 77,  279 => 76,  275 => 75,  272 => 74,  269 => 73,  259 => 66,  255 => 65,  251 => 64,  247 => 63,  237 => 56,  233 => 55,  230 => 54,  211 => 52,  194 => 51,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  173 => 45,  167 => 44,  162 => 43,  158 => 41,  154 => 39,  151 => 38,  149 => 37,  146 => 36,  136 => 28,  132 => 27,  128 => 26,  124 => 25,  114 => 18,  110 => 17,  107 => 16,  88 => 14,  71 => 13,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  44 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FaultyProduct/supplier/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\supplier\\index.html.twig");
    }
}
