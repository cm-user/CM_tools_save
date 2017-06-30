<?php

/* @Marketing/newsletter/show.html.twig */
class __TwigTemplate_eb6046651a890d0adb6262292b4333ef54be5eac3c2bdb8369df1e3966fb1c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletter/show.html.twig", 1);
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
        $__internal_057109359a995aa90882e1293f68f8294272454321126dd9681daed64ec65e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057109359a995aa90882e1293f68f8294272454321126dd9681daed64ec65e45->enter($__internal_057109359a995aa90882e1293f68f8294272454321126dd9681daed64ec65e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/show.html.twig"));

        $__internal_06ceb0b8a3f2e3dacd3d7e72c6801f8769307f5ffb88ceb9a5a255a518767c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ceb0b8a3f2e3dacd3d7e72c6801f8769307f5ffb88ceb9a5a255a518767c2a->enter($__internal_06ceb0b8a3f2e3dacd3d7e72c6801f8769307f5ffb88ceb9a5a255a518767c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057109359a995aa90882e1293f68f8294272454321126dd9681daed64ec65e45->leave($__internal_057109359a995aa90882e1293f68f8294272454321126dd9681daed64ec65e45_prof);

        
        $__internal_06ceb0b8a3f2e3dacd3d7e72c6801f8769307f5ffb88ceb9a5a255a518767c2a->leave($__internal_06ceb0b8a3f2e3dacd3d7e72c6801f8769307f5ffb88ceb9a5a255a518767c2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb7e291bc9a83c75c11323875867573c5589152f06b210d0520c474584ab858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb7e291bc9a83c75c11323875867573c5589152f06b210d0520c474584ab858->enter($__internal_edb7e291bc9a83c75c11323875867573c5589152f06b210d0520c474584ab858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a71b28696e83e6b9c4fe6a0e7036306a94339a3352dcefdf44d65f2fb7b4b3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71b28696e83e6b9c4fe6a0e7036306a94339a3352dcefdf44d65f2fb7b4b3e6->enter($__internal_a71b28696e83e6b9c4fe6a0e7036306a94339a3352dcefdf44d65f2fb7b4b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletter"] ?? $this->getContext($context, "newsletter")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletter"] ?? $this->getContext($context, "newsletter")), "createdAt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletter"] ?? $this->getContext($context, "newsletter")), "updatedAt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletter"] ?? $this->getContext($context, "newsletter")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_edit", array("id" => $this->getAttribute(($context["newsletter"] ?? $this->getContext($context, "newsletter")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a71b28696e83e6b9c4fe6a0e7036306a94339a3352dcefdf44d65f2fb7b4b3e6->leave($__internal_a71b28696e83e6b9c4fe6a0e7036306a94339a3352dcefdf44d65f2fb7b4b3e6_prof);

        
        $__internal_edb7e291bc9a83c75c11323875867573c5589152f06b210d0520c474584ab858->leave($__internal_edb7e291bc9a83c75c11323875867573c5589152f06b210d0520c474584ab858_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletter/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Newsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{ newsletter.title }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{{ newsletter.createdAt }}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{{ newsletter.updatedAt }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletter.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletter_edit', { 'id': newsletter.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletter/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletter\\show.html.twig");
    }
}
