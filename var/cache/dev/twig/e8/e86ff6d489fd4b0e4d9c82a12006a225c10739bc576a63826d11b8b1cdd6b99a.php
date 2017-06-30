<?php

/* @Marketing/provider/show.html.twig */
class __TwigTemplate_a7ccb557adb236ececf226ece8409ba8cc459373c7291cf179f5feddcc93ef3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/provider/show.html.twig", 1);
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
        $__internal_1ca2033677e9893e7935c2d6e834cc37c373a1e2590120acee914ec32ed93324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca2033677e9893e7935c2d6e834cc37c373a1e2590120acee914ec32ed93324->enter($__internal_1ca2033677e9893e7935c2d6e834cc37c373a1e2590120acee914ec32ed93324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/show.html.twig"));

        $__internal_900861b17afb843dde8eaf0e034c470b7875d5a32e28f1e5d70070bdcab09a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900861b17afb843dde8eaf0e034c470b7875d5a32e28f1e5d70070bdcab09a79->enter($__internal_900861b17afb843dde8eaf0e034c470b7875d5a32e28f1e5d70070bdcab09a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca2033677e9893e7935c2d6e834cc37c373a1e2590120acee914ec32ed93324->leave($__internal_1ca2033677e9893e7935c2d6e834cc37c373a1e2590120acee914ec32ed93324_prof);

        
        $__internal_900861b17afb843dde8eaf0e034c470b7875d5a32e28f1e5d70070bdcab09a79->leave($__internal_900861b17afb843dde8eaf0e034c470b7875d5a32e28f1e5d70070bdcab09a79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a9bb09430d7eb0ac849037397f4babd3cc5d313ec936d2c576e84483f27cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a9bb09430d7eb0ac849037397f4babd3cc5d313ec936d2c576e84483f27cd2->enter($__internal_88a9bb09430d7eb0ac849037397f4babd3cc5d313ec936d2c576e84483f27cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66b1b93e0e5d7837ecf8a7accdf41d3ed88133c833ac686c991b1646e5977d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b1b93e0e5d7837ecf8a7accdf41d3ed88133c833ac686c991b1646e5977d0b->enter($__internal_66b1b93e0e5d7837ecf8a7accdf41d3ed88133c833ac686c991b1646e5977d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "isDefault", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_edit", array("id" => $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_66b1b93e0e5d7837ecf8a7accdf41d3ed88133c833ac686c991b1646e5977d0b->leave($__internal_66b1b93e0e5d7837ecf8a7accdf41d3ed88133c833ac686c991b1646e5977d0b_prof);

        
        $__internal_88a9bb09430d7eb0ac849037397f4babd3cc5d313ec936d2c576e84483f27cd2->leave($__internal_88a9bb09430d7eb0ac849037397f4babd3cc5d313ec936d2c576e84483f27cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/provider/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  75 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Provider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ provider.name }}</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>{% if provider.isDefault %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ provider.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('provider_edit', { 'id': provider.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/provider/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\provider\\show.html.twig");
    }
}
