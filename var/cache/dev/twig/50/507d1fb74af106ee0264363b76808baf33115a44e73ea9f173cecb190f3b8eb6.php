<?php

/* @FaultyProduct/faultymail/new.html.twig */
class __TwigTemplate_17fa58cfcb7afdba07f5faa17e60dd1f2b6e56efc32fb0d9919700e0383502d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faultymail/new.html.twig", 1);
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
        $__internal_03cab3eb95218d2838e3caf0e18620da4f1e29d91c2e76a00b2a95c1afbd181a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cab3eb95218d2838e3caf0e18620da4f1e29d91c2e76a00b2a95c1afbd181a->enter($__internal_03cab3eb95218d2838e3caf0e18620da4f1e29d91c2e76a00b2a95c1afbd181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/new.html.twig"));

        $__internal_0a3e621068e4a778a5e5a9404300fb139210ff6b5d24684c39f7055f23027963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3e621068e4a778a5e5a9404300fb139210ff6b5d24684c39f7055f23027963->enter($__internal_0a3e621068e4a778a5e5a9404300fb139210ff6b5d24684c39f7055f23027963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03cab3eb95218d2838e3caf0e18620da4f1e29d91c2e76a00b2a95c1afbd181a->leave($__internal_03cab3eb95218d2838e3caf0e18620da4f1e29d91c2e76a00b2a95c1afbd181a_prof);

        
        $__internal_0a3e621068e4a778a5e5a9404300fb139210ff6b5d24684c39f7055f23027963->leave($__internal_0a3e621068e4a778a5e5a9404300fb139210ff6b5d24684c39f7055f23027963_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f7a07e2ba1fcdb6ae8da2b00017ae46f34ec77d1128dad0da81c4f76d7e0481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7a07e2ba1fcdb6ae8da2b00017ae46f34ec77d1128dad0da81c4f76d7e0481->enter($__internal_3f7a07e2ba1fcdb6ae8da2b00017ae46f34ec77d1128dad0da81c4f76d7e0481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ef5b85b8e88b517ae1395aff14577139f976a3851f89ba0185d5530e8415f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef5b85b8e88b517ae1395aff14577139f976a3851f89ba0185d5530e8415f2c->enter($__internal_1ef5b85b8e88b517ae1395aff14577139f976a3851f89ba0185d5530e8415f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter un mail</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_index");
        echo "\">
            Retour à la liste
        </a>
    </p>

";
        
        $__internal_1ef5b85b8e88b517ae1395aff14577139f976a3851f89ba0185d5530e8415f2c->leave($__internal_1ef5b85b8e88b517ae1395aff14577139f976a3851f89ba0185d5530e8415f2c_prof);

        
        $__internal_3f7a07e2ba1fcdb6ae8da2b00017ae46f34ec77d1128dad0da81c4f76d7e0481->leave($__internal_3f7a07e2ba1fcdb6ae8da2b00017ae46f34ec77d1128dad0da81c4f76d7e0481_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faultymail/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ajouter un mail</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
    <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    {{ form_end(form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('faultymail_index') }}\">
            Retour à la liste
        </a>
    </p>

{% endblock %}
", "@FaultyProduct/faultymail/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faultymail\\new.html.twig");
    }
}
