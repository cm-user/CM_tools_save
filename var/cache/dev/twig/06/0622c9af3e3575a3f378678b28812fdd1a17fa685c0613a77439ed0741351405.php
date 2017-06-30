<?php

/* MarketingBundle:newsletter:show.html.twig */
class __TwigTemplate_8bb28540dbe5095d6105cf40cc6ffae8c79009eab55bcf9274e66ae4b4007606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletter:show.html.twig", 1);
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
        $__internal_1a9c193671d1c5c7fd35d0347c827ea5fcca9c2146ba146c0a4e01402beec271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9c193671d1c5c7fd35d0347c827ea5fcca9c2146ba146c0a4e01402beec271->enter($__internal_1a9c193671d1c5c7fd35d0347c827ea5fcca9c2146ba146c0a4e01402beec271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:show.html.twig"));

        $__internal_a6cd7f61085ddba80c2d914dfeaf74a8518a1648b33e8df6334e5eb6f2889c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cd7f61085ddba80c2d914dfeaf74a8518a1648b33e8df6334e5eb6f2889c2f->enter($__internal_a6cd7f61085ddba80c2d914dfeaf74a8518a1648b33e8df6334e5eb6f2889c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletter:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9c193671d1c5c7fd35d0347c827ea5fcca9c2146ba146c0a4e01402beec271->leave($__internal_1a9c193671d1c5c7fd35d0347c827ea5fcca9c2146ba146c0a4e01402beec271_prof);

        
        $__internal_a6cd7f61085ddba80c2d914dfeaf74a8518a1648b33e8df6334e5eb6f2889c2f->leave($__internal_a6cd7f61085ddba80c2d914dfeaf74a8518a1648b33e8df6334e5eb6f2889c2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46d7a2f78a03ece880bb15a5e11fa9fd6b91d14233d7c85caa6cdc9cf3f63eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d7a2f78a03ece880bb15a5e11fa9fd6b91d14233d7c85caa6cdc9cf3f63eb9->enter($__internal_46d7a2f78a03ece880bb15a5e11fa9fd6b91d14233d7c85caa6cdc9cf3f63eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45ce2a228dad3ff054e09a2850f0ec37851e3a8cf41af2dde889dec3ffce2710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ce2a228dad3ff054e09a2850f0ec37851e3a8cf41af2dde889dec3ffce2710->enter($__internal_45ce2a228dad3ff054e09a2850f0ec37851e3a8cf41af2dde889dec3ffce2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45ce2a228dad3ff054e09a2850f0ec37851e3a8cf41af2dde889dec3ffce2710->leave($__internal_45ce2a228dad3ff054e09a2850f0ec37851e3a8cf41af2dde889dec3ffce2710_prof);

        
        $__internal_46d7a2f78a03ece880bb15a5e11fa9fd6b91d14233d7c85caa6cdc9cf3f63eb9->leave($__internal_46d7a2f78a03ece880bb15a5e11fa9fd6b91d14233d7c85caa6cdc9cf3f63eb9_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletter:show.html.twig";
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
", "MarketingBundle:newsletter:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletter/show.html.twig");
    }
}
