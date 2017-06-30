<?php

/* @Marketing/shop/show.html.twig */
class __TwigTemplate_943e4f11792abcc773652e4318b654a2907748554bba5fd2dca7bdba26244c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shop/show.html.twig", 1);
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
        $__internal_c51d9bcdd58c72d26e7ca27acf7559d52a4deb61e3a901552b21cfdf0b65567d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51d9bcdd58c72d26e7ca27acf7559d52a4deb61e3a901552b21cfdf0b65567d->enter($__internal_c51d9bcdd58c72d26e7ca27acf7559d52a4deb61e3a901552b21cfdf0b65567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/show.html.twig"));

        $__internal_c643005fdef3d435cba56c8c615a29f0a525bf9358ebdd0edc0ef7d7a4b2ab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c643005fdef3d435cba56c8c615a29f0a525bf9358ebdd0edc0ef7d7a4b2ab92->enter($__internal_c643005fdef3d435cba56c8c615a29f0a525bf9358ebdd0edc0ef7d7a4b2ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shop/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51d9bcdd58c72d26e7ca27acf7559d52a4deb61e3a901552b21cfdf0b65567d->leave($__internal_c51d9bcdd58c72d26e7ca27acf7559d52a4deb61e3a901552b21cfdf0b65567d_prof);

        
        $__internal_c643005fdef3d435cba56c8c615a29f0a525bf9358ebdd0edc0ef7d7a4b2ab92->leave($__internal_c643005fdef3d435cba56c8c615a29f0a525bf9358ebdd0edc0ef7d7a4b2ab92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eb5a66a146e6cfeb48b31a05d40e56ef2eed22805ce69eac2efed4e8df58812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb5a66a146e6cfeb48b31a05d40e56ef2eed22805ce69eac2efed4e8df58812->enter($__internal_9eb5a66a146e6cfeb48b31a05d40e56ef2eed22805ce69eac2efed4e8df58812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70cd34b2bfc29d3294932450b01a6e6c7e699f9508da36c16e524bf0a7fa7e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cd34b2bfc29d3294932450b01a6e6c7e699f9508da36c16e524bf0a7fa7e93->enter($__internal_70cd34b2bfc29d3294932450b01a6e6c7e699f9508da36c16e524bf0a7fa7e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address1</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "address1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address2</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "address2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Postalcode</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "postalCode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop_edit", array("id" => $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_70cd34b2bfc29d3294932450b01a6e6c7e699f9508da36c16e524bf0a7fa7e93->leave($__internal_70cd34b2bfc29d3294932450b01a6e6c7e699f9508da36c16e524bf0a7fa7e93_prof);

        
        $__internal_9eb5a66a146e6cfeb48b31a05d40e56ef2eed22805ce69eac2efed4e8df58812->leave($__internal_9eb5a66a146e6cfeb48b31a05d40e56ef2eed22805ce69eac2efed4e8df58812_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shop/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  135 => 55,  129 => 52,  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Shop</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ shop.name }}</td>
            </tr>
            <tr>
                <th>Address1</th>
                <td>{{ shop.address1 }}</td>
            </tr>
            <tr>
                <th>Address2</th>
                <td>{{ shop.address2 }}</td>
            </tr>
            <tr>
                <th>Postalcode</th>
                <td>{{ shop.postalCode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ shop.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ shop.country }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ shop.mail }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ shop.phone }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ shop.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('shop_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('shop_edit', { 'id': shop.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/shop/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shop\\show.html.twig");
    }
}
