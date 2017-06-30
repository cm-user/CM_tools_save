<?php

/* ShopBundle:Showing:list.html.twig */
class __TwigTemplate_6cad8d67ec4163c802582b38ebb49473458d1a5e77bb75189f2a618879c37182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:Showing:list.html.twig", 1);
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
        $__internal_a3d4cf82fd15fbf42467891f194f3991f7e35797581eb5afdd893e035fc79e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d4cf82fd15fbf42467891f194f3991f7e35797581eb5afdd893e035fc79e25->enter($__internal_a3d4cf82fd15fbf42467891f194f3991f7e35797581eb5afdd893e035fc79e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Showing:list.html.twig"));

        $__internal_df93143af63d95d28759baa3c67a1a33060ed6d44dce2e641e6e463cf86f1a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df93143af63d95d28759baa3c67a1a33060ed6d44dce2e641e6e463cf86f1a23->enter($__internal_df93143af63d95d28759baa3c67a1a33060ed6d44dce2e641e6e463cf86f1a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Showing:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d4cf82fd15fbf42467891f194f3991f7e35797581eb5afdd893e035fc79e25->leave($__internal_a3d4cf82fd15fbf42467891f194f3991f7e35797581eb5afdd893e035fc79e25_prof);

        
        $__internal_df93143af63d95d28759baa3c67a1a33060ed6d44dce2e641e6e463cf86f1a23->leave($__internal_df93143af63d95d28759baa3c67a1a33060ed6d44dce2e641e6e463cf86f1a23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a2d671fd41205d551bc3de1ebcf99a455768f28fcf8fe4b49aacc9248cea61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2d671fd41205d551bc3de1ebcf99a455768f28fcf8fe4b49aacc9248cea61a->enter($__internal_7a2d671fd41205d551bc3de1ebcf99a455768f28fcf8fe4b49aacc9248cea61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47dd63bb9a791fb73fc6f4c2d14b1360077d99c637fe9c60fa8e36aac0ea363f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47dd63bb9a791fb73fc6f4c2d14b1360077d99c637fe9c60fa8e36aac0ea363f->enter($__internal_47dd63bb9a791fb73fc6f4c2d14b1360077d99c637fe9c60fa8e36aac0ea363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des écrans</h1>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shopConfigurations"] ?? $this->getContext($context, "shopConfigurations")));
        foreach ($context['_seq'] as $context["_key"] => $context["shopConfiguration"]) {
            // line 7
            echo "        <a class=\"btn btn-lg btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("showing_index", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopConfiguration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        
        $__internal_47dd63bb9a791fb73fc6f4c2d14b1360077d99c637fe9c60fa8e36aac0ea363f->leave($__internal_47dd63bb9a791fb73fc6f4c2d14b1360077d99c637fe9c60fa8e36aac0ea363f_prof);

        
        $__internal_7a2d671fd41205d551bc3de1ebcf99a455768f28fcf8fe4b49aacc9248cea61a->leave($__internal_7a2d671fd41205d551bc3de1ebcf99a455768f28fcf8fe4b49aacc9248cea61a_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Showing:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des écrans</h1>

    {% for shopConfiguration in shopConfigurations %}
        <a class=\"btn btn-lg btn-default\" href=\"{{ url('showing_index', { 'id': shopConfiguration.id }) }}\">{{ shopConfiguration.name }}</a>
    {% endfor %}

{% endblock %}

", "ShopBundle:Showing:list.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/Showing/list.html.twig");
    }
}
