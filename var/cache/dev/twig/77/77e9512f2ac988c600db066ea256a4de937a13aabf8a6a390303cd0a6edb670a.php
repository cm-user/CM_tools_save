<?php

/* @Marketing/modelnewsletter/show.html.twig */
class __TwigTemplate_d0646c0dedbf97fdc8aafd70e17d03089bb2e07e7e403fc610483651a574eb34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/modelnewsletter/show.html.twig", 1);
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
        $__internal_b393e10e9070fca7c9de77d8f0a9d27633d9d010913b4a5e090fca4661338288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b393e10e9070fca7c9de77d8f0a9d27633d9d010913b4a5e090fca4661338288->enter($__internal_b393e10e9070fca7c9de77d8f0a9d27633d9d010913b4a5e090fca4661338288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/show.html.twig"));

        $__internal_f8dec19ffe8800ec2bf1fdd3c68625c722e8da544382a1487f06a82ef10edf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dec19ffe8800ec2bf1fdd3c68625c722e8da544382a1487f06a82ef10edf47->enter($__internal_f8dec19ffe8800ec2bf1fdd3c68625c722e8da544382a1487f06a82ef10edf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b393e10e9070fca7c9de77d8f0a9d27633d9d010913b4a5e090fca4661338288->leave($__internal_b393e10e9070fca7c9de77d8f0a9d27633d9d010913b4a5e090fca4661338288_prof);

        
        $__internal_f8dec19ffe8800ec2bf1fdd3c68625c722e8da544382a1487f06a82ef10edf47->leave($__internal_f8dec19ffe8800ec2bf1fdd3c68625c722e8da544382a1487f06a82ef10edf47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a89a294af7eef02879da1538ccc84c6301a677e693653658a42a5ddd3446d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a89a294af7eef02879da1538ccc84c6301a677e693653658a42a5ddd3446d9->enter($__internal_d3a89a294af7eef02879da1538ccc84c6301a677e693653658a42a5ddd3446d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0e23c095c0573cbbcef4bdac005a92d0dc433151653f1b65b854c4edc1156a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e23c095c0573cbbcef4bdac005a92d0dc433151653f1b65b854c4edc1156a6->enter($__internal_b0e23c095c0573cbbcef4bdac005a92d0dc433151653f1b65b854c4edc1156a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_edit", array("id" => $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b0e23c095c0573cbbcef4bdac005a92d0dc433151653f1b65b854c4edc1156a6->leave($__internal_b0e23c095c0573cbbcef4bdac005a92d0dc433151653f1b65b854c4edc1156a6_prof);

        
        $__internal_d3a89a294af7eef02879da1538ccc84c6301a677e693653658a42a5ddd3446d9->leave($__internal_d3a89a294af7eef02879da1538ccc84c6301a677e693653658a42a5ddd3446d9_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/modelnewsletter/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ModelNewsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ modelNewsletter.name }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ modelNewsletter.path }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ modelNewsletter.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('modelnewsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('modelnewsletter_edit', { 'id': modelNewsletter.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/modelnewsletter/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\modelnewsletter\\show.html.twig");
    }
}
