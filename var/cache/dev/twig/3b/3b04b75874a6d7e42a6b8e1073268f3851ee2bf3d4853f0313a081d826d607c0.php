<?php

/* @Marketing/modelnewsletter/index.html.twig */
class __TwigTemplate_a47bb4fb1cfa96b0b00b12a740569241366935e89a1598c0de57cad563da6374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/modelnewsletter/index.html.twig", 1);
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
        $__internal_efd831664049958d8ef8d04c723c5c3487edd1be664c5d5b77eb7ff252a77202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd831664049958d8ef8d04c723c5c3487edd1be664c5d5b77eb7ff252a77202->enter($__internal_efd831664049958d8ef8d04c723c5c3487edd1be664c5d5b77eb7ff252a77202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/index.html.twig"));

        $__internal_85a81bac4dfbfa44cd20ebfe6291ec0287b5549ed6714de6cb75aae589f1722e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a81bac4dfbfa44cd20ebfe6291ec0287b5549ed6714de6cb75aae589f1722e->enter($__internal_85a81bac4dfbfa44cd20ebfe6291ec0287b5549ed6714de6cb75aae589f1722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd831664049958d8ef8d04c723c5c3487edd1be664c5d5b77eb7ff252a77202->leave($__internal_efd831664049958d8ef8d04c723c5c3487edd1be664c5d5b77eb7ff252a77202_prof);

        
        $__internal_85a81bac4dfbfa44cd20ebfe6291ec0287b5549ed6714de6cb75aae589f1722e->leave($__internal_85a81bac4dfbfa44cd20ebfe6291ec0287b5549ed6714de6cb75aae589f1722e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f4d7177e1a666599a85b51d9ad31c0a2494bd163519327f8db2f7b665655f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4d7177e1a666599a85b51d9ad31c0a2494bd163519327f8db2f7b665655f65->enter($__internal_9f4d7177e1a666599a85b51d9ad31c0a2494bd163519327f8db2f7b665655f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a952e3b50d80f14de6445697e55d81fbf8a0691e6c884945f440fa8db1d99a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a952e3b50d80f14de6445697e55d81fbf8a0691e6c884945f440fa8db1d99a0->enter($__internal_9a952e3b50d80f14de6445697e55d81fbf8a0691e6c884945f440fa8db1d99a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Path CSS</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modelNewsletters"] ?? $this->getContext($context, "modelNewsletters")));
        foreach ($context['_seq'] as $context["_key"] => $context["modelNewsletter"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_show", array("id" => $this->getAttribute($context["modelNewsletter"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modelNewsletter"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["modelNewsletter"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["modelNewsletter"], "pathCss", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["modelNewsletter"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_show", array("id" => $this->getAttribute($context["modelNewsletter"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_edit", array("id" => $this->getAttribute($context["modelNewsletter"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelNewsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_new");
        echo "\" class=\"btn btn-info\">Ajouter un modele de newsletter</a>
";
        
        $__internal_9a952e3b50d80f14de6445697e55d81fbf8a0691e6c884945f440fa8db1d99a0->leave($__internal_9a952e3b50d80f14de6445697e55d81fbf8a0691e6c884945f440fa8db1d99a0_prof);

        
        $__internal_9f4d7177e1a666599a85b51d9ad31c0a2494bd163519327f8db2f7b665655f65->leave($__internal_9f4d7177e1a666599a85b51d9ad31c0a2494bd163519327f8db2f7b665655f65_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/modelnewsletter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ModelNewsletter list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Path CSS</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for modelNewsletter in modelNewsletters %}
            <tr>
                <td><a href=\"{{ path('modelnewsletter_show', { 'id': modelNewsletter.id }) }}\">{{ modelNewsletter.name }}</a></td>
                <td>{{ modelNewsletter.path }}</td>
                <td>{{ modelNewsletter.pathCss }}</td>
                <td>{{ modelNewsletter.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('modelnewsletter_show', { 'id': modelNewsletter.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('modelnewsletter_edit', { 'id': modelNewsletter.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('modelnewsletter_new') }}\" class=\"btn btn-info\">Ajouter un modele de newsletter</a>
{% endblock %}
", "@Marketing/modelnewsletter/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\modelnewsletter\\index.html.twig");
    }
}
