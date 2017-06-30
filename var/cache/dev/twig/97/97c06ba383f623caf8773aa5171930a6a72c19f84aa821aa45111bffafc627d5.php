<?php

/* MarketingBundle:newsletterheader:show.html.twig */
class __TwigTemplate_ef2b1b695f46cc14093513daad54b3df96d3c670cdff4dd6141c29697a484f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterheader:show.html.twig", 1);
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
        $__internal_9fb036082aae2c9bf5ad6108276a5f84fa5f65b67c2ea6c215053ff4c3c7d1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb036082aae2c9bf5ad6108276a5f84fa5f65b67c2ea6c215053ff4c3c7d1f7->enter($__internal_9fb036082aae2c9bf5ad6108276a5f84fa5f65b67c2ea6c215053ff4c3c7d1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:show.html.twig"));

        $__internal_1ec43b6ee55918fb207b3b2b8083752b942ea617c4503a9878f9c97bd028f77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec43b6ee55918fb207b3b2b8083752b942ea617c4503a9878f9c97bd028f77f->enter($__internal_1ec43b6ee55918fb207b3b2b8083752b942ea617c4503a9878f9c97bd028f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb036082aae2c9bf5ad6108276a5f84fa5f65b67c2ea6c215053ff4c3c7d1f7->leave($__internal_9fb036082aae2c9bf5ad6108276a5f84fa5f65b67c2ea6c215053ff4c3c7d1f7_prof);

        
        $__internal_1ec43b6ee55918fb207b3b2b8083752b942ea617c4503a9878f9c97bd028f77f->leave($__internal_1ec43b6ee55918fb207b3b2b8083752b942ea617c4503a9878f9c97bd028f77f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd858606a2e7b28fd5a03c723db1998a6abfd4405544d81aafad443e7f703753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd858606a2e7b28fd5a03c723db1998a6abfd4405544d81aafad443e7f703753->enter($__internal_bd858606a2e7b28fd5a03c723db1998a6abfd4405544d81aafad443e7f703753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed9eaff4eafc0df6c8630642fafd536812a3eef97841bf92f8bb68d802286ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9eaff4eafc0df6c8630642fafd536812a3eef97841bf92f8bb68d802286ba6->enter($__internal_ed9eaff4eafc0df6c8630642fafd536812a3eef97841bf92f8bb68d802286ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader</h1>

    <table>
        <tbody>
            <tr>
                <th>Texttop</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textTop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textintro</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textIntro", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textdescription</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "picture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_edit", array("id" => $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ed9eaff4eafc0df6c8630642fafd536812a3eef97841bf92f8bb68d802286ba6->leave($__internal_ed9eaff4eafc0df6c8630642fafd536812a3eef97841bf92f8bb68d802286ba6_prof);

        
        $__internal_bd858606a2e7b28fd5a03c723db1998a6abfd4405544d81aafad443e7f703753->leave($__internal_bd858606a2e7b28fd5a03c723db1998a6abfd4405544d81aafad443e7f703753_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterheader:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterHeader</h1>

    <table>
        <tbody>
            <tr>
                <th>Texttop</th>
                <td>{{ newsletterHeader.textTop }}</td>
            </tr>
            <tr>
                <th>Textintro</th>
                <td>{{ newsletterHeader.textIntro }}</td>
            </tr>
            <tr>
                <th>Textdescription</th>
                <td>{{ newsletterHeader.textDescription }}</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>{{ newsletterHeader.picture }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ newsletterHeader.link }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterHeader.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterheader_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterheader_edit', { 'id': newsletterHeader.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterheader:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterheader/show.html.twig");
    }
}
