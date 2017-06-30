<?php

/* @Marketing/newslettermenu/show.html.twig */
class __TwigTemplate_d1cd24a6789f4a652390daf15cad8525411f8c88f222ab8bd2f5521690040f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newslettermenu/show.html.twig", 1);
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
        $__internal_fd23f600b1a308fb2fe20194f26fe0865820fa879b74b5d9b9afafb5328e0529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd23f600b1a308fb2fe20194f26fe0865820fa879b74b5d9b9afafb5328e0529->enter($__internal_fd23f600b1a308fb2fe20194f26fe0865820fa879b74b5d9b9afafb5328e0529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/show.html.twig"));

        $__internal_b789181e9c016cfab3f308a37e60a9bc90afa6f9d1d28cd798ff345fa8f1b02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b789181e9c016cfab3f308a37e60a9bc90afa6f9d1d28cd798ff345fa8f1b02a->enter($__internal_b789181e9c016cfab3f308a37e60a9bc90afa6f9d1d28cd798ff345fa8f1b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd23f600b1a308fb2fe20194f26fe0865820fa879b74b5d9b9afafb5328e0529->leave($__internal_fd23f600b1a308fb2fe20194f26fe0865820fa879b74b5d9b9afafb5328e0529_prof);

        
        $__internal_b789181e9c016cfab3f308a37e60a9bc90afa6f9d1d28cd798ff345fa8f1b02a->leave($__internal_b789181e9c016cfab3f308a37e60a9bc90afa6f9d1d28cd798ff345fa8f1b02a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_496b0dda80c4cbf2f66df54d6df1e04b9c3a4b4df4f0540355fda24947ce024c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496b0dda80c4cbf2f66df54d6df1e04b9c3a4b4df4f0540355fda24947ce024c->enter($__internal_496b0dda80c4cbf2f66df54d6df1e04b9c3a4b4df4f0540355fda24947ce024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2db279478c25c71c3e57c4270e14973ad1bc09ab5630a14ab99d5eaaab052c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2db279478c25c71c3e57c4270e14973ad1bc09ab5630a14ab99d5eaaab052c7->enter($__internal_d2db279478c25c71c3e57c4270e14973ad1bc09ab5630a14ab99d5eaaab052c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_edit", array("id" => $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "id", array()))), "html", null, true);
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
        
        $__internal_d2db279478c25c71c3e57c4270e14973ad1bc09ab5630a14ab99d5eaaab052c7->leave($__internal_d2db279478c25c71c3e57c4270e14973ad1bc09ab5630a14ab99d5eaaab052c7_prof);

        
        $__internal_496b0dda80c4cbf2f66df54d6df1e04b9c3a4b4df4f0540355fda24947ce024c->leave($__internal_496b0dda80c4cbf2f66df54d6df1e04b9c3a4b4df4f0540355fda24947ce024c_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newslettermenu/show.html.twig";
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
    <h1>NewsletterMenu</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{ newsletterMenu.title }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ newsletterMenu.link }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{ newsletterMenu.position }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterMenu.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newslettermenu_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newslettermenu_edit', { 'id': newsletterMenu.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newslettermenu/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newslettermenu\\show.html.twig");
    }
}
