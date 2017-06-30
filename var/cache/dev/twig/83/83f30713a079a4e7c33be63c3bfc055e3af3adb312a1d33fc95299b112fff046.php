<?php

/* @Marketing/newslettermenu/index.html.twig */
class __TwigTemplate_4e87231c3bac629c2068e271ad38212acdbaf9f0048d44639475b835ddfa6e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newslettermenu/index.html.twig", 1);
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
        $__internal_bd5abddf6f65c861f446276331f41e6f63e99c74d369c4ed9d1dc62d68c3bd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5abddf6f65c861f446276331f41e6f63e99c74d369c4ed9d1dc62d68c3bd5a->enter($__internal_bd5abddf6f65c861f446276331f41e6f63e99c74d369c4ed9d1dc62d68c3bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/index.html.twig"));

        $__internal_3f8c37c1c48cfd69387eb2cd0938592c12fd9e3c59073234a4d0a8fee62b148a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8c37c1c48cfd69387eb2cd0938592c12fd9e3c59073234a4d0a8fee62b148a->enter($__internal_3f8c37c1c48cfd69387eb2cd0938592c12fd9e3c59073234a4d0a8fee62b148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5abddf6f65c861f446276331f41e6f63e99c74d369c4ed9d1dc62d68c3bd5a->leave($__internal_bd5abddf6f65c861f446276331f41e6f63e99c74d369c4ed9d1dc62d68c3bd5a_prof);

        
        $__internal_3f8c37c1c48cfd69387eb2cd0938592c12fd9e3c59073234a4d0a8fee62b148a->leave($__internal_3f8c37c1c48cfd69387eb2cd0938592c12fd9e3c59073234a4d0a8fee62b148a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae2f6b97266c5026a22bffb69358041d48169c2c1b617a290da888736ed0e0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2f6b97266c5026a22bffb69358041d48169c2c1b617a290da888736ed0e0b8->enter($__internal_ae2f6b97266c5026a22bffb69358041d48169c2c1b617a290da888736ed0e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b1a01df926e2114f9d5799e0ef5a9bcca7691391a4d6fb8574319cc68a5ee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1a01df926e2114f9d5799e0ef5a9bcca7691391a4d6fb8574319cc68a5ee82->enter($__internal_4b1a01df926e2114f9d5799e0ef5a9bcca7691391a4d6fb8574319cc68a5ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Position</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterMenus"] ?? $this->getContext($context, "newsletterMenus")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterMenu"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_show", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_show", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_edit", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_new");
        echo "\" class=\"btn btn-info\">Ajouter un menu</a>
";
        
        $__internal_4b1a01df926e2114f9d5799e0ef5a9bcca7691391a4d6fb8574319cc68a5ee82->leave($__internal_4b1a01df926e2114f9d5799e0ef5a9bcca7691391a4d6fb8574319cc68a5ee82_prof);

        
        $__internal_ae2f6b97266c5026a22bffb69358041d48169c2c1b617a290da888736ed0e0b8->leave($__internal_ae2f6b97266c5026a22bffb69358041d48169c2c1b617a290da888736ed0e0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newslettermenu/index.html.twig";
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
    <h1>NewsletterMenu list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Position</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterMenu in newsletterMenus %}
            <tr>
                <td><a href=\"{{ path('newslettermenu_show', { 'id': newsletterMenu.id }) }}\">{{ newsletterMenu.title }}</a></td>
                <td>{{ newsletterMenu.link }}</td>
                <td>{{ newsletterMenu.position }}</td>
                <td>{{ newsletterMenu.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newslettermenu_show', { 'id': newsletterMenu.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newslettermenu_edit', { 'id': newsletterMenu.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newslettermenu_new') }}\" class=\"btn btn-info\">Ajouter un menu</a>
{% endblock %}
", "@Marketing/newslettermenu/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newslettermenu\\index.html.twig");
    }
}
