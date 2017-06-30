<?php

/* @FaultyProduct/faulty/index.html.twig */
class __TwigTemplate_d609c9d0f9fe58c69c8994e24d86edcf2ff2fe5bb6b1efcbc9b46ef520942df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faulty/index.html.twig", 1);
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
        echo "    <h1>Liste des défectueux</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom du produit</th>
                <th>Statut</th>
                <th>Déclarant</th>
                <th>Date de création</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faulties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faulty"]) {
            // line 19
            echo "            ";
            if (($this->getAttribute($context["faulty"], "status", array()) == "new")) {
                // line 20
                echo "                ";
                $context["class"] = "info";
                // line 21
                echo "            ";
            } elseif (($this->getAttribute($context["faulty"], "status", array()) == "mail_send")) {
                // line 22
                echo "                ";
                $context["class"] = "warning";
                // line 23
                echo "            ";
            } elseif (($this->getAttribute($context["faulty"], "status", array()) == "refunded")) {
                // line 24
                echo "                ";
                $context["class"] = "success";
                // line 25
                echo "            ";
            } elseif (($this->getAttribute($context["faulty"], "status", array()) == "balance")) {
                // line 26
                echo "                ";
                $context["class"] = "danger";
                // line 27
                echo "            ";
            } else {
                // line 28
                echo "                ";
                $context["class"] = "";
                // line 29
                echo "            ";
            }
            // line 30
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($context["faulty"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faulty"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["faulty"], "product", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["faulty"], "formattedStatus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["faulty"], "user", array()), "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["faulty"], "user", array()), "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["faulty"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($context["faulty"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_edit", array("id" => $this->getAttribute($context["faulty"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_delete_bybutton", array("id" => $this->getAttribute($context["faulty"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faulty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
        ";
        // line 57
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["faulties"] ?? null));
        echo "
    </div>

    <a class=\"btn btn-success\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un nouveau défectueux
    </a>

    <br/>
    <br/>
    <br/>
    <a class=\"btn btn-danger btn-lg\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_download");
        echo "\">
        <span class=\"glyphicon glyphicon-ice-lolly-tasted\"></span>
        Export des défectueux de l'entrepôt en CSV
        <span class=\"glyphicon glyphicon-sunglasses\"></span>
    </a>
";
    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faulty/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  154 => 60,  148 => 57,  142 => 53,  129 => 46,  122 => 42,  114 => 37,  109 => 35,  103 => 34,  99 => 33,  95 => 32,  89 => 31,  84 => 30,  81 => 29,  78 => 28,  75 => 27,  72 => 26,  69 => 25,  66 => 24,  63 => 23,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FaultyProduct/faulty/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faulty\\index.html.twig");
    }
}
