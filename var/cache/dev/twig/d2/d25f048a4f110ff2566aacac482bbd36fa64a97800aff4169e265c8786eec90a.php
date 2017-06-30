<?php

/* MarketingBundle:newsletterprovider:index.html.twig */
class __TwigTemplate_7e08b2c5a1df1f0bad21439a4dfa94ede51d02fd9bcc782ab13b7790d20ed35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterprovider:index.html.twig", 1);
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
        $__internal_d250a724225c8445169de24b645a574eea36d4b6259cd597eddcd665a1909876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d250a724225c8445169de24b645a574eea36d4b6259cd597eddcd665a1909876->enter($__internal_d250a724225c8445169de24b645a574eea36d4b6259cd597eddcd665a1909876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:index.html.twig"));

        $__internal_7db97d7099955d52aad4d8fdb21e171a0a3776c42b3dbcc84870cfabee7565c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db97d7099955d52aad4d8fdb21e171a0a3776c42b3dbcc84870cfabee7565c2->enter($__internal_7db97d7099955d52aad4d8fdb21e171a0a3776c42b3dbcc84870cfabee7565c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d250a724225c8445169de24b645a574eea36d4b6259cd597eddcd665a1909876->leave($__internal_d250a724225c8445169de24b645a574eea36d4b6259cd597eddcd665a1909876_prof);

        
        $__internal_7db97d7099955d52aad4d8fdb21e171a0a3776c42b3dbcc84870cfabee7565c2->leave($__internal_7db97d7099955d52aad4d8fdb21e171a0a3776c42b3dbcc84870cfabee7565c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d04e0dceffcfc37362fba1d286ee7904fc800a1d1578dc89b2e4d4847989f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d04e0dceffcfc37362fba1d286ee7904fc800a1d1578dc89b2e4d4847989f2->enter($__internal_25d04e0dceffcfc37362fba1d286ee7904fc800a1d1578dc89b2e4d4847989f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a764e1a85e8a9419c0672239a06a8ad2867e0ec8d8cb790d1f67c137cca31538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a764e1a85e8a9419c0672239a06a8ad2867e0ec8d8cb790d1f67c137cca31538->enter($__internal_a764e1a85e8a9419c0672239a06a8ad2867e0ec8d8cb790d1f67c137cca31538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a764e1a85e8a9419c0672239a06a8ad2867e0ec8d8cb790d1f67c137cca31538->leave($__internal_a764e1a85e8a9419c0672239a06a8ad2867e0ec8d8cb790d1f67c137cca31538_prof);

        
        $__internal_25d04e0dceffcfc37362fba1d286ee7904fc800a1d1578dc89b2e4d4847989f2->leave($__internal_25d04e0dceffcfc37362fba1d286ee7904fc800a1d1578dc89b2e4d4847989f2_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterprovider:index.html.twig";
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
", "MarketingBundle:newsletterprovider:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterprovider/index.html.twig");
    }
}
