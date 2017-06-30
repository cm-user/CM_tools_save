<?php

/* @Marketing/newsletterblock/index.html.twig */
class __TwigTemplate_f6fc114f31ebd6bf9f3757587c4604e24143940f6b4170e0c3dcec37554b0503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblock/index.html.twig", 1);
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
        $__internal_995b5251c693923d7eb0693982856547e3df6131abb7d1e30f9bb495711b471b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995b5251c693923d7eb0693982856547e3df6131abb7d1e30f9bb495711b471b->enter($__internal_995b5251c693923d7eb0693982856547e3df6131abb7d1e30f9bb495711b471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/index.html.twig"));

        $__internal_ffcd2a73c11dd2b45251a1c736a0b56f566f00607663ddd3be4c6ad4a4bba91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcd2a73c11dd2b45251a1c736a0b56f566f00607663ddd3be4c6ad4a4bba91f->enter($__internal_ffcd2a73c11dd2b45251a1c736a0b56f566f00607663ddd3be4c6ad4a4bba91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995b5251c693923d7eb0693982856547e3df6131abb7d1e30f9bb495711b471b->leave($__internal_995b5251c693923d7eb0693982856547e3df6131abb7d1e30f9bb495711b471b_prof);

        
        $__internal_ffcd2a73c11dd2b45251a1c736a0b56f566f00607663ddd3be4c6ad4a4bba91f->leave($__internal_ffcd2a73c11dd2b45251a1c736a0b56f566f00607663ddd3be4c6ad4a4bba91f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d96414cbbbf8a20c94a3a492f53650c9921a3275b215bd28697094f5b43889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d96414cbbbf8a20c94a3a492f53650c9921a3275b215bd28697094f5b43889->enter($__internal_08d96414cbbbf8a20c94a3a492f53650c9921a3275b215bd28697094f5b43889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17ea60a4336177de6ed511a4e456ff839ad0b2cf7e43cab0413faabdf331fa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ea60a4336177de6ed511a4e456ff839ad0b2cf7e43cab0413faabdf331fa76->enter($__internal_17ea60a4336177de6ed511a4e456ff839ad0b2cf7e43cab0413faabdf331fa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Type</th>
                <th>Title</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterBlocks"] ?? $this->getContext($context, "newsletterBlocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterBlock"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_show", array("id" => $this->getAttribute($context["newsletterBlock"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlock"], "type", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlock"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterBlock"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_show", array("id" => $this->getAttribute($context["newsletterBlock"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_edit", array("id" => $this->getAttribute($context["newsletterBlock"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_new");
        echo "\" class=\"btn btn-info\">Ajouter un bloc de newsletter</a>
";
        
        $__internal_17ea60a4336177de6ed511a4e456ff839ad0b2cf7e43cab0413faabdf331fa76->leave($__internal_17ea60a4336177de6ed511a4e456ff839ad0b2cf7e43cab0413faabdf331fa76_prof);

        
        $__internal_08d96414cbbbf8a20c94a3a492f53650c9921a3275b215bd28697094f5b43889->leave($__internal_08d96414cbbbf8a20c94a3a492f53650c9921a3275b215bd28697094f5b43889_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblock/index.html.twig";
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
    <h1>NewsletterBlock list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Type</th>
                <th>Title</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterBlock in newsletterBlocks %}
            <tr>
                <td><a href=\"{{ path('newsletterblock_show', { 'id': newsletterBlock.id }) }}\">{{ newsletterBlock.type }}</a></td>
                <td>{{ newsletterBlock.title }}</td>
                <td>{{ newsletterBlock.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterblock_show', { 'id': newsletterBlock.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterblock_edit', { 'id': newsletterBlock.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newsletterblock_new') }}\" class=\"btn btn-info\">Ajouter un bloc de newsletter</a>
{% endblock %}
", "@Marketing/newsletterblock/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblock\\index.html.twig");
    }
}
