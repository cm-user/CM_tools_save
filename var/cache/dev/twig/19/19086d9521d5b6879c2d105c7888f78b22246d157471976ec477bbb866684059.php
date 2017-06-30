<?php

/* MarketingBundle:newsletterproduct:new.html.twig */
class __TwigTemplate_06545d338846b2fb83bd9d08bcd1a143a2a079135ef3acc1468038baf3c2a0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterproduct:new.html.twig", 1);
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
        $__internal_43fb2bdd0243b466612ee896c730841efd9cf3eeb2051ecde85df7a3d4e64210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fb2bdd0243b466612ee896c730841efd9cf3eeb2051ecde85df7a3d4e64210->enter($__internal_43fb2bdd0243b466612ee896c730841efd9cf3eeb2051ecde85df7a3d4e64210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:new.html.twig"));

        $__internal_be760241caa3cd45e8deee2a814644a69afdb31578fc602c68b57c15ebec7662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be760241caa3cd45e8deee2a814644a69afdb31578fc602c68b57c15ebec7662->enter($__internal_be760241caa3cd45e8deee2a814644a69afdb31578fc602c68b57c15ebec7662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fb2bdd0243b466612ee896c730841efd9cf3eeb2051ecde85df7a3d4e64210->leave($__internal_43fb2bdd0243b466612ee896c730841efd9cf3eeb2051ecde85df7a3d4e64210_prof);

        
        $__internal_be760241caa3cd45e8deee2a814644a69afdb31578fc602c68b57c15ebec7662->leave($__internal_be760241caa3cd45e8deee2a814644a69afdb31578fc602c68b57c15ebec7662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f43a144711e757319649abdbbe5246e059102a3a89fafd88f9a4d89aebd2aa99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43a144711e757319649abdbbe5246e059102a3a89fafd88f9a4d89aebd2aa99->enter($__internal_f43a144711e757319649abdbbe5246e059102a3a89fafd88f9a4d89aebd2aa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91d45e54d0144f10754677daa384fc8d0adf07f8926792c0ed0a1a572ac55107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d45e54d0144f10754677daa384fc8d0adf07f8926792c0ed0a1a572ac55107->enter($__internal_91d45e54d0144f10754677daa384fc8d0adf07f8926792c0ed0a1a572ac55107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProduct creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_91d45e54d0144f10754677daa384fc8d0adf07f8926792c0ed0a1a572ac55107->leave($__internal_91d45e54d0144f10754677daa384fc8d0adf07f8926792c0ed0a1a572ac55107_prof);

        
        $__internal_f43a144711e757319649abdbbe5246e059102a3a89fafd88f9a4d89aebd2aa99->leave($__internal_f43a144711e757319649abdbbe5246e059102a3a89fafd88f9a4d89aebd2aa99_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterproduct:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterProduct creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterproduct_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterproduct:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterproduct/new.html.twig");
    }
}
