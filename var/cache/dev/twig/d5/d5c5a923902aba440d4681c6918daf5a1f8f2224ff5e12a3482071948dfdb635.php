<?php

/* FaultyProductBundle:faulty:show.html.twig */
class __TwigTemplate_589ea0c4ea4e88af6496e14c268dc113863b960f6a37f60d3900bdcc16ceefe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faulty:show.html.twig", 1);
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
        $__internal_9f4d7e0d1ed287e74aabd2cee8392c3b6444894d2956c14315d0386ee5855d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4d7e0d1ed287e74aabd2cee8392c3b6444894d2956c14315d0386ee5855d61->enter($__internal_9f4d7e0d1ed287e74aabd2cee8392c3b6444894d2956c14315d0386ee5855d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:show.html.twig"));

        $__internal_a56ba3473e396cdbcc584d3a5cd0dd9ac74c0aa6b4f5e23a9b06edb32dd7df12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56ba3473e396cdbcc584d3a5cd0dd9ac74c0aa6b4f5e23a9b06edb32dd7df12->enter($__internal_a56ba3473e396cdbcc584d3a5cd0dd9ac74c0aa6b4f5e23a9b06edb32dd7df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f4d7e0d1ed287e74aabd2cee8392c3b6444894d2956c14315d0386ee5855d61->leave($__internal_9f4d7e0d1ed287e74aabd2cee8392c3b6444894d2956c14315d0386ee5855d61_prof);

        
        $__internal_a56ba3473e396cdbcc584d3a5cd0dd9ac74c0aa6b4f5e23a9b06edb32dd7df12->leave($__internal_a56ba3473e396cdbcc584d3a5cd0dd9ac74c0aa6b4f5e23a9b06edb32dd7df12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e642884d3dff92e7da777fe978aedb614838dff11ee0b4c47aa3b7300545515b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e642884d3dff92e7da777fe978aedb614838dff11ee0b4c47aa3b7300545515b->enter($__internal_e642884d3dff92e7da777fe978aedb614838dff11ee0b4c47aa3b7300545515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e376525f1e2082121ee053716f3014c2292b7c65218c85314e4955ee27830bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e376525f1e2082121ee053716f3014c2292b7c65218c85314e4955ee27830bc2->enter($__internal_e376525f1e2082121ee053716f3014c2292b7c65218c85314e4955ee27830bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Défectueux</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Déclarant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "user", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "reason", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 20
        if ($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "idOrder", array())) {
            // line 21
            echo "            <tr>
                <th>Numéro de commande</th>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "idOrder", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        // line 26
        echo "            <tr>
                <th>Statut</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "formattedStatus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu du produit</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "formattedLocation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "link", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "link", array()), "html", null, true);
        echo "</a></td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix d'achat</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "costPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Référence fournisseur</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "supplierReference", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "productImages", array())) > 0)) {
            // line 69
            echo "        <h2>Images</h2>

        <div class=\"row\">
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "productImages", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "product", array()), "supplier", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 93
        if ((twig_length_filter($this->env, $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "faultyActions", array())) > 0)) {
            // line 94
            echo "        <h2>Les actions</h2>

        <table class=\"table table-bordered table-hover\">
            <tbody>
                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "faultyActions", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_edit", array("id" => $this->getAttribute(($context["faulty"] ?? $this->getContext($context, "faulty")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_e376525f1e2082121ee053716f3014c2292b7c65218c85314e4955ee27830bc2->leave($__internal_e376525f1e2082121ee053716f3014c2292b7c65218c85314e4955ee27830bc2_prof);

        
        $__internal_e642884d3dff92e7da777fe978aedb614838dff11ee0b4c47aa3b7300545515b->leave($__internal_e642884d3dff92e7da777fe978aedb614838dff11ee0b4c47aa3b7300545515b_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faulty:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 120,  259 => 118,  252 => 114,  245 => 110,  241 => 108,  236 => 105,  227 => 102,  223 => 101,  219 => 99,  215 => 98,  209 => 94,  207 => 93,  199 => 88,  190 => 81,  186 => 79,  176 => 75,  172 => 74,  169 => 73,  165 => 72,  160 => 69,  158 => 68,  150 => 63,  143 => 59,  136 => 55,  127 => 51,  120 => 47,  113 => 43,  99 => 32,  92 => 28,  88 => 26,  82 => 23,  78 => 21,  76 => 20,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Défectueux</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ faulty.id }}</td>
            </tr>
            <tr>
                <th>Déclarant</th>
                <td>{{ faulty.user.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ faulty.reason }}</td>
            </tr>
            {% if faulty.idOrder %}
            <tr>
                <th>Numéro de commande</th>
                <td>{{ faulty.idOrder }}</td>
            </tr>
            {% endif %}
            <tr>
                <th>Statut</th>
                <td>{{ faulty.formattedStatus }}</td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>{{ faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Produit</h2>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ faulty.product.name }}</td>
            </tr>
            <tr>
                <th>Lieu du produit</th>
                <td>{{ faulty.product.formattedLocation }}</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td><a href=\"{{ faulty.product.link }}\" target=\"_blank\">{{ faulty.product.link }}</a></td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>{{ faulty.product.quantity }}</td>
            </tr>
            <tr>
                <th>Prix d'achat</th>
                <td>{{ faulty.product.costPrice }}</td>
            </tr>
            <tr>
                <th>Référence fournisseur</th>
                <td>{{ faulty.product.supplierReference }}</td>
            </tr>
        </tbody>
    </table>

    {% if faulty.product.productImages|length > 0 %}
        <h2>Images</h2>

        <div class=\"row\">
        {% for productImages in faulty.product.productImages %}
            <div class=\"col-xs-6 col-md-3\">
                <a href=\"{{ productImages.picture }}\" class=\"thumbnail\">
                    <img src=\"{{ productImages.picture }}\">
                </a>
            </div>
        {% endfor %}
        </div>
    {% endif %}

    <h2>Fournisseur</h2>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ faulty.product.supplier.name }}</td>
            </tr>
        </tbody>
    </table>

    {% if faulty.faultyActions|length > 0 %}
        <h2>Les actions</h2>

        <table class=\"table table-bordered table-hover\">
            <tbody>
                {% for action in faulty.faultyActions %}
                    <tr>
                        <th>Message</th>
                        <td>{{ action.message }}</td>
                        <td>{{ action.createdAt|date(\"Y-m-d H:i:s\") }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('faulty_index') }}\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"{{ path('faulty_edit', { 'id': faulty.id }) }}\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}
", "FaultyProductBundle:faulty:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faulty/show.html.twig");
    }
}
