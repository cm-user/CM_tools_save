<?php

/* MarketingBundle:modelnewsletter:index.html.twig */
class __TwigTemplate_cdc8c8965b745072d83a89782ea9b7c08d81c54259498981b23e008c94f315cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:modelnewsletter:index.html.twig", 1);
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
        $__internal_9f0c9623d47bf712d6203fdde2ebbebcfea0ac8af7d10dc5887fb31193b6836a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0c9623d47bf712d6203fdde2ebbebcfea0ac8af7d10dc5887fb31193b6836a->enter($__internal_9f0c9623d47bf712d6203fdde2ebbebcfea0ac8af7d10dc5887fb31193b6836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:index.html.twig"));

        $__internal_b4ec33cdf0bde5d4a8dd2e75b3d579943d93b0c3b3c44a3faead1f2bf146a164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ec33cdf0bde5d4a8dd2e75b3d579943d93b0c3b3c44a3faead1f2bf146a164->enter($__internal_b4ec33cdf0bde5d4a8dd2e75b3d579943d93b0c3b3c44a3faead1f2bf146a164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0c9623d47bf712d6203fdde2ebbebcfea0ac8af7d10dc5887fb31193b6836a->leave($__internal_9f0c9623d47bf712d6203fdde2ebbebcfea0ac8af7d10dc5887fb31193b6836a_prof);

        
        $__internal_b4ec33cdf0bde5d4a8dd2e75b3d579943d93b0c3b3c44a3faead1f2bf146a164->leave($__internal_b4ec33cdf0bde5d4a8dd2e75b3d579943d93b0c3b3c44a3faead1f2bf146a164_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_134228bb6c70302fc6670d0cedbcd14e38039a0f0abcbb52241c50bcffedf0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134228bb6c70302fc6670d0cedbcd14e38039a0f0abcbb52241c50bcffedf0eb->enter($__internal_134228bb6c70302fc6670d0cedbcd14e38039a0f0abcbb52241c50bcffedf0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba399029cba2547e6a2226d5f87ea22e71e105a40a334f77db6b5a74fda802d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba399029cba2547e6a2226d5f87ea22e71e105a40a334f77db6b5a74fda802d1->enter($__internal_ba399029cba2547e6a2226d5f87ea22e71e105a40a334f77db6b5a74fda802d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba399029cba2547e6a2226d5f87ea22e71e105a40a334f77db6b5a74fda802d1->leave($__internal_ba399029cba2547e6a2226d5f87ea22e71e105a40a334f77db6b5a74fda802d1_prof);

        
        $__internal_134228bb6c70302fc6670d0cedbcd14e38039a0f0abcbb52241c50bcffedf0eb->leave($__internal_134228bb6c70302fc6670d0cedbcd14e38039a0f0abcbb52241c50bcffedf0eb_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:modelnewsletter:index.html.twig";
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
", "MarketingBundle:modelnewsletter:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/modelnewsletter/index.html.twig");
    }
}
