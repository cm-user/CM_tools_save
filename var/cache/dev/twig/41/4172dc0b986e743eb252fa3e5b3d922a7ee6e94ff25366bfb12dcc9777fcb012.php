<?php

/* @Marketing/newsletterprovider/show.html.twig */
class __TwigTemplate_a159843c34c25713de6597d0cdf061a18406294e16aca50ba47c62e759f97502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterprovider/show.html.twig", 1);
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
        $__internal_6195e2a759e094d14e8a6169c4dec07e7471efd152d5febda623deda7a754e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6195e2a759e094d14e8a6169c4dec07e7471efd152d5febda623deda7a754e0c->enter($__internal_6195e2a759e094d14e8a6169c4dec07e7471efd152d5febda623deda7a754e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/show.html.twig"));

        $__internal_f93b60392bc2e0b33d06fd4590bbbeb5385fe08d4297455177c58e3e872b6109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93b60392bc2e0b33d06fd4590bbbeb5385fe08d4297455177c58e3e872b6109->enter($__internal_f93b60392bc2e0b33d06fd4590bbbeb5385fe08d4297455177c58e3e872b6109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6195e2a759e094d14e8a6169c4dec07e7471efd152d5febda623deda7a754e0c->leave($__internal_6195e2a759e094d14e8a6169c4dec07e7471efd152d5febda623deda7a754e0c_prof);

        
        $__internal_f93b60392bc2e0b33d06fd4590bbbeb5385fe08d4297455177c58e3e872b6109->leave($__internal_f93b60392bc2e0b33d06fd4590bbbeb5385fe08d4297455177c58e3e872b6109_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dd70e4524494018b74e4c82d4c4d6d114e01eaa2decc6deb3546fa5a9cbc379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd70e4524494018b74e4c82d4c4d6d114e01eaa2decc6deb3546fa5a9cbc379->enter($__internal_1dd70e4524494018b74e4c82d4c4d6d114e01eaa2decc6deb3546fa5a9cbc379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c9cf2d096dff71bd1e2200a04e72086bd652042b14a0878faaeec66a146a236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9cf2d096dff71bd1e2200a04e72086bd652042b14a0878faaeec66a146a236->enter($__internal_1c9cf2d096dff71bd1e2200a04e72086bd652042b14a0878faaeec66a146a236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProvider"] ?? $this->getContext($context, "newsletterProvider")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProvider"] ?? $this->getContext($context, "newsletterProvider")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterProvider"] ?? $this->getContext($context, "newsletterProvider")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_edit", array("id" => $this->getAttribute(($context["newsletterProvider"] ?? $this->getContext($context, "newsletterProvider")), "id", array()))), "html", null, true);
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
        
        $__internal_1c9cf2d096dff71bd1e2200a04e72086bd652042b14a0878faaeec66a146a236->leave($__internal_1c9cf2d096dff71bd1e2200a04e72086bd652042b14a0878faaeec66a146a236_prof);

        
        $__internal_1dd70e4524494018b74e4c82d4c4d6d114e01eaa2decc6deb3546fa5a9cbc379->leave($__internal_1dd70e4524494018b74e4c82d4c4d6d114e01eaa2decc6deb3546fa5a9cbc379_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterprovider/show.html.twig";
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
    <h1>NewsletterProvider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ newsletterProvider.name }}</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>{{ newsletterProvider.value }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterProvider.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterprovider_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterprovider_edit', { 'id': newsletterProvider.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterprovider/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterprovider\\show.html.twig");
    }
}
