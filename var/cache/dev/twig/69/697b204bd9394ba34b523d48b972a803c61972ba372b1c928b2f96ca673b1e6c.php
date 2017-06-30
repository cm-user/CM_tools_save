<?php

/* @Marketing/newsletterproduct/show.html.twig */
class __TwigTemplate_d6a7bf0c3a617f8578406ad7543a898aefae42fa740d1cdf73f0c59980cb5534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterproduct/show.html.twig", 1);
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
        $__internal_c62791d762a883adc97e88986692672e8f6b9e3d4a18f95596756636c56696ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62791d762a883adc97e88986692672e8f6b9e3d4a18f95596756636c56696ca->enter($__internal_c62791d762a883adc97e88986692672e8f6b9e3d4a18f95596756636c56696ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/show.html.twig"));

        $__internal_9581cf72c4d612d026f3fd48e67b22bd91c854e13dcc463e5eee6376d8f2ee1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9581cf72c4d612d026f3fd48e67b22bd91c854e13dcc463e5eee6376d8f2ee1e->enter($__internal_9581cf72c4d612d026f3fd48e67b22bd91c854e13dcc463e5eee6376d8f2ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62791d762a883adc97e88986692672e8f6b9e3d4a18f95596756636c56696ca->leave($__internal_c62791d762a883adc97e88986692672e8f6b9e3d4a18f95596756636c56696ca_prof);

        
        $__internal_9581cf72c4d612d026f3fd48e67b22bd91c854e13dcc463e5eee6376d8f2ee1e->leave($__internal_9581cf72c4d612d026f3fd48e67b22bd91c854e13dcc463e5eee6376d8f2ee1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b5d46ce01ff22ba917684c8751996ac431912fca4d676849e9f2bd1543eb25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5d46ce01ff22ba917684c8751996ac431912fca4d676849e9f2bd1543eb25d->enter($__internal_2b5d46ce01ff22ba917684c8751996ac431912fca4d676849e9f2bd1543eb25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe6917d923dcef30143fcefd9580a5e1ea2de5cf9df20f4ba52cdb3d47836181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6917d923dcef30143fcefd9580a5e1ea2de5cf9df20f4ba52cdb3d47836181->enter($__internal_fe6917d923dcef30143fcefd9580a5e1ea2de5cf9df20f4ba52cdb3d47836181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe6917d923dcef30143fcefd9580a5e1ea2de5cf9df20f4ba52cdb3d47836181->leave($__internal_fe6917d923dcef30143fcefd9580a5e1ea2de5cf9df20f4ba52cdb3d47836181_prof);

        
        $__internal_2b5d46ce01ff22ba917684c8751996ac431912fca4d676849e9f2bd1543eb25d->leave($__internal_2b5d46ce01ff22ba917684c8751996ac431912fca4d676849e9f2bd1543eb25d_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterproduct/show.html.twig";
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
", "@Marketing/newsletterproduct/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterproduct\\show.html.twig");
    }
}
