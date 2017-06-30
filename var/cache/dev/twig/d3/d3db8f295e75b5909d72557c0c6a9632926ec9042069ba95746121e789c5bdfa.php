<?php

/* @FaultyProduct/faultymail/edit.html.twig */
class __TwigTemplate_e35b59cfefd2144b31c1888735b4efced9d38aa75bc114e26d4dc4067a843627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faultymail/edit.html.twig", 1);
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
        $__internal_69cc4dfbb88671d3fb48e49f63487e726b14fc96bc707f2e5b857660a3c095f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cc4dfbb88671d3fb48e49f63487e726b14fc96bc707f2e5b857660a3c095f0->enter($__internal_69cc4dfbb88671d3fb48e49f63487e726b14fc96bc707f2e5b857660a3c095f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/edit.html.twig"));

        $__internal_013e61810959e716abc1a986cde1441ca68e84f9b7c00d296cca3275cf05737d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013e61810959e716abc1a986cde1441ca68e84f9b7c00d296cca3275cf05737d->enter($__internal_013e61810959e716abc1a986cde1441ca68e84f9b7c00d296cca3275cf05737d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cc4dfbb88671d3fb48e49f63487e726b14fc96bc707f2e5b857660a3c095f0->leave($__internal_69cc4dfbb88671d3fb48e49f63487e726b14fc96bc707f2e5b857660a3c095f0_prof);

        
        $__internal_013e61810959e716abc1a986cde1441ca68e84f9b7c00d296cca3275cf05737d->leave($__internal_013e61810959e716abc1a986cde1441ca68e84f9b7c00d296cca3275cf05737d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08df69f61f6ef5b1f1fd147624afcbb06dc670c1d9dc06ba2dfe03a18d1870c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08df69f61f6ef5b1f1fd147624afcbb06dc670c1d9dc06ba2dfe03a18d1870c0->enter($__internal_08df69f61f6ef5b1f1fd147624afcbb06dc670c1d9dc06ba2dfe03a18d1870c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db107ed71d09a8acf330feb3d276b0fad06e0232409e567413fd94ebe60ef2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db107ed71d09a8acf330feb3d276b0fad06e0232409e567413fd94ebe60ef2b4->enter($__internal_db107ed71d09a8acf330feb3d276b0fad06e0232409e567413fd94ebe60ef2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modification mail</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>

";
        
        $__internal_db107ed71d09a8acf330feb3d276b0fad06e0232409e567413fd94ebe60ef2b4->leave($__internal_db107ed71d09a8acf330feb3d276b0fad06e0232409e567413fd94ebe60ef2b4_prof);

        
        $__internal_08df69f61f6ef5b1f1fd147624afcbb06dc670c1d9dc06ba2dfe03a18d1870c0->leave($__internal_08df69f61f6ef5b1f1fd147624afcbb06dc670c1d9dc06ba2dfe03a18d1870c0_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faultymail/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  74 => 15,  68 => 12,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Modification mail</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('faultymail_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>

{% endblock %}
", "@FaultyProduct/faultymail/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faultymail\\edit.html.twig");
    }
}
