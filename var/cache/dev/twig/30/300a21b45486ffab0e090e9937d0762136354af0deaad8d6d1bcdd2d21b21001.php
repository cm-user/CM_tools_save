<?php

/* MarketingBundle:shopconfiguration:index.html.twig */
class __TwigTemplate_a197d49ab35036492edcd6282e930b2c9df3180630752cc49571a325a5be1232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shopconfiguration:index.html.twig", 1);
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
        $__internal_ab8c4eb61e3c7dd850610e35eed534d85ba5d3c7f89264518c592f58f84b655c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8c4eb61e3c7dd850610e35eed534d85ba5d3c7f89264518c592f58f84b655c->enter($__internal_ab8c4eb61e3c7dd850610e35eed534d85ba5d3c7f89264518c592f58f84b655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:index.html.twig"));

        $__internal_41be0a0d281e8ba793376c28e4928f7918ddb9aa5199a55a8764596525248746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41be0a0d281e8ba793376c28e4928f7918ddb9aa5199a55a8764596525248746->enter($__internal_41be0a0d281e8ba793376c28e4928f7918ddb9aa5199a55a8764596525248746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab8c4eb61e3c7dd850610e35eed534d85ba5d3c7f89264518c592f58f84b655c->leave($__internal_ab8c4eb61e3c7dd850610e35eed534d85ba5d3c7f89264518c592f58f84b655c_prof);

        
        $__internal_41be0a0d281e8ba793376c28e4928f7918ddb9aa5199a55a8764596525248746->leave($__internal_41be0a0d281e8ba793376c28e4928f7918ddb9aa5199a55a8764596525248746_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a0be4d27e10a4c798c21bd016933e111895ef4c4a3e07ffcc6c9e29b3baeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a0be4d27e10a4c798c21bd016933e111895ef4c4a3e07ffcc6c9e29b3baeb2->enter($__internal_78a0be4d27e10a4c798c21bd016933e111895ef4c4a3e07ffcc6c9e29b3baeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4521b53b0c17458a6a8fa9bdacfb04288b2b8276da65ec686c10115db1715383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4521b53b0c17458a6a8fa9bdacfb04288b2b8276da65ec686c10115db1715383->enter($__internal_4521b53b0c17458a6a8fa9bdacfb04288b2b8276da65ec686c10115db1715383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shopConfigurations"] ?? $this->getContext($context, "shopConfigurations")));
        foreach ($context['_seq'] as $context["_key"] => $context["shopConfiguration"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "value", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["shopConfiguration"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["shopConfiguration"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["shopConfiguration"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["shopConfiguration"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_edit", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopConfiguration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_new");
        echo "\" class=\"btn btn-info\">Ajouter une configuration</a>
";
        
        $__internal_4521b53b0c17458a6a8fa9bdacfb04288b2b8276da65ec686c10115db1715383->leave($__internal_4521b53b0c17458a6a8fa9bdacfb04288b2b8276da65ec686c10115db1715383_prof);

        
        $__internal_78a0be4d27e10a4c798c21bd016933e111895ef4c4a3e07ffcc6c9e29b3baeb2->leave($__internal_78a0be4d27e10a4c798c21bd016933e111895ef4c4a3e07ffcc6c9e29b3baeb2_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shopconfiguration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  119 => 37,  107 => 31,  101 => 28,  94 => 24,  88 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ShopConfiguration list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for shopConfiguration in shopConfigurations %}
            <tr>
                <td><a href=\"{{ path('shopconfiguration_show', { 'id': shopConfiguration.id }) }}\">{{ shopConfiguration.name }}</a></td>
                <td>{{ shopConfiguration.value }}</td>
                <td>{% if shopConfiguration.createdAt %}{{ shopConfiguration.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if shopConfiguration.updatedAt %}{{ shopConfiguration.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ shopConfiguration.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('shopconfiguration_show', { 'id': shopConfiguration.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('shopconfiguration_edit', { 'id': shopConfiguration.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('shopconfiguration_new') }}\" class=\"btn btn-info\">Ajouter une configuration</a>
{% endblock %}
", "MarketingBundle:shopconfiguration:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shopconfiguration/index.html.twig");
    }
}
