<?php

/* MarketingBundle:newsletterprovider:show.html.twig */
class __TwigTemplate_82b47449db9e71f159f2cb4a84f6507863d18f734da1775a8a1e908c92da328d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterprovider:show.html.twig", 1);
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
        $__internal_67f98636b1b6379dbcc9709a9d0bc3346bb61d7d3d5060ab49479c883e8a8945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f98636b1b6379dbcc9709a9d0bc3346bb61d7d3d5060ab49479c883e8a8945->enter($__internal_67f98636b1b6379dbcc9709a9d0bc3346bb61d7d3d5060ab49479c883e8a8945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:show.html.twig"));

        $__internal_724752bce23daa5038e2d043cb102b1df9bd0f275b0bf6fb79a42c57a147b653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724752bce23daa5038e2d043cb102b1df9bd0f275b0bf6fb79a42c57a147b653->enter($__internal_724752bce23daa5038e2d043cb102b1df9bd0f275b0bf6fb79a42c57a147b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterprovider:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f98636b1b6379dbcc9709a9d0bc3346bb61d7d3d5060ab49479c883e8a8945->leave($__internal_67f98636b1b6379dbcc9709a9d0bc3346bb61d7d3d5060ab49479c883e8a8945_prof);

        
        $__internal_724752bce23daa5038e2d043cb102b1df9bd0f275b0bf6fb79a42c57a147b653->leave($__internal_724752bce23daa5038e2d043cb102b1df9bd0f275b0bf6fb79a42c57a147b653_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb8c1a3ace6750d2c86c72c3d2ae15aee041d7c4a1d74058401f61e6ffe52ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb8c1a3ace6750d2c86c72c3d2ae15aee041d7c4a1d74058401f61e6ffe52ef->enter($__internal_4cb8c1a3ace6750d2c86c72c3d2ae15aee041d7c4a1d74058401f61e6ffe52ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f1c3944fe95aec2d3bd4f83f3041f33f177ff6e7077fd7813c747aa6a34070a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1c3944fe95aec2d3bd4f83f3041f33f177ff6e7077fd7813c747aa6a34070a->enter($__internal_9f1c3944fe95aec2d3bd4f83f3041f33f177ff6e7077fd7813c747aa6a34070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f1c3944fe95aec2d3bd4f83f3041f33f177ff6e7077fd7813c747aa6a34070a->leave($__internal_9f1c3944fe95aec2d3bd4f83f3041f33f177ff6e7077fd7813c747aa6a34070a_prof);

        
        $__internal_4cb8c1a3ace6750d2c86c72c3d2ae15aee041d7c4a1d74058401f61e6ffe52ef->leave($__internal_4cb8c1a3ace6750d2c86c72c3d2ae15aee041d7c4a1d74058401f61e6ffe52ef_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterprovider:show.html.twig";
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
", "MarketingBundle:newsletterprovider:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterprovider/show.html.twig");
    }
}
