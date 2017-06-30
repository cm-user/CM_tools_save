<?php

/* FaultyProductBundle:faultymail:new.html.twig */
class __TwigTemplate_a5204b97285d77a0111bbb703f20aec9f9c827a81cd76f378f8f9893f1924737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faultymail:new.html.twig", 1);
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
        $__internal_b8f6e2672d2662eeb76e488d2af1d58093c60a4eef6c8ef4b0269e2e504ae374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f6e2672d2662eeb76e488d2af1d58093c60a4eef6c8ef4b0269e2e504ae374->enter($__internal_b8f6e2672d2662eeb76e488d2af1d58093c60a4eef6c8ef4b0269e2e504ae374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:new.html.twig"));

        $__internal_31b82b2fe55cd39184ff0a9964c1f77954dc84cf766edfcb100202aa9470fc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b82b2fe55cd39184ff0a9964c1f77954dc84cf766edfcb100202aa9470fc74->enter($__internal_31b82b2fe55cd39184ff0a9964c1f77954dc84cf766edfcb100202aa9470fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f6e2672d2662eeb76e488d2af1d58093c60a4eef6c8ef4b0269e2e504ae374->leave($__internal_b8f6e2672d2662eeb76e488d2af1d58093c60a4eef6c8ef4b0269e2e504ae374_prof);

        
        $__internal_31b82b2fe55cd39184ff0a9964c1f77954dc84cf766edfcb100202aa9470fc74->leave($__internal_31b82b2fe55cd39184ff0a9964c1f77954dc84cf766edfcb100202aa9470fc74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9829e67ecc64affdf4c1b41acbb8102fdc5260a5d657efdb2c346486f712753d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9829e67ecc64affdf4c1b41acbb8102fdc5260a5d657efdb2c346486f712753d->enter($__internal_9829e67ecc64affdf4c1b41acbb8102fdc5260a5d657efdb2c346486f712753d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3c37bff9bc8740d7174da3d92711fb32be6e86e4ec43c76a42796babf023e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c37bff9bc8740d7174da3d92711fb32be6e86e4ec43c76a42796babf023e85->enter($__internal_a3c37bff9bc8740d7174da3d92711fb32be6e86e4ec43c76a42796babf023e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3c37bff9bc8740d7174da3d92711fb32be6e86e4ec43c76a42796babf023e85->leave($__internal_a3c37bff9bc8740d7174da3d92711fb32be6e86e4ec43c76a42796babf023e85_prof);

        
        $__internal_9829e67ecc64affdf4c1b41acbb8102fdc5260a5d657efdb2c346486f712753d->leave($__internal_9829e67ecc64affdf4c1b41acbb8102fdc5260a5d657efdb2c346486f712753d_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faultymail:new.html.twig";
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
", "FaultyProductBundle:faultymail:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faultymail/new.html.twig");
    }
}
