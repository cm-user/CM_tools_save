<?php

/* ShopBundle:ShopConfiguration:index.html.twig */
class __TwigTemplate_2702ac68fbced4bb61189a33813fa424dffcb098d463918d68568aa39862bd22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:ShopConfiguration:index.html.twig", 1);
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
        $__internal_8aac04f7022d37872c9aebe0e14a688fa4a27cda29eb193993e4d2b82234e0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aac04f7022d37872c9aebe0e14a688fa4a27cda29eb193993e4d2b82234e0c9->enter($__internal_8aac04f7022d37872c9aebe0e14a688fa4a27cda29eb193993e4d2b82234e0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:index.html.twig"));

        $__internal_bf5212bf623c4e39b566a1b8f9cac262643731c80d0423cb0cecc2c32b7a3d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5212bf623c4e39b566a1b8f9cac262643731c80d0423cb0cecc2c32b7a3d96->enter($__internal_bf5212bf623c4e39b566a1b8f9cac262643731c80d0423cb0cecc2c32b7a3d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aac04f7022d37872c9aebe0e14a688fa4a27cda29eb193993e4d2b82234e0c9->leave($__internal_8aac04f7022d37872c9aebe0e14a688fa4a27cda29eb193993e4d2b82234e0c9_prof);

        
        $__internal_bf5212bf623c4e39b566a1b8f9cac262643731c80d0423cb0cecc2c32b7a3d96->leave($__internal_bf5212bf623c4e39b566a1b8f9cac262643731c80d0423cb0cecc2c32b7a3d96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d94cc7b42f5bfa70ceb2ce83a5d0a6c8b3978f392110be1fde8a85d507228716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94cc7b42f5bfa70ceb2ce83a5d0a6c8b3978f392110be1fde8a85d507228716->enter($__internal_d94cc7b42f5bfa70ceb2ce83a5d0a6c8b3978f392110be1fde8a85d507228716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a49b0d3a714485514bc8f2cb6f369a722cacf20f636495f07fad238a656fddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a49b0d3a714485514bc8f2cb6f369a722cacf20f636495f07fad238a656fddb->enter($__internal_4a49b0d3a714485514bc8f2cb6f369a722cacf20f636495f07fad238a656fddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shopconfigurations list</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Width</th>
                <th>Height</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shopConfigurations"] ?? $this->getContext($context, "shopConfigurations")));
        foreach ($context['_seq'] as $context["_key"] => $context["shopConfiguration"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "width", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "height", array()), "html", null, true);
            echo "</td>
                <td>                                                        <a class=\"btn btn-info\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                    show
                                </a>
                                                                                <a class=\"btn btn-warning\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_edit", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    edit
                                </a>
                        
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopConfiguration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-success\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_new");
        echo "\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                Ajouter shopConfiguration</a>
        </li>
    </ul>
";
        
        $__internal_4a49b0d3a714485514bc8f2cb6f369a722cacf20f636495f07fad238a656fddb->leave($__internal_4a49b0d3a714485514bc8f2cb6f369a722cacf20f636495f07fad238a656fddb_prof);

        
        $__internal_d94cc7b42f5bfa70ceb2ce83a5d0a6c8b3978f392110be1fde8a85d507228716->leave($__internal_d94cc7b42f5bfa70ceb2ce83a5d0a6c8b3978f392110be1fde8a85d507228716_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:ShopConfiguration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  111 => 36,  96 => 27,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Shopconfigurations list</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Width</th>
                <th>Height</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for shopConfiguration in shopConfigurations %}
            <tr>
                <td><a href=\"{{ path('carousel_shopconfiguration_show', { 'id': shopConfiguration.id }) }}\">{{ shopConfiguration.id }}</a></td>
                <td>{{ shopConfiguration.name }}</td>
                <td>{{ shopConfiguration.width }}</td>
                <td>{{ shopConfiguration.height }}</td>
                <td>                                                        <a class=\"btn btn-info\" href=\"{{ path('carousel_shopconfiguration_show', { 'id': shopConfiguration.id }) }}\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                    show
                                </a>
                                                                                <a class=\"btn btn-warning\" href=\"{{ path('carousel_shopconfiguration_edit', { 'id': shopConfiguration.id }) }}\">
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    edit
                                </a>
                        
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-success\" href=\"{{ path('carousel_shopconfiguration_new') }}\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                Ajouter shopConfiguration</a>
        </li>
    </ul>
{% endblock %}
", "ShopBundle:ShopConfiguration:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/ShopConfiguration/index.html.twig");
    }
}
