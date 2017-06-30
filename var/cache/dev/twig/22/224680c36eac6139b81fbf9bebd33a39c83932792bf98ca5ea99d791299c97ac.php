<?php

/* @Shop/ShopConfiguration/show.html.twig */
class __TwigTemplate_5b73e3fdab0b9568cfab2cbbe73999320e3e701a2ec87755ac03adc34908740e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/ShopConfiguration/show.html.twig", 1);
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
        $__internal_9477d73e685e46712ea20af0d8bde6e4123ba811dae95f15393bb22277659070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9477d73e685e46712ea20af0d8bde6e4123ba811dae95f15393bb22277659070->enter($__internal_9477d73e685e46712ea20af0d8bde6e4123ba811dae95f15393bb22277659070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/show.html.twig"));

        $__internal_3dce4025f8f207c16244f99f5a7671279583a3e5cf22285775adba98b15d6d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dce4025f8f207c16244f99f5a7671279583a3e5cf22285775adba98b15d6d3a->enter($__internal_3dce4025f8f207c16244f99f5a7671279583a3e5cf22285775adba98b15d6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9477d73e685e46712ea20af0d8bde6e4123ba811dae95f15393bb22277659070->leave($__internal_9477d73e685e46712ea20af0d8bde6e4123ba811dae95f15393bb22277659070_prof);

        
        $__internal_3dce4025f8f207c16244f99f5a7671279583a3e5cf22285775adba98b15d6d3a->leave($__internal_3dce4025f8f207c16244f99f5a7671279583a3e5cf22285775adba98b15d6d3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_787f5416b83189cb6f8cd31a0b84a38e35c6d5647e7bc4ea814bb660081291f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f5416b83189cb6f8cd31a0b84a38e35c6d5647e7bc4ea814bb660081291f9->enter($__internal_787f5416b83189cb6f8cd31a0b84a38e35c6d5647e7bc4ea814bb660081291f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72b3389d3b4a8cf1df95189e3562f9420bcb5057f8fd3949b616293e05570a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3389d3b4a8cf1df95189e3562f9420bcb5057f8fd3949b616293e05570a46->enter($__internal_72b3389d3b4a8cf1df95189e3562f9420bcb5057f8fd3949b616293e05570a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shopconfiguration</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Width</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "width", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "height", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_index");
        echo "\">Retourner à la liste</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_edit", array("id" => $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_72b3389d3b4a8cf1df95189e3562f9420bcb5057f8fd3949b616293e05570a46->leave($__internal_72b3389d3b4a8cf1df95189e3562f9420bcb5057f8fd3949b616293e05570a46_prof);

        
        $__internal_787f5416b83189cb6f8cd31a0b84a38e35c6d5647e7bc4ea814bb660081291f9->leave($__internal_787f5416b83189cb6f8cd31a0b84a38e35c6d5647e7bc4ea814bb660081291f9_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/ShopConfiguration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Shopconfiguration</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ shopConfiguration.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ shopConfiguration.name }}</td>
            </tr>
            <tr>
                <th>Width</th>
                <td>{{ shopConfiguration.width }}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{ shopConfiguration.height }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('carousel_shopconfiguration_index') }}\">Retourner à la liste</a>
        </li>
        <li>
            <a href=\"{{ path('carousel_shopconfiguration_edit', { 'id': shopConfiguration.id }) }}\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Shop/ShopConfiguration/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\ShopConfiguration\\show.html.twig");
    }
}
