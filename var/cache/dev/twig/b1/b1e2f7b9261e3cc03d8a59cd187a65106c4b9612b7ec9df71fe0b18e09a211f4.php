<?php

/* MarketingBundle:shop:show.html.twig */
class __TwigTemplate_f3b858b67e6085038841bd086dee4135768bd690fbb39b70742e9078b8857b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shop:show.html.twig", 1);
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
        $__internal_c1c2ba8da9ffd4c573765ddff110c1f026a6e3a12ca79bd08601e6a589f9c54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c2ba8da9ffd4c573765ddff110c1f026a6e3a12ca79bd08601e6a589f9c54d->enter($__internal_c1c2ba8da9ffd4c573765ddff110c1f026a6e3a12ca79bd08601e6a589f9c54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:show.html.twig"));

        $__internal_a94055831f9a57e9a784d15d77413537e7b1bf1fc642fbe9317562bf3dd3e5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94055831f9a57e9a784d15d77413537e7b1bf1fc642fbe9317562bf3dd3e5a5->enter($__internal_a94055831f9a57e9a784d15d77413537e7b1bf1fc642fbe9317562bf3dd3e5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shop:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c2ba8da9ffd4c573765ddff110c1f026a6e3a12ca79bd08601e6a589f9c54d->leave($__internal_c1c2ba8da9ffd4c573765ddff110c1f026a6e3a12ca79bd08601e6a589f9c54d_prof);

        
        $__internal_a94055831f9a57e9a784d15d77413537e7b1bf1fc642fbe9317562bf3dd3e5a5->leave($__internal_a94055831f9a57e9a784d15d77413537e7b1bf1fc642fbe9317562bf3dd3e5a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d2a39e54de06f9ea5e3d141e76723c856a9feb54a5b5e27940263cf9d94268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d2a39e54de06f9ea5e3d141e76723c856a9feb54a5b5e27940263cf9d94268->enter($__internal_b5d2a39e54de06f9ea5e3d141e76723c856a9feb54a5b5e27940263cf9d94268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e4ca6abd5cabc223be83c670747976511e74e1f4170806607eb5c05045f49b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4ca6abd5cabc223be83c670747976511e74e1f4170806607eb5c05045f49b4->enter($__internal_8e4ca6abd5cabc223be83c670747976511e74e1f4170806607eb5c05045f49b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e4ca6abd5cabc223be83c670747976511e74e1f4170806607eb5c05045f49b4->leave($__internal_8e4ca6abd5cabc223be83c670747976511e74e1f4170806607eb5c05045f49b4_prof);

        
        $__internal_b5d2a39e54de06f9ea5e3d141e76723c856a9feb54a5b5e27940263cf9d94268->leave($__internal_b5d2a39e54de06f9ea5e3d141e76723c856a9feb54a5b5e27940263cf9d94268_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shop:show.html.twig";
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
", "MarketingBundle:shop:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shop/show.html.twig");
    }
}
