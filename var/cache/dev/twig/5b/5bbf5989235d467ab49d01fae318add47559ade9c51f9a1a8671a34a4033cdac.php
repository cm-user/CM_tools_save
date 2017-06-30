<?php

/* @Marketing/shopconfiguration/show.html.twig */
class __TwigTemplate_08a3d382fda0f8dd037ada9814974017fb0f710eda7fc33e9b76155e05389c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/shopconfiguration/show.html.twig", 1);
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
        $__internal_f92ce8c83a6e0e6d492521bc4cb23fa86e03c340832caac22b0f4d2f92be01b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92ce8c83a6e0e6d492521bc4cb23fa86e03c340832caac22b0f4d2f92be01b3->enter($__internal_f92ce8c83a6e0e6d492521bc4cb23fa86e03c340832caac22b0f4d2f92be01b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/show.html.twig"));

        $__internal_50b6eed8f96cdc58da7501735b232b1620afa3ce23a9ddbc20511dc2308503d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b6eed8f96cdc58da7501735b232b1620afa3ce23a9ddbc20511dc2308503d1->enter($__internal_50b6eed8f96cdc58da7501735b232b1620afa3ce23a9ddbc20511dc2308503d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/shopconfiguration/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f92ce8c83a6e0e6d492521bc4cb23fa86e03c340832caac22b0f4d2f92be01b3->leave($__internal_f92ce8c83a6e0e6d492521bc4cb23fa86e03c340832caac22b0f4d2f92be01b3_prof);

        
        $__internal_50b6eed8f96cdc58da7501735b232b1620afa3ce23a9ddbc20511dc2308503d1->leave($__internal_50b6eed8f96cdc58da7501735b232b1620afa3ce23a9ddbc20511dc2308503d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb654f9740c5a5fb8c79695f6b7590d0adf33846d100349a21fb5d19762b6ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb654f9740c5a5fb8c79695f6b7590d0adf33846d100349a21fb5d19762b6ccb->enter($__internal_bb654f9740c5a5fb8c79695f6b7590d0adf33846d100349a21fb5d19762b6ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ea9d87bafb359a2e6bd461d7dc1d060ac58887614ceefee7bb9272c92df7643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea9d87bafb359a2e6bd461d7dc1d060ac58887614ceefee7bb9272c92df7643->enter($__internal_7ea9d87bafb359a2e6bd461d7dc1d060ac58887614ceefee7bb9272c92df7643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_edit", array("id" => $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7ea9d87bafb359a2e6bd461d7dc1d060ac58887614ceefee7bb9272c92df7643->leave($__internal_7ea9d87bafb359a2e6bd461d7dc1d060ac58887614ceefee7bb9272c92df7643_prof);

        
        $__internal_bb654f9740c5a5fb8c79695f6b7590d0adf33846d100349a21fb5d19762b6ccb->leave($__internal_bb654f9740c5a5fb8c79695f6b7590d0adf33846d100349a21fb5d19762b6ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/shopconfiguration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ShopConfiguration</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ shopConfiguration.name }}</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>{{ shopConfiguration.value }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if shopConfiguration.createdAt %}{{ shopConfiguration.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if shopConfiguration.updatedAt %}{{ shopConfiguration.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ shopConfiguration.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('shopconfiguration_edit', { 'id': shopConfiguration.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/shopconfiguration/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\shopconfiguration\\show.html.twig");
    }
}
