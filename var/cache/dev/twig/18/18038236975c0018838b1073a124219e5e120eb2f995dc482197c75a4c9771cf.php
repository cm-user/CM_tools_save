<?php

/* @Shop/ShopConfiguration/index.html.twig */
class __TwigTemplate_288f1177cb4ef5a0365becb0dd8ad6bb51c7c77173117f56ec3efa826bbbf7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/ShopConfiguration/index.html.twig", 1);
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
        $__internal_d6b1cc69ddf46c2cdbe0916a06ace14cc8ac186200688e1fd6a42a8852506f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b1cc69ddf46c2cdbe0916a06ace14cc8ac186200688e1fd6a42a8852506f38->enter($__internal_d6b1cc69ddf46c2cdbe0916a06ace14cc8ac186200688e1fd6a42a8852506f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/index.html.twig"));

        $__internal_9aa26fb8a18cdd31f36788c471d6eb46e5aec515b54872eb5ed762f0df272413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa26fb8a18cdd31f36788c471d6eb46e5aec515b54872eb5ed762f0df272413->enter($__internal_9aa26fb8a18cdd31f36788c471d6eb46e5aec515b54872eb5ed762f0df272413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b1cc69ddf46c2cdbe0916a06ace14cc8ac186200688e1fd6a42a8852506f38->leave($__internal_d6b1cc69ddf46c2cdbe0916a06ace14cc8ac186200688e1fd6a42a8852506f38_prof);

        
        $__internal_9aa26fb8a18cdd31f36788c471d6eb46e5aec515b54872eb5ed762f0df272413->leave($__internal_9aa26fb8a18cdd31f36788c471d6eb46e5aec515b54872eb5ed762f0df272413_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49d6ddaa1e63aef7b90a6c0be8b576893b3ca2b80ebdb9d2dfb226c786579ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d6ddaa1e63aef7b90a6c0be8b576893b3ca2b80ebdb9d2dfb226c786579ee2->enter($__internal_49d6ddaa1e63aef7b90a6c0be8b576893b3ca2b80ebdb9d2dfb226c786579ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ac017e8a7035f518301217f892a3cf96ea81b6cfa29f88d94909e8ceda43a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac017e8a7035f518301217f892a3cf96ea81b6cfa29f88d94909e8ceda43a3f->enter($__internal_8ac017e8a7035f518301217f892a3cf96ea81b6cfa29f88d94909e8ceda43a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ac017e8a7035f518301217f892a3cf96ea81b6cfa29f88d94909e8ceda43a3f->leave($__internal_8ac017e8a7035f518301217f892a3cf96ea81b6cfa29f88d94909e8ceda43a3f_prof);

        
        $__internal_49d6ddaa1e63aef7b90a6c0be8b576893b3ca2b80ebdb9d2dfb226c786579ee2->leave($__internal_49d6ddaa1e63aef7b90a6c0be8b576893b3ca2b80ebdb9d2dfb226c786579ee2_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/ShopConfiguration/index.html.twig";
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
", "@Shop/ShopConfiguration/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\ShopConfiguration\\index.html.twig");
    }
}
