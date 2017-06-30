<?php

/* @Marketing/shopconfiguration/index.html.twig */
class __TwigTemplate_bef7449f498b089618257e9ef1af0260a8d5e70f213b39145b2dab9e888170b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shopconfiguration/index.html.twig", 1);
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
        $__internal_5e7cb8601325adaba631c2a5fe03c560be68fbb2955d0c7cf2757a76d5939675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7cb8601325adaba631c2a5fe03c560be68fbb2955d0c7cf2757a76d5939675->enter($__internal_5e7cb8601325adaba631c2a5fe03c560be68fbb2955d0c7cf2757a76d5939675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/index.html.twig"));

        $__internal_c583d578ac772fee528e46ceab0c890143fcc6e443599897aedc735edd3b85c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c583d578ac772fee528e46ceab0c890143fcc6e443599897aedc735edd3b85c9->enter($__internal_c583d578ac772fee528e46ceab0c890143fcc6e443599897aedc735edd3b85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7cb8601325adaba631c2a5fe03c560be68fbb2955d0c7cf2757a76d5939675->leave($__internal_5e7cb8601325adaba631c2a5fe03c560be68fbb2955d0c7cf2757a76d5939675_prof);

        
        $__internal_c583d578ac772fee528e46ceab0c890143fcc6e443599897aedc735edd3b85c9->leave($__internal_c583d578ac772fee528e46ceab0c890143fcc6e443599897aedc735edd3b85c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0601fba9b35eb95e9c7cba8d77b2ec9b3f275d91583e80e9a52e2e481506bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0601fba9b35eb95e9c7cba8d77b2ec9b3f275d91583e80e9a52e2e481506bc3->enter($__internal_e0601fba9b35eb95e9c7cba8d77b2ec9b3f275d91583e80e9a52e2e481506bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09edb7fb84007e6455929de62a600be4e5bc7207ab02fbe1ef56c9fba7732f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09edb7fb84007e6455929de62a600be4e5bc7207ab02fbe1ef56c9fba7732f44->enter($__internal_09edb7fb84007e6455929de62a600be4e5bc7207ab02fbe1ef56c9fba7732f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09edb7fb84007e6455929de62a600be4e5bc7207ab02fbe1ef56c9fba7732f44->leave($__internal_09edb7fb84007e6455929de62a600be4e5bc7207ab02fbe1ef56c9fba7732f44_prof);

        
        $__internal_e0601fba9b35eb95e9c7cba8d77b2ec9b3f275d91583e80e9a52e2e481506bc3->leave($__internal_e0601fba9b35eb95e9c7cba8d77b2ec9b3f275d91583e80e9a52e2e481506bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shopconfiguration/index.html.twig";
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
", "@Marketing/shopconfiguration/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shopconfiguration\\index.html.twig");
    }
}
