<?php

/* @Marketing/newsletterblocktype/index.html.twig */
class __TwigTemplate_442232e0bdcd40534c220c813724bbcbca6bee643da322e2b272b3472986249e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblocktype/index.html.twig", 1);
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
        $__internal_5f3e93188a48e7171e183737d026f639c3946ce88f0e3d75651726b28e6b131b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3e93188a48e7171e183737d026f639c3946ce88f0e3d75651726b28e6b131b->enter($__internal_5f3e93188a48e7171e183737d026f639c3946ce88f0e3d75651726b28e6b131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/index.html.twig"));

        $__internal_640b6ba9046b66c8b85ca391e033dc169200c9bf369f57f74d3264014bd5f5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640b6ba9046b66c8b85ca391e033dc169200c9bf369f57f74d3264014bd5f5da->enter($__internal_640b6ba9046b66c8b85ca391e033dc169200c9bf369f57f74d3264014bd5f5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3e93188a48e7171e183737d026f639c3946ce88f0e3d75651726b28e6b131b->leave($__internal_5f3e93188a48e7171e183737d026f639c3946ce88f0e3d75651726b28e6b131b_prof);

        
        $__internal_640b6ba9046b66c8b85ca391e033dc169200c9bf369f57f74d3264014bd5f5da->leave($__internal_640b6ba9046b66c8b85ca391e033dc169200c9bf369f57f74d3264014bd5f5da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a618df92a45bf26c0f234731cd381d626a045468366b34aa2d6928deb9f01198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a618df92a45bf26c0f234731cd381d626a045468366b34aa2d6928deb9f01198->enter($__internal_a618df92a45bf26c0f234731cd381d626a045468366b34aa2d6928deb9f01198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6be47e9a4d21479dc6334c19dffb911a88ca2b70d47151d508bdb74bdf06c6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be47e9a4d21479dc6334c19dffb911a88ca2b70d47151d508bdb74bdf06c6b1->enter($__internal_6be47e9a4d21479dc6334c19dffb911a88ca2b70d47151d508bdb74bdf06c6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlockType list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterBlockTypes"] ?? $this->getContext($context, "newsletterBlockTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterBlockType"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_show", array("id" => $this->getAttribute($context["newsletterBlockType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlockType"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlockType"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlockType"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_show", array("id" => $this->getAttribute($context["newsletterBlockType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_edit", array("id" => $this->getAttribute($context["newsletterBlockType"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterBlockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_new");
        echo "\" class=\"btn btn-info\">Ajouter un type de block</a>
";
        
        $__internal_6be47e9a4d21479dc6334c19dffb911a88ca2b70d47151d508bdb74bdf06c6b1->leave($__internal_6be47e9a4d21479dc6334c19dffb911a88ca2b70d47151d508bdb74bdf06c6b1_prof);

        
        $__internal_a618df92a45bf26c0f234731cd381d626a045468366b34aa2d6928deb9f01198->leave($__internal_a618df92a45bf26c0f234731cd381d626a045468366b34aa2d6928deb9f01198_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblocktype/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterBlockType list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterBlockType in newsletterBlockTypes %}
            <tr>
                <td><a href=\"{{ path('newsletterblocktype_show', { 'id': newsletterBlockType.id }) }}\">{{ newsletterBlockType.name }}</a></td>
                <td>{{ newsletterBlockType.path }}</td>
                <td>{{ newsletterBlockType.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterblocktype_show', { 'id': newsletterBlockType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterblocktype_edit', { 'id': newsletterBlockType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newsletterblocktype_new') }}\" class=\"btn btn-info\">Ajouter un type de block</a>
{% endblock %}
", "@Marketing/newsletterblocktype/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblocktype\\index.html.twig");
    }
}
