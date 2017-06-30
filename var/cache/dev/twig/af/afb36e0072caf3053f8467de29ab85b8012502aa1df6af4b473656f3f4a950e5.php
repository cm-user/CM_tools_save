<?php

/* @Marketing/newsletterblock/show.html.twig */
class __TwigTemplate_fe0bfb7b2e7913c869f16c1c290ffa92db18fa1db432fe46f91090ddd0f846d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblock/show.html.twig", 1);
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
        $__internal_3e3aae816b27d7481c91ec6ed0d11ef5ff88727b81354e97dd4f89da6236ad24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3aae816b27d7481c91ec6ed0d11ef5ff88727b81354e97dd4f89da6236ad24->enter($__internal_3e3aae816b27d7481c91ec6ed0d11ef5ff88727b81354e97dd4f89da6236ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/show.html.twig"));

        $__internal_69546ca5c23e6344081514d5fb0a87264fbb783a48e71467c1487d4936a7f10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69546ca5c23e6344081514d5fb0a87264fbb783a48e71467c1487d4936a7f10e->enter($__internal_69546ca5c23e6344081514d5fb0a87264fbb783a48e71467c1487d4936a7f10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3aae816b27d7481c91ec6ed0d11ef5ff88727b81354e97dd4f89da6236ad24->leave($__internal_3e3aae816b27d7481c91ec6ed0d11ef5ff88727b81354e97dd4f89da6236ad24_prof);

        
        $__internal_69546ca5c23e6344081514d5fb0a87264fbb783a48e71467c1487d4936a7f10e->leave($__internal_69546ca5c23e6344081514d5fb0a87264fbb783a48e71467c1487d4936a7f10e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf18330301e89b78c91bb07ec9d648c18b48a7901a4a13023ee74456abf1722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf18330301e89b78c91bb07ec9d648c18b48a7901a4a13023ee74456abf1722->enter($__internal_1bf18330301e89b78c91bb07ec9d648c18b48a7901a4a13023ee74456abf1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0248d60761896c89b653a8616c6e774f779e7fba184a60a3aeb81e14b19b7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0248d60761896c89b653a8616c6e774f779e7fba184a60a3aeb81e14b19b7df->enter($__internal_b0248d60761896c89b653a8616c6e774f779e7fba184a60a3aeb81e14b19b7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_edit", array("id" => $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "id", array()))), "html", null, true);
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
        
        $__internal_b0248d60761896c89b653a8616c6e774f779e7fba184a60a3aeb81e14b19b7df->leave($__internal_b0248d60761896c89b653a8616c6e774f779e7fba184a60a3aeb81e14b19b7df_prof);

        
        $__internal_1bf18330301e89b78c91bb07ec9d648c18b48a7901a4a13023ee74456abf1722->leave($__internal_1bf18330301e89b78c91bb07ec9d648c18b48a7901a4a13023ee74456abf1722_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblock/show.html.twig";
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
    <h1>NewsletterBlock</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>{{ newsletterBlock.type }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ newsletterBlock.title }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterBlock.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterblock_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterblock_edit', { 'id': newsletterBlock.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterblock/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblock\\show.html.twig");
    }
}
