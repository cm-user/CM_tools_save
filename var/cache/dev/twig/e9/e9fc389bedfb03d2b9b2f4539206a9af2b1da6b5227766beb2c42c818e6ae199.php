<?php

/* MarketingBundle:newsletterproduct:show.html.twig */
class __TwigTemplate_1d4506dd2025d94c68d8eddf6f05569dfe2233ea27ea114ec1de1718f44a3864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterproduct:show.html.twig", 1);
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
        $__internal_e3ac3202eb729ae93aecfa214d78515b678aee9ee6328e41b5299560a77bd21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ac3202eb729ae93aecfa214d78515b678aee9ee6328e41b5299560a77bd21e->enter($__internal_e3ac3202eb729ae93aecfa214d78515b678aee9ee6328e41b5299560a77bd21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:show.html.twig"));

        $__internal_8c5a117ec62d9b4b15a210081c69d575e6a6ff7d2cf752fbcd5b450398513fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5a117ec62d9b4b15a210081c69d575e6a6ff7d2cf752fbcd5b450398513fd0->enter($__internal_8c5a117ec62d9b4b15a210081c69d575e6a6ff7d2cf752fbcd5b450398513fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ac3202eb729ae93aecfa214d78515b678aee9ee6328e41b5299560a77bd21e->leave($__internal_e3ac3202eb729ae93aecfa214d78515b678aee9ee6328e41b5299560a77bd21e_prof);

        
        $__internal_8c5a117ec62d9b4b15a210081c69d575e6a6ff7d2cf752fbcd5b450398513fd0->leave($__internal_8c5a117ec62d9b4b15a210081c69d575e6a6ff7d2cf752fbcd5b450398513fd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_248e325ea0348242896636d9b97bb438524d41eb7055ff50f924bbcaa113df9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248e325ea0348242896636d9b97bb438524d41eb7055ff50f924bbcaa113df9b->enter($__internal_248e325ea0348242896636d9b97bb438524d41eb7055ff50f924bbcaa113df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27cb54918ae1bef1987998f8d7ebd976625d90f6485664aa1a49e812abcd9a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cb54918ae1bef1987998f8d7ebd976625d90f6485664aa1a49e812abcd9a0d->enter($__internal_27cb54918ae1bef1987998f8d7ebd976625d90f6485664aa1a49e812abcd9a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProduct</h1>

    <table>
        <tbody>
            <tr>
                <th>Position</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idprestashopproduct</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "idPrestashopProduct", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Priceold</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "priceOld", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "picture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_edit", array("id" => $this->getAttribute(($context["newsletterProduct"] ?? $this->getContext($context, "newsletterProduct")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_27cb54918ae1bef1987998f8d7ebd976625d90f6485664aa1a49e812abcd9a0d->leave($__internal_27cb54918ae1bef1987998f8d7ebd976625d90f6485664aa1a49e812abcd9a0d_prof);

        
        $__internal_248e325ea0348242896636d9b97bb438524d41eb7055ff50f924bbcaa113df9b->leave($__internal_248e325ea0348242896636d9b97bb438524d41eb7055ff50f924bbcaa113df9b_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterproduct:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 53,  128 => 51,  122 => 48,  116 => 45,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterProduct</h1>

    <table>
        <tbody>
            <tr>
                <th>Position</th>
                <td>{{ newsletterProduct.position }}</td>
            </tr>
            <tr>
                <th>Idprestashopproduct</th>
                <td>{{ newsletterProduct.idPrestashopProduct }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ newsletterProduct.title }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ newsletterProduct.price }}</td>
            </tr>
            <tr>
                <th>Priceold</th>
                <td>{{ newsletterProduct.priceOld }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ newsletterProduct.link }}</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>{{ newsletterProduct.picture }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterProduct.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterproduct_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterproduct_edit', { 'id': newsletterProduct.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterproduct:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterproduct/show.html.twig");
    }
}
