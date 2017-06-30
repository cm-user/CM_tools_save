<?php

/* @Marketing/provider/index.html.twig */
class __TwigTemplate_ce658b8a7f982ee10c2a3c386ed6bb6b0247d5593d94ca892dfd3d107863ba16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/provider/index.html.twig", 1);
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
        $__internal_37067d2891f368b50b98adc9d9db4f0b46dba16a0bf19cd7dbf78a9a07023f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37067d2891f368b50b98adc9d9db4f0b46dba16a0bf19cd7dbf78a9a07023f70->enter($__internal_37067d2891f368b50b98adc9d9db4f0b46dba16a0bf19cd7dbf78a9a07023f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/index.html.twig"));

        $__internal_1cf73e1d6efa4145ebce6e4f260590ba182207cc6f48bbe42b9404e8551bf999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf73e1d6efa4145ebce6e4f260590ba182207cc6f48bbe42b9404e8551bf999->enter($__internal_1cf73e1d6efa4145ebce6e4f260590ba182207cc6f48bbe42b9404e8551bf999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37067d2891f368b50b98adc9d9db4f0b46dba16a0bf19cd7dbf78a9a07023f70->leave($__internal_37067d2891f368b50b98adc9d9db4f0b46dba16a0bf19cd7dbf78a9a07023f70_prof);

        
        $__internal_1cf73e1d6efa4145ebce6e4f260590ba182207cc6f48bbe42b9404e8551bf999->leave($__internal_1cf73e1d6efa4145ebce6e4f260590ba182207cc6f48bbe42b9404e8551bf999_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96edf56b54c6019359c2fba33e60a849a8faedf30efc4ec2ee94bb8c2376a42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96edf56b54c6019359c2fba33e60a849a8faedf30efc4ec2ee94bb8c2376a42e->enter($__internal_96edf56b54c6019359c2fba33e60a849a8faedf30efc4ec2ee94bb8c2376a42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e12fc852f810c7ce81b240116d2e0550191b3d0461e8dd0c4592458e1d03f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e12fc852f810c7ce81b240116d2e0550191b3d0461e8dd0c4592458e1d03f10->enter($__internal_7e12fc852f810c7ce81b240116d2e0550191b3d0461e8dd0c4592458e1d03f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Isdefault</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? $this->getContext($context, "providers")));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["provider"], "isDefault", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_edit", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_new");
        echo "\" class=\"btn btn-info\">Ajouter un fournisseur de mail</a>
";
        
        $__internal_7e12fc852f810c7ce81b240116d2e0550191b3d0461e8dd0c4592458e1d03f10->leave($__internal_7e12fc852f810c7ce81b240116d2e0550191b3d0461e8dd0c4592458e1d03f10_prof);

        
        $__internal_96edf56b54c6019359c2fba33e60a849a8faedf30efc4ec2ee94bb8c2376a42e->leave($__internal_96edf56b54c6019359c2fba33e60a849a8faedf30efc4ec2ee94bb8c2376a42e_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/provider/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  109 => 33,  97 => 27,  91 => 24,  84 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Provider list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Isdefault</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for provider in providers %}
            <tr>
                <td><a href=\"{{ path('provider_show', { 'id': provider.id }) }}\">{{ provider.name }}</a></td>
                <td>{% if provider.isDefault %}Yes{% else %}No{% endif %}</td>
                <td>{{ provider.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('provider_show', { 'id': provider.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('provider_edit', { 'id': provider.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('provider_new') }}\" class=\"btn btn-info\">Ajouter un fournisseur de mail</a>
{% endblock %}
", "@Marketing/provider/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\provider\\index.html.twig");
    }
}
