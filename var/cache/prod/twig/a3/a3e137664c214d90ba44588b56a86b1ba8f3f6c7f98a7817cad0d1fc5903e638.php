<?php

/* @FaultyProduct/faulty/show.html.twig */
class __TwigTemplate_663c855be13feb9dcc6ba011dbfaf89f7d3aebe51a041a1ec54a2ac5482bee10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faulty/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Défectueux</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Déclarant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "user", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "reason", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 20
        if ($this->getAttribute(($context["faulty"] ?? null), "idOrder", array())) {
            // line 21
            echo "            <tr>
                <th>Numéro de commande</th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "idOrder", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        // line 26
        echo "            <tr>
                <th>Statut</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "formattedStatus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h2>Produit</h2>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu du produit</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "formattedLocation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "link", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "link", array()), "html", null, true);
        echo "</a></td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix d'achat</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "costPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Référence fournisseur</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "supplierReference", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "productImages", array())) > 0)) {
            // line 69
            echo "        <h2>Images</h2>

        <div class=\"row\">
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "productImages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["productImages"]) {
                // line 73
                echo "            <div class=\"col-xs-6 col-md-3\">
                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
                echo "\" class=\"thumbnail\">
                    <img src=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
                echo "\">
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </div>
    ";
        }
        // line 81
        echo "
    <h2>Fournisseur</h2>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["faulty"] ?? null), "product", array()), "supplier", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 93
        if ((twig_length_filter($this->env, $this->getAttribute(($context["faulty"] ?? null), "faultyActions", array())) > 0)) {
            // line 94
            echo "        <h2>Les actions</h2>

        <table class=\"table table-bordered table-hover\">
            <tbody>
                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["faulty"] ?? null), "faultyActions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 99
                echo "                    <tr>
                        <th>Message</th>
                        <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "message", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["action"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </tbody>
        </table>
    ";
        }
        // line 108
        echo "
    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_edit", array("id" => $this->getAttribute(($context["faulty"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faulty/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 120,  241 => 118,  234 => 114,  227 => 110,  223 => 108,  218 => 105,  209 => 102,  205 => 101,  201 => 99,  197 => 98,  191 => 94,  189 => 93,  181 => 88,  172 => 81,  168 => 79,  158 => 75,  154 => 74,  151 => 73,  147 => 72,  142 => 69,  140 => 68,  132 => 63,  125 => 59,  118 => 55,  109 => 51,  102 => 47,  95 => 43,  81 => 32,  74 => 28,  70 => 26,  64 => 23,  60 => 21,  58 => 20,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FaultyProduct/faulty/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faulty\\show.html.twig");
    }
}
