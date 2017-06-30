<?php

/* MarketingBundle:provider:index.html.twig */
class __TwigTemplate_87a520ea7d56c2c4f1eff1446bf98f5aeae36a754b1404545b54c4b15fc931ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:provider:index.html.twig", 1);
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
        $__internal_b18dfc8fd6d52e50d0dafbd71efae0d3952ec4e4a383aa4d01988b72a556c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18dfc8fd6d52e50d0dafbd71efae0d3952ec4e4a383aa4d01988b72a556c569->enter($__internal_b18dfc8fd6d52e50d0dafbd71efae0d3952ec4e4a383aa4d01988b72a556c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:index.html.twig"));

        $__internal_169eaeeccbfd0feb6636a23fb18c87460d917862275eca00e7da90b4cdc8b9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169eaeeccbfd0feb6636a23fb18c87460d917862275eca00e7da90b4cdc8b9c4->enter($__internal_169eaeeccbfd0feb6636a23fb18c87460d917862275eca00e7da90b4cdc8b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18dfc8fd6d52e50d0dafbd71efae0d3952ec4e4a383aa4d01988b72a556c569->leave($__internal_b18dfc8fd6d52e50d0dafbd71efae0d3952ec4e4a383aa4d01988b72a556c569_prof);

        
        $__internal_169eaeeccbfd0feb6636a23fb18c87460d917862275eca00e7da90b4cdc8b9c4->leave($__internal_169eaeeccbfd0feb6636a23fb18c87460d917862275eca00e7da90b4cdc8b9c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06bf0d7332d4308f3349c237892b0c5bf059c4865d95b3938a92fef25d2c1eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bf0d7332d4308f3349c237892b0c5bf059c4865d95b3938a92fef25d2c1eaa->enter($__internal_06bf0d7332d4308f3349c237892b0c5bf059c4865d95b3938a92fef25d2c1eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a24b4228ef3894c5e0b08aaaf0d8d4664a7b5b6d261041cfe63c7c16d6eba0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a24b4228ef3894c5e0b08aaaf0d8d4664a7b5b6d261041cfe63c7c16d6eba0e->enter($__internal_6a24b4228ef3894c5e0b08aaaf0d8d4664a7b5b6d261041cfe63c7c16d6eba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Isdefault</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? $this->getContext($context, "providers")));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["provider"], "isDefault", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_edit", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_new");
        echo "\" class=\"btn btn-info\">Ajouter un fournisseur de mail</a>
";
        
        $__internal_6a24b4228ef3894c5e0b08aaaf0d8d4664a7b5b6d261041cfe63c7c16d6eba0e->leave($__internal_6a24b4228ef3894c5e0b08aaaf0d8d4664a7b5b6d261041cfe63c7c16d6eba0e_prof);

        
        $__internal_06bf0d7332d4308f3349c237892b0c5bf059c4865d95b3938a92fef25d2c1eaa->leave($__internal_06bf0d7332d4308f3349c237892b0c5bf059c4865d95b3938a92fef25d2c1eaa_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:provider:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  109 => 33,  97 => 27,  91 => 24,  84 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Provider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Isdefault</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for provider in providers %}
            <tr>
                <td><a href=\"{{ path('provider_show', { 'id': provider.id }) }}\">{{ provider.name }}</a></td>
                <td>{% if provider.isDefault %}Yes{% else %}No{% endif %}</td>
                <td>{{ provider.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('provider_show', { 'id': provider.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('provider_edit', { 'id': provider.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('provider_new') }}\" class=\"btn btn-info\">Ajouter un fournisseur de mail</a>
{% endblock %}
", "MarketingBundle:provider:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/provider/index.html.twig");
    }
}
