<?php

/* MarketingBundle:newsletterblocktype:index.html.twig */
class __TwigTemplate_503cb03b923868a2908b0a9aedff9bb684b6b5d65aa52410eb9f86f53b85a2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblocktype:index.html.twig", 1);
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
        $__internal_bac3e06506d87cc3704a2b6def233240040b3fc6227d523f9fd59dead2f84f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac3e06506d87cc3704a2b6def233240040b3fc6227d523f9fd59dead2f84f2f->enter($__internal_bac3e06506d87cc3704a2b6def233240040b3fc6227d523f9fd59dead2f84f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:index.html.twig"));

        $__internal_356c96f4f8b93c0b0b7ea8983cd66e70f1a26e0e312196a3d8230e7051384d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356c96f4f8b93c0b0b7ea8983cd66e70f1a26e0e312196a3d8230e7051384d4b->enter($__internal_356c96f4f8b93c0b0b7ea8983cd66e70f1a26e0e312196a3d8230e7051384d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac3e06506d87cc3704a2b6def233240040b3fc6227d523f9fd59dead2f84f2f->leave($__internal_bac3e06506d87cc3704a2b6def233240040b3fc6227d523f9fd59dead2f84f2f_prof);

        
        $__internal_356c96f4f8b93c0b0b7ea8983cd66e70f1a26e0e312196a3d8230e7051384d4b->leave($__internal_356c96f4f8b93c0b0b7ea8983cd66e70f1a26e0e312196a3d8230e7051384d4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e871ee6d20f0d401d42bb5000a77eddc2e04265da8e9b5be6fb339d6d3e4d099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e871ee6d20f0d401d42bb5000a77eddc2e04265da8e9b5be6fb339d6d3e4d099->enter($__internal_e871ee6d20f0d401d42bb5000a77eddc2e04265da8e9b5be6fb339d6d3e4d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43a3598a5f3b116e55f59f6e3e5bc821cc9de2cc07f07d4b040109581662519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a3598a5f3b116e55f59f6e3e5bc821cc9de2cc07f07d4b040109581662519f->enter($__internal_43a3598a5f3b116e55f59f6e3e5bc821cc9de2cc07f07d4b040109581662519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_43a3598a5f3b116e55f59f6e3e5bc821cc9de2cc07f07d4b040109581662519f->leave($__internal_43a3598a5f3b116e55f59f6e3e5bc821cc9de2cc07f07d4b040109581662519f_prof);

        
        $__internal_e871ee6d20f0d401d42bb5000a77eddc2e04265da8e9b5be6fb339d6d3e4d099->leave($__internal_e871ee6d20f0d401d42bb5000a77eddc2e04265da8e9b5be6fb339d6d3e4d099_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblocktype:index.html.twig";
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
", "MarketingBundle:newsletterblocktype:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblocktype/index.html.twig");
    }
}
