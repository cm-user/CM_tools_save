<?php

/* @Marketing/newsletterprovider/index.html.twig */
class __TwigTemplate_bc0e19e9492711b7747943667dc0e2090a403eb7a1ae1bd2d37357151192adb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterprovider/index.html.twig", 1);
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
        $__internal_054ff46114e21c69013f77172f08a8caba0b1ab9bbe869700c7ac735e91e0d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054ff46114e21c69013f77172f08a8caba0b1ab9bbe869700c7ac735e91e0d64->enter($__internal_054ff46114e21c69013f77172f08a8caba0b1ab9bbe869700c7ac735e91e0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/index.html.twig"));

        $__internal_4407d68d42645afa88b198bfb3f009853c0d1e2ea806d9ae3fd2d743aecddb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4407d68d42645afa88b198bfb3f009853c0d1e2ea806d9ae3fd2d743aecddb0b->enter($__internal_4407d68d42645afa88b198bfb3f009853c0d1e2ea806d9ae3fd2d743aecddb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054ff46114e21c69013f77172f08a8caba0b1ab9bbe869700c7ac735e91e0d64->leave($__internal_054ff46114e21c69013f77172f08a8caba0b1ab9bbe869700c7ac735e91e0d64_prof);

        
        $__internal_4407d68d42645afa88b198bfb3f009853c0d1e2ea806d9ae3fd2d743aecddb0b->leave($__internal_4407d68d42645afa88b198bfb3f009853c0d1e2ea806d9ae3fd2d743aecddb0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14f292fe0f5ac43874c9f36a4c4d95f55405d9f6a93a90b94f29252f2782039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14f292fe0f5ac43874c9f36a4c4d95f55405d9f6a93a90b94f29252f2782039->enter($__internal_c14f292fe0f5ac43874c9f36a4c4d95f55405d9f6a93a90b94f29252f2782039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b14e815eab0b64ff96a27d0c269c225155f87a1ad50ecafdf78dbd15af52b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b14e815eab0b64ff96a27d0c269c225155f87a1ad50ecafdf78dbd15af52b6c->enter($__internal_9b14e815eab0b64ff96a27d0c269c225155f87a1ad50ecafdf78dbd15af52b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterProviders"] ?? $this->getContext($context, "newsletterProviders")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterProvider"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_show", array("id" => $this->getAttribute($context["newsletterProvider"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProvider"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProvider"], "value", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProvider"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_show", array("id" => $this->getAttribute($context["newsletterProvider"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_edit", array("id" => $this->getAttribute($context["newsletterProvider"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterProvider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_new");
        echo "\" class=\"btn btn-info\">Ajouter un fournisseur de newsletter</a>
";
        
        $__internal_9b14e815eab0b64ff96a27d0c269c225155f87a1ad50ecafdf78dbd15af52b6c->leave($__internal_9b14e815eab0b64ff96a27d0c269c225155f87a1ad50ecafdf78dbd15af52b6c_prof);

        
        $__internal_c14f292fe0f5ac43874c9f36a4c4d95f55405d9f6a93a90b94f29252f2782039->leave($__internal_c14f292fe0f5ac43874c9f36a4c4d95f55405d9f6a93a90b94f29252f2782039_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterprovider/index.html.twig";
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
    <h1>NewsletterProvider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterProvider in newsletterProviders %}
            <tr>
                <td><a href=\"{{ path('newsletterprovider_show', { 'id': newsletterProvider.id }) }}\">{{ newsletterProvider.name }}</a></td>
                <td>{{ newsletterProvider.value }}</td>
                <td>{{ newsletterProvider.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterprovider_show', { 'id': newsletterProvider.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterprovider_edit', { 'id': newsletterProvider.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newsletterprovider_new') }}\" class=\"btn btn-info\">Ajouter un fournisseur de newsletter</a>
{% endblock %}
", "@Marketing/newsletterprovider/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterprovider\\index.html.twig");
    }
}
