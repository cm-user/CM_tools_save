<?php

/* MarketingBundle:shopconfiguration:show.html.twig */
class __TwigTemplate_df13a36fe5c89d52f2d09eb2759f62c68a64ec3ff66bdc14087041ad2e5430ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shopconfiguration:show.html.twig", 1);
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
        $__internal_541bd68b86758c4da2d8021151d85db073c780a62e43310841b1e8813360b1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541bd68b86758c4da2d8021151d85db073c780a62e43310841b1e8813360b1f3->enter($__internal_541bd68b86758c4da2d8021151d85db073c780a62e43310841b1e8813360b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:show.html.twig"));

        $__internal_07308e56e30b6bb5d806675cd835e3c9468fe9c48e50e0be19c15181efabaaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07308e56e30b6bb5d806675cd835e3c9468fe9c48e50e0be19c15181efabaaed->enter($__internal_07308e56e30b6bb5d806675cd835e3c9468fe9c48e50e0be19c15181efabaaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541bd68b86758c4da2d8021151d85db073c780a62e43310841b1e8813360b1f3->leave($__internal_541bd68b86758c4da2d8021151d85db073c780a62e43310841b1e8813360b1f3_prof);

        
        $__internal_07308e56e30b6bb5d806675cd835e3c9468fe9c48e50e0be19c15181efabaaed->leave($__internal_07308e56e30b6bb5d806675cd835e3c9468fe9c48e50e0be19c15181efabaaed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7df9938c5962a350090443c13ae1b2a1027eb8bbc8cf0f2220a1fa0945d309f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7df9938c5962a350090443c13ae1b2a1027eb8bbc8cf0f2220a1fa0945d309f->enter($__internal_b7df9938c5962a350090443c13ae1b2a1027eb8bbc8cf0f2220a1fa0945d309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e911745fcfd93c67f7624aefe0bc1b242c3bdff4a505b9aaa25fac9152e0ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e911745fcfd93c67f7624aefe0bc1b242c3bdff4a505b9aaa25fac9152e0ae6->enter($__internal_4e911745fcfd93c67f7624aefe0bc1b242c3bdff4a505b9aaa25fac9152e0ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_edit", array("id" => $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4e911745fcfd93c67f7624aefe0bc1b242c3bdff4a505b9aaa25fac9152e0ae6->leave($__internal_4e911745fcfd93c67f7624aefe0bc1b242c3bdff4a505b9aaa25fac9152e0ae6_prof);

        
        $__internal_b7df9938c5962a350090443c13ae1b2a1027eb8bbc8cf0f2220a1fa0945d309f->leave($__internal_b7df9938c5962a350090443c13ae1b2a1027eb8bbc8cf0f2220a1fa0945d309f_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shopconfiguration:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ShopConfiguration</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ shopConfiguration.name }}</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>{{ shopConfiguration.value }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if shopConfiguration.createdAt %}{{ shopConfiguration.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if shopConfiguration.updatedAt %}{{ shopConfiguration.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ shopConfiguration.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('shopconfiguration_edit', { 'id': shopConfiguration.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:shopconfiguration:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shopconfiguration/show.html.twig");
    }
}
