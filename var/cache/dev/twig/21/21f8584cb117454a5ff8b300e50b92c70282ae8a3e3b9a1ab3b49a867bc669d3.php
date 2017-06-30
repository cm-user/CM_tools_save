<?php

/* MarketingBundle:newsletterblock:index.html.twig */
class __TwigTemplate_67231f3b8bf0aa41b885a1a006a7188c62c7f25661d5b4fba53cc561ed4fa4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblock:index.html.twig", 1);
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
        $__internal_81fe358d3b8eff5c028a7455606101350dc7a9381e7dc01c7de2b87466a5420c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fe358d3b8eff5c028a7455606101350dc7a9381e7dc01c7de2b87466a5420c->enter($__internal_81fe358d3b8eff5c028a7455606101350dc7a9381e7dc01c7de2b87466a5420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:index.html.twig"));

        $__internal_f1556e581bbf11728013894bed248fcb940227350ef6818224afb2be84a11e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1556e581bbf11728013894bed248fcb940227350ef6818224afb2be84a11e81->enter($__internal_f1556e581bbf11728013894bed248fcb940227350ef6818224afb2be84a11e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fe358d3b8eff5c028a7455606101350dc7a9381e7dc01c7de2b87466a5420c->leave($__internal_81fe358d3b8eff5c028a7455606101350dc7a9381e7dc01c7de2b87466a5420c_prof);

        
        $__internal_f1556e581bbf11728013894bed248fcb940227350ef6818224afb2be84a11e81->leave($__internal_f1556e581bbf11728013894bed248fcb940227350ef6818224afb2be84a11e81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d8c4ceb09f2dcda71e18f7c6a93b0462ac1c728b1c0fba68b8fe1afb3eb4b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8c4ceb09f2dcda71e18f7c6a93b0462ac1c728b1c0fba68b8fe1afb3eb4b94->enter($__internal_6d8c4ceb09f2dcda71e18f7c6a93b0462ac1c728b1c0fba68b8fe1afb3eb4b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80c899600573a814b55152add5495fed1c30bc23389148aeb3795c761b21e438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c899600573a814b55152add5495fed1c30bc23389148aeb3795c761b21e438->enter($__internal_80c899600573a814b55152add5495fed1c30bc23389148aeb3795c761b21e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80c899600573a814b55152add5495fed1c30bc23389148aeb3795c761b21e438->leave($__internal_80c899600573a814b55152add5495fed1c30bc23389148aeb3795c761b21e438_prof);

        
        $__internal_6d8c4ceb09f2dcda71e18f7c6a93b0462ac1c728b1c0fba68b8fe1afb3eb4b94->leave($__internal_6d8c4ceb09f2dcda71e18f7c6a93b0462ac1c728b1c0fba68b8fe1afb3eb4b94_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblock:index.html.twig";
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
", "MarketingBundle:newsletterblock:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblock/index.html.twig");
    }
}
