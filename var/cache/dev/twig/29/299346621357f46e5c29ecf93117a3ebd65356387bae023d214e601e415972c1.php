<?php

/* @Marketing/newsletterblocktype/show.html.twig */
class __TwigTemplate_7b3f816b9185811d9de26c6773428eaeada44311fb8a0bf23d6c63f4b5124410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblocktype/show.html.twig", 1);
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
        $__internal_059c6750048d71efd1b2e4c31ae8dcd37a3fd861ff7de22c533b692d12bccbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059c6750048d71efd1b2e4c31ae8dcd37a3fd861ff7de22c533b692d12bccbbc->enter($__internal_059c6750048d71efd1b2e4c31ae8dcd37a3fd861ff7de22c533b692d12bccbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/show.html.twig"));

        $__internal_acade88bbdbf6963df952f76325446fe522a3c18f35a1a0ca4b45940cb19bd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acade88bbdbf6963df952f76325446fe522a3c18f35a1a0ca4b45940cb19bd8f->enter($__internal_acade88bbdbf6963df952f76325446fe522a3c18f35a1a0ca4b45940cb19bd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059c6750048d71efd1b2e4c31ae8dcd37a3fd861ff7de22c533b692d12bccbbc->leave($__internal_059c6750048d71efd1b2e4c31ae8dcd37a3fd861ff7de22c533b692d12bccbbc_prof);

        
        $__internal_acade88bbdbf6963df952f76325446fe522a3c18f35a1a0ca4b45940cb19bd8f->leave($__internal_acade88bbdbf6963df952f76325446fe522a3c18f35a1a0ca4b45940cb19bd8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae9d70f5705abf1f58a93c2386cb3fada2826bfdcb71be582719fbdf0995032d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9d70f5705abf1f58a93c2386cb3fada2826bfdcb71be582719fbdf0995032d->enter($__internal_ae9d70f5705abf1f58a93c2386cb3fada2826bfdcb71be582719fbdf0995032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc4610eeb091bc06e94b8a3aebce9b89caada21de60395f9fde575e2d6fa74c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4610eeb091bc06e94b8a3aebce9b89caada21de60395f9fde575e2d6fa74c1->enter($__internal_bc4610eeb091bc06e94b8a3aebce9b89caada21de60395f9fde575e2d6fa74c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlockType</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlockType"] ?? $this->getContext($context, "newsletterBlockType")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlockType"] ?? $this->getContext($context, "newsletterBlockType")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlockType"] ?? $this->getContext($context, "newsletterBlockType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_edit", array("id" => $this->getAttribute(($context["newsletterBlockType"] ?? $this->getContext($context, "newsletterBlockType")), "id", array()))), "html", null, true);
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
        
        $__internal_bc4610eeb091bc06e94b8a3aebce9b89caada21de60395f9fde575e2d6fa74c1->leave($__internal_bc4610eeb091bc06e94b8a3aebce9b89caada21de60395f9fde575e2d6fa74c1_prof);

        
        $__internal_ae9d70f5705abf1f58a93c2386cb3fada2826bfdcb71be582719fbdf0995032d->leave($__internal_ae9d70f5705abf1f58a93c2386cb3fada2826bfdcb71be582719fbdf0995032d_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblocktype/show.html.twig";
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
    <h1>NewsletterBlockType</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ newsletterBlockType.name }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ newsletterBlockType.path }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterBlockType.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterblocktype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterblocktype_edit', { 'id': newsletterBlockType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterblocktype/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblocktype\\show.html.twig");
    }
}
