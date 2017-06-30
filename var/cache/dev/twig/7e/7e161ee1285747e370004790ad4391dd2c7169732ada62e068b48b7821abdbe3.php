<?php

/* FaultyProductBundle:faulty:index.html.twig */
class __TwigTemplate_37a78c27844129de6c70cddd1205edd1aee554b0c807fe917c9a85233cf0c633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faulty:index.html.twig", 1);
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
        $__internal_8dcf47034f24876c5c2d3fe45d362906a16bbdc1487560e45497cc356b806756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcf47034f24876c5c2d3fe45d362906a16bbdc1487560e45497cc356b806756->enter($__internal_8dcf47034f24876c5c2d3fe45d362906a16bbdc1487560e45497cc356b806756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:index.html.twig"));

        $__internal_1e52487ee48744869995295364abb6700e5d6863aaa9514db0d2475655842030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e52487ee48744869995295364abb6700e5d6863aaa9514db0d2475655842030->enter($__internal_1e52487ee48744869995295364abb6700e5d6863aaa9514db0d2475655842030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcf47034f24876c5c2d3fe45d362906a16bbdc1487560e45497cc356b806756->leave($__internal_8dcf47034f24876c5c2d3fe45d362906a16bbdc1487560e45497cc356b806756_prof);

        
        $__internal_1e52487ee48744869995295364abb6700e5d6863aaa9514db0d2475655842030->leave($__internal_1e52487ee48744869995295364abb6700e5d6863aaa9514db0d2475655842030_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e35fa0999a99358364afa53023a62ed9aebea5dfd2e33969e9eba0d9b289cf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35fa0999a99358364afa53023a62ed9aebea5dfd2e33969e9eba0d9b289cf05->enter($__internal_e35fa0999a99358364afa53023a62ed9aebea5dfd2e33969e9eba0d9b289cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_431d931b8b9d7921260e5c7e1a44c8585891b536d64bb99737e4af6c31f8a1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431d931b8b9d7921260e5c7e1a44c8585891b536d64bb99737e4af6c31f8a1d1->enter($__internal_431d931b8b9d7921260e5c7e1a44c8585891b536d64bb99737e4af6c31f8a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["faulties"] ?? $this->getContext($context, "faulties")));
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
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["faulties"] ?? $this->getContext($context, "faulties")));
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
        
        $__internal_431d931b8b9d7921260e5c7e1a44c8585891b536d64bb99737e4af6c31f8a1d1->leave($__internal_431d931b8b9d7921260e5c7e1a44c8585891b536d64bb99737e4af6c31f8a1d1_prof);

        
        $__internal_e35fa0999a99358364afa53023a62ed9aebea5dfd2e33969e9eba0d9b289cf05->leave($__internal_e35fa0999a99358364afa53023a62ed9aebea5dfd2e33969e9eba0d9b289cf05_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faulty:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 68,  172 => 60,  166 => 57,  160 => 53,  147 => 46,  140 => 42,  132 => 37,  127 => 35,  121 => 34,  117 => 33,  113 => 32,  107 => 31,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des défectueux</h1>

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
        {% for faulty in faulties %}
            {% if faulty.status == \"new\" %}
                {% set class = 'info' %}
            {% elseif faulty.status == 'mail_send' %}
                {% set class = 'warning' %}
            {% elseif faulty.status == 'refunded' %}
                {% set class = 'success' %}
            {% elseif faulty.status == 'balance' %}
                {% set class = 'danger' %}
            {% else %}
                {% set class = '' %}
            {% endif %}
            <tr class=\"{{ class }}\">
                <td><a href=\"{{ path('faulty_show', { 'id': faulty.id }) }}\">{{ faulty.id }}</a></td>
                <td>{{ faulty.product.name }}</td>
                <td>{{ faulty.formattedStatus }}</td>
                <td>{{ faulty.user.name }} - {{ faulty.user.surname }}</td>
                <td>{{ faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('faulty_show', { 'id': faulty.id }) }}\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"{{ path('faulty_edit', { 'id': faulty.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"{{ path('faulty_delete_bybutton', { 'id': faulty.id }) }}\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(faulties) }}
    </div>

    <a class=\"btn btn-success\" href=\"{{ path('faulty_new') }}\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un nouveau défectueux
    </a>

    <br/>
    <br/>
    <br/>
    <a class=\"btn btn-danger btn-lg\" href=\"{{ path('faulty_download') }}\">
        <span class=\"glyphicon glyphicon-ice-lolly-tasted\"></span>
        Export des défectueux de l'entrepôt en CSV
        <span class=\"glyphicon glyphicon-sunglasses\"></span>
    </a>
{% endblock %}
", "FaultyProductBundle:faulty:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faulty/index.html.twig");
    }
}
