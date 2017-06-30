<?php

/* ShopBundle:ShopConfiguration:show.html.twig */
class __TwigTemplate_2cb0b317b696e5c6123da55157298029146ba6e93b3324043931a62ebfaaf10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:ShopConfiguration:show.html.twig", 1);
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
        $__internal_1541969c4bcedb33db7aa6629e30061a79b1efc8d2a58012d4d1651216423292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1541969c4bcedb33db7aa6629e30061a79b1efc8d2a58012d4d1651216423292->enter($__internal_1541969c4bcedb33db7aa6629e30061a79b1efc8d2a58012d4d1651216423292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:show.html.twig"));

        $__internal_7990ef0c1047bd2ca28d87593d9a21879ce17275486dc3ac081564b5c310f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7990ef0c1047bd2ca28d87593d9a21879ce17275486dc3ac081564b5c310f97e->enter($__internal_7990ef0c1047bd2ca28d87593d9a21879ce17275486dc3ac081564b5c310f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1541969c4bcedb33db7aa6629e30061a79b1efc8d2a58012d4d1651216423292->leave($__internal_1541969c4bcedb33db7aa6629e30061a79b1efc8d2a58012d4d1651216423292_prof);

        
        $__internal_7990ef0c1047bd2ca28d87593d9a21879ce17275486dc3ac081564b5c310f97e->leave($__internal_7990ef0c1047bd2ca28d87593d9a21879ce17275486dc3ac081564b5c310f97e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f49904fba7d8fa22f97dc29b4ccc1598719342e7456abb1f8e4da6d9b0d9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f49904fba7d8fa22f97dc29b4ccc1598719342e7456abb1f8e4da6d9b0d9a0->enter($__internal_86f49904fba7d8fa22f97dc29b4ccc1598719342e7456abb1f8e4da6d9b0d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d21c8906208de014b2fdde2513d9ec22a3ce954a518615295a343437cb8edf32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21c8906208de014b2fdde2513d9ec22a3ce954a518615295a343437cb8edf32->enter($__internal_d21c8906208de014b2fdde2513d9ec22a3ce954a518615295a343437cb8edf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d21c8906208de014b2fdde2513d9ec22a3ce954a518615295a343437cb8edf32->leave($__internal_d21c8906208de014b2fdde2513d9ec22a3ce954a518615295a343437cb8edf32_prof);

        
        $__internal_86f49904fba7d8fa22f97dc29b4ccc1598719342e7456abb1f8e4da6d9b0d9a0->leave($__internal_86f49904fba7d8fa22f97dc29b4ccc1598719342e7456abb1f8e4da6d9b0d9a0_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:ShopConfiguration:show.html.twig";
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
", "ShopBundle:ShopConfiguration:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/ShopConfiguration/show.html.twig");
    }
}
