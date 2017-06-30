<?php

/* MarketingBundle:newsletterblocktype:show.html.twig */
class __TwigTemplate_0872abff29410ca28c6c4fa30955baa316c90a8e21502f199ecc1509738f0e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblocktype:show.html.twig", 1);
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
        $__internal_3252229793de2c539f47a0d3e0171db14722e3d8103b7a95c2982a1a797b542c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3252229793de2c539f47a0d3e0171db14722e3d8103b7a95c2982a1a797b542c->enter($__internal_3252229793de2c539f47a0d3e0171db14722e3d8103b7a95c2982a1a797b542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:show.html.twig"));

        $__internal_f0fe9bb21e2e6de2231e3b20019b4f5f4d46784b353a572df7b3da3d858c7fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe9bb21e2e6de2231e3b20019b4f5f4d46784b353a572df7b3da3d858c7fb1->enter($__internal_f0fe9bb21e2e6de2231e3b20019b4f5f4d46784b353a572df7b3da3d858c7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblocktype:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3252229793de2c539f47a0d3e0171db14722e3d8103b7a95c2982a1a797b542c->leave($__internal_3252229793de2c539f47a0d3e0171db14722e3d8103b7a95c2982a1a797b542c_prof);

        
        $__internal_f0fe9bb21e2e6de2231e3b20019b4f5f4d46784b353a572df7b3da3d858c7fb1->leave($__internal_f0fe9bb21e2e6de2231e3b20019b4f5f4d46784b353a572df7b3da3d858c7fb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b14b19ba3ccf31804d3c5735533ca42d0c0c51c5fbb9f8ef534ea10d90efe458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14b19ba3ccf31804d3c5735533ca42d0c0c51c5fbb9f8ef534ea10d90efe458->enter($__internal_b14b19ba3ccf31804d3c5735533ca42d0c0c51c5fbb9f8ef534ea10d90efe458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff5a44626d96121d033874e929f62acae368676e27b6268625a4d471b56de32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5a44626d96121d033874e929f62acae368676e27b6268625a4d471b56de32e->enter($__internal_ff5a44626d96121d033874e929f62acae368676e27b6268625a4d471b56de32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff5a44626d96121d033874e929f62acae368676e27b6268625a4d471b56de32e->leave($__internal_ff5a44626d96121d033874e929f62acae368676e27b6268625a4d471b56de32e_prof);

        
        $__internal_b14b19ba3ccf31804d3c5735533ca42d0c0c51c5fbb9f8ef534ea10d90efe458->leave($__internal_b14b19ba3ccf31804d3c5735533ca42d0c0c51c5fbb9f8ef534ea10d90efe458_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblocktype:show.html.twig";
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
", "MarketingBundle:newsletterblocktype:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblocktype/show.html.twig");
    }
}
