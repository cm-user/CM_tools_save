<?php

/* MarketingBundle:newsletterheader:index.html.twig */
class __TwigTemplate_829c9995644d01b31cd8d2679d52340d73775235efe22019fe97cbe0915d5bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterheader:index.html.twig", 1);
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
        $__internal_527f9a0ec3af6725d6d9c49fb45da44a71c7312a51676debae179107f03e3b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527f9a0ec3af6725d6d9c49fb45da44a71c7312a51676debae179107f03e3b7b->enter($__internal_527f9a0ec3af6725d6d9c49fb45da44a71c7312a51676debae179107f03e3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:index.html.twig"));

        $__internal_3162afa221006c99c178ed726ea0d60d84fbf3ab5dcdd17ea9a5d0021eda8769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3162afa221006c99c178ed726ea0d60d84fbf3ab5dcdd17ea9a5d0021eda8769->enter($__internal_3162afa221006c99c178ed726ea0d60d84fbf3ab5dcdd17ea9a5d0021eda8769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527f9a0ec3af6725d6d9c49fb45da44a71c7312a51676debae179107f03e3b7b->leave($__internal_527f9a0ec3af6725d6d9c49fb45da44a71c7312a51676debae179107f03e3b7b_prof);

        
        $__internal_3162afa221006c99c178ed726ea0d60d84fbf3ab5dcdd17ea9a5d0021eda8769->leave($__internal_3162afa221006c99c178ed726ea0d60d84fbf3ab5dcdd17ea9a5d0021eda8769_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf09f52a46f7125788404b58d44b1f225665c0519352a99b441efb313eb7987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf09f52a46f7125788404b58d44b1f225665c0519352a99b441efb313eb7987->enter($__internal_aaf09f52a46f7125788404b58d44b1f225665c0519352a99b441efb313eb7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e45a60720a511bbde0f892e66280a8b9f40e227f8f9aba46daa99f749889bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e45a60720a511bbde0f892e66280a8b9f40e227f8f9aba46daa99f749889bd1->enter($__internal_0e45a60720a511bbde0f892e66280a8b9f40e227f8f9aba46daa99f749889bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Texttop</th>
                <th>Textintro</th>
                <th>Textdescription</th>
                <th>Picture</th>
                <th>Link</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterHeaders"] ?? $this->getContext($context, "newsletterHeaders")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterHeader"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_show", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textTop", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textIntro", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "picture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_show", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_edit", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterHeader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_new");
        echo "\" class=\"btn btn-info\">Ajouter une en-tête</a>
";
        
        $__internal_0e45a60720a511bbde0f892e66280a8b9f40e227f8f9aba46daa99f749889bd1->leave($__internal_0e45a60720a511bbde0f892e66280a8b9f40e227f8f9aba46daa99f749889bd1_prof);

        
        $__internal_aaf09f52a46f7125788404b58d44b1f225665c0519352a99b441efb313eb7987->leave($__internal_aaf09f52a46f7125788404b58d44b1f225665c0519352a99b441efb313eb7987_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterheader:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterHeader list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Texttop</th>
                <th>Textintro</th>
                <th>Textdescription</th>
                <th>Picture</th>
                <th>Link</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterHeader in newsletterHeaders %}
            <tr>
                <td><a href=\"{{ path('newsletterheader_show', { 'id': newsletterHeader.id }) }}\">{{ newsletterHeader.textTop }}</a></td>
                <td>{{ newsletterHeader.textIntro }}</td>
                <td>{{ newsletterHeader.textDescription }}</td>
                <td>{{ newsletterHeader.picture }}</td>
                <td>{{ newsletterHeader.link }}</td>
                <td>{{ newsletterHeader.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterheader_show', { 'id': newsletterHeader.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterheader_edit', { 'id': newsletterHeader.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newsletterheader_new') }}\" class=\"btn btn-info\">Ajouter une en-tête</a>
{% endblock %}
", "MarketingBundle:newsletterheader:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterheader/index.html.twig");
    }
}
