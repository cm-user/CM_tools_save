<?php

/* @Shop/Showing/list.html.twig */
class __TwigTemplate_b7c05d83a84a801b7bf164d6aa3d3225846c4df0946feec03a16e8d4b564e379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/Showing/list.html.twig", 1);
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
        $__internal_5340081e7a1c6139e5320a5ef321d634f7207a433ae6c138f50b69da91bb97e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5340081e7a1c6139e5320a5ef321d634f7207a433ae6c138f50b69da91bb97e0->enter($__internal_5340081e7a1c6139e5320a5ef321d634f7207a433ae6c138f50b69da91bb97e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Showing/list.html.twig"));

        $__internal_7ff4b614425c8b9b9323232aa91af7c0101d84ad3f61f25776530a4068f7637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff4b614425c8b9b9323232aa91af7c0101d84ad3f61f25776530a4068f7637a->enter($__internal_7ff4b614425c8b9b9323232aa91af7c0101d84ad3f61f25776530a4068f7637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Showing/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5340081e7a1c6139e5320a5ef321d634f7207a433ae6c138f50b69da91bb97e0->leave($__internal_5340081e7a1c6139e5320a5ef321d634f7207a433ae6c138f50b69da91bb97e0_prof);

        
        $__internal_7ff4b614425c8b9b9323232aa91af7c0101d84ad3f61f25776530a4068f7637a->leave($__internal_7ff4b614425c8b9b9323232aa91af7c0101d84ad3f61f25776530a4068f7637a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3b1bdf193656782ca906a9e7da251c78efc61d11e7d13f46f9051273970fc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b1bdf193656782ca906a9e7da251c78efc61d11e7d13f46f9051273970fc75->enter($__internal_f3b1bdf193656782ca906a9e7da251c78efc61d11e7d13f46f9051273970fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f18a87b5365cde2a138dc7c3be6b411134ad40e7b8905bcb5276075268ed0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f18a87b5365cde2a138dc7c3be6b411134ad40e7b8905bcb5276075268ed0f1->enter($__internal_2f18a87b5365cde2a138dc7c3be6b411134ad40e7b8905bcb5276075268ed0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f18a87b5365cde2a138dc7c3be6b411134ad40e7b8905bcb5276075268ed0f1->leave($__internal_2f18a87b5365cde2a138dc7c3be6b411134ad40e7b8905bcb5276075268ed0f1_prof);

        
        $__internal_f3b1bdf193656782ca906a9e7da251c78efc61d11e7d13f46f9051273970fc75->leave($__internal_f3b1bdf193656782ca906a9e7da251c78efc61d11e7d13f46f9051273970fc75_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Showing/list.html.twig";
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

", "@Shop/Showing/list.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Showing\\list.html.twig");
    }
}
